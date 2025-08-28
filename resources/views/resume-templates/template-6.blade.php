<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview - Timeline Style</title>
    <style>
        body {
            font-family: 'Century Gothic', sans-serif;
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
        .header h1 { margin: 0; font-size: 2.5em; }
        .timeline { border-left: 2px solid #ccc; margin-left: 20px; padding-left: 20px; }
        .timeline-item { position: relative; margin-bottom: 20px; }
        .timeline-item::before {
            content: '';
            background-color: #fff;
            border-radius: 50%;
            border: 3px solid #ccc;
            position: absolute;
            left: -31px;
            top: 5px;
            width: 15px;
            height: 15px;
            z-index: 1;
        }

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
                    <p>{{ $resume->address }} | {{ $resume->phone }} | {{ $resume->email }}</p>
                </div>

                <h2>Summary</h2>
                <p>{{ $resume->summary }}</p>
                <hr>

                @if($resume->experiences->isNotEmpty())
                <h2>Experience</h2>
                <div class="timeline">
                    @foreach($resume->experiences as $exp)
                    <div class="timeline-item">
                        <h4><strong>{{ $exp->job_title }}</strong> at {{ $exp->company }}</h4>
                        <span>{{ $exp->start_date }} - {{ $exp->end_date }}</span>
                        <p>{{ $exp->responsibilities }}</p>
                    </div>
                    @endforeach
                </div>
                @endif

                @if($resume->educations->isNotEmpty())
                <h2>Education</h2>
                <div class="timeline">
                    @foreach($resume->educations as $edu)
                     <div class="timeline-item">
                        <h4><strong>{{ $edu->degree }}</strong> ({{$edu->year}})</h4>
                        <p>{{ $edu->school }}</p>
                    </div>
                    @endforeach
                </div>
                @endif

                <!-- Other sections can be added here without timeline style -->

            @else
                <div style="text-align: center; padding: 50px;">
                    <h1>No Resume Data</h1>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
