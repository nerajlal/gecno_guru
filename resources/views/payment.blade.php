<!DOCTYPE html>
<html>
<head>
    <title>Make a Payment</title>
</head>
<body>
    <h1>Resume Builder Subscription</h1>
    <p>Price: ₹100.00</p>
    <form action="{{ route('payment.initiate') }}" method="POST">
        @csrf
        <button type="submit">Pay with PhonePe</button>
    </form>
</body>
</html>