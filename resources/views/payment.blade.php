<!DOCTYPE html>
<html>
<head>
    <title>Make a Payment</title>
</head>
<body>
    <h1>Resume Builder Subscription</h1>
    <p>Price: ₹100.00</p>

    <!-- Flash success message -->
    @if(session('success'))
        <div style="padding:10px; background:#e6ffed; color:#03643a; margin-bottom:10px;">
            {{ session('success') }}
        </div>
    @endif

    <!-- Error messages -->
    @if($errors->any())
        <div style="padding:10px; background:#ffecec; color:#8a1f11; margin-bottom:10px;">
            <ul style="margin:0; padding-left:20px;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('payment.initiate') }}" method="POST">
        @csrf
        <button type="submit">Pay with PhonePe</button>
    </form>
</body>
</html>