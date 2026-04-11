<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;

class PhonePeService
{
    private $clientId;
    private $clientSecret;
    private $env;

    public function __construct()
    {
        $this->clientId = config('phonepe.client_id');
        $this->clientSecret = config('phonepe.client_secret');
        $this->env = config('phonepe.env', 'UAT');
    }

    public function getAccessToken()
    {
        $cacheKey = "phonepe_access_token_" . $this->clientId;
        if (Cache::has($cacheKey)) { return Cache::get($cacheKey); }

        $url = ($this->env === "PROD")
            ? "https://api.phonepe.com/apis/identity-manager/v1/oauth/token"
            : "https://api-preprod.phonepe.com/apis/pg-sandbox/v1/oauth/token";

        Log::info("PhonePe Access Token Request", ["url" => $url, "client_id" => $this->clientId]);

        $response = Http::withoutVerifying()->asForm()->post($url, [
            "client_id" => $this->clientId,
            "client_secret" => $this->clientSecret,
            "client_version" => 1,
            "grant_type" => "client_credentials",
        ]);

        if ($response->successful()) {
            $data = $response->json();
            $token = $data["access_token"] ?? null;
            if ($token) {
                Cache::put($cacheKey, $token, now()->addSeconds(($data["expires_in"] ?? 3600) - 60));
                return $token;
            }
        }

        Log::error("PhonePe Auth Failed", ["status" => $response->status(), "body" => $response->json()]);
        return null;
    }

    public function initiatePayment($amount, $transactionId, $redirectUrl)
    {
        Log::info("Service: initiatePayment calling getAccessToken");
        $token = $this->getAccessToken();
        if (!$token) {
            Log::error("Service: initiatePayment - No token");
            return ["success" => false, "message" => "Auth Failed"];
        }

        $url = ($this->env === "PROD")
            ? "https://api.phonepe.com/apis/pg/checkout/v2/pay"
            : "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/checkout/v2/pay";

        $payload = [
            "merchantOrderId" => $transactionId,
            "merchantTransactionId" => $transactionId,
            "amount" => (int)($amount * 100),
            "merchantUserId" => "MUID" . (auth()->id() ?? 0),
            "mobileNumber" => "9999999999",
            "paymentFlow" => [
                "type" => "PG_CHECKOUT",
                "merchantUrls" => [
                    "redirectUrl" => $redirectUrl
                ]
            ],
            "useDefaultCustomHooks" => true
        ];

        Log::info("PhonePe Payment Request", ["url" => $url, "payload" => $payload]);

        $response = Http::withoutVerifying()->withHeaders([
            "Authorization" => "O-Bearer " . $token,
            "Content-Type" => "application/json",
        ])->post($url, $payload);

        $data = $response->json();
        Log::info("PhonePe Payment Response", ["status" => $response->status(), "body" => $data]);

        if ($response->successful()) {
            $redirect = $data["data"]["redirectUrl"] ?? $data["redirectUrl"] ?? null;
            if ($redirect) {
                return ["success" => true, "redirectUrl" => $redirect];
            }
        }

        return ["success" => false, "message" => $data["message"] ?? "Failed"];
    }

    public function verifyStatus($transactionId)
    {
        $token = $this->getAccessToken();
        if (!$token) return null;

        $url = ($this->env === "PROD")
            ? "https://api.phonepe.com/apis/pg/checkout/v2/status/{$this->clientId}/{$transactionId}"
            : "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/checkout/v2/status/{$this->clientId}/{$transactionId}";

        return Http::withoutVerifying()->withHeaders([
            "Authorization" => "O-Bearer " . $token,
            "Content-Type" => "application/json",
        ])->get($url)->json();
    }
}
