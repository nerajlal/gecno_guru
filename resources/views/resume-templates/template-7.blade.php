<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview - Modern Icons</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background-color: #eee;
        }
        .page {
            background: #fff;
            width: 210mm;
            min-height: 297mm;
            display: block;
            margin: 2em auto;
            padding: 2cm;
            box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
            position: relative;
            box-sizing: border-box;
        }
        .page::after {
            content: "";
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200'%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='20' fill='black' fill-opacity='0.05' transform='rotate(-30, 150, 100)'%3Egecnoguru.com%3C/text%3E%3C/svg%3E");
            background-repeat: repeat;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }
        .content { position: relative; z-index: 2; }
        .header { text-align: center; margin-bottom: 20px; }
        .header h1 { margin: 0; font-size: 3em; font-weight: 200; }
        .contact-info { text-align: center; margin-bottom: 20px; }
        .contact-info span { margin: 0 10px; }
        .section h2 { text-align: center; font-size: 1.5em; font-weight: 300; margin-bottom: 15px; letter-spacing: 2px; }
        .entry { margin-bottom: 15px; }

        @media print {
            body { background: white; margin: 0; }
            .page { margin: 0; box-shadow: none; height: auto; }
            .page::after { display: none; }
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="content">
            @if($resume)
                <div class="header">
                    <h1>{{ $resume->full_name }}</h1>
                </div>
                <div class="contact-info">
                    <span><i class="fas fa-map-marker-alt"></i> {{ $resume->address }}</span>
                    <span><i class="fas fa-phone"></i> {{ $resume->phone }}</span>
                    <span><i class="fas fa-envelope"></i> {{ $resume->email }}</span>
                </div>

                <div class="section">
                    <h2><i class="fas fa-user"></i> Summary</h2>
                    <p>{{ $resume->summary }}</p>
                </div>

                @if($resume->experiences->isNotEmpty())
                <div class="section">
                    <h2><i class="fas fa-briefcase"></i> Experience</h2>
                    @foreach($resume->experiences as $exp)
                    <div class="entry">
                        <h4><strong>{{ $exp->job_title }}</strong> | {{ $exp->company }}</h4>
                        <small>{{ $exp->start_date }} - {{ $exp->end_date }}</small>
                        <p>{{ $exp->responsibilities }}</p>
                    </div>
                    @endforeach
                </div>
                @endif

            @else
                <div style="text-align: center; padding: 50px;">
                    <h1>No Resume Data</h1>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
