<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;

class GeminiTestController extends Controller
{
    /**
     * Test the Gemini API.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        try {
            $result = Gemini::generativeModel(model: 'gemini-1.5-flash')->generateContent('Hello');
            return response($result->text());
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
