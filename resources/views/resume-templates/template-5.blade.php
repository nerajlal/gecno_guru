<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview - Corporate Blue</title>
    <style>
        body {
            font-family: 'Lato', sans-serif;
            color: #333;
            background-color: #eee;
        }
        .page {
            background: #fff;
            width: 210mm;
            min-height: 297mm;
            display: block;
            margin: 2em auto;
            padding: 1.5cm;
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
        .page-header {
            background-color: #0d47a1;
            color: white;
            padding: 20px;
            text-align: center;
            margin: -1.5cm -1.5cm 1.5cm -1.5cm;
            position: relative; z-index: 2;
        }
        .page-header h1 { margin: 0; font-size: 2.8em; }
        .page-header p { margin: 5px 0; }
        .section { margin-bottom: 20px; position: relative; z-index: 2; }
        .section h2 { color: #0d47a1; margin-bottom: 10px; font-size: 1.3em; }

        @media print {
            body { background: white; margin: 0; }
            .page { margin: 0; box-shadow: none; height: auto; }
            .page::after { display: none; }
        }
    </style>
</head>
<body>
    <div class="page">
        @if($resume)
            <div class="page-header">
                <h1>{{ $resume->full_name }}</h1>
                <p>{{ $resume->address }} | {{ $resume->phone }} | {{ $resume->email }}</p>
            </div>

            <div class="section">
                <h2>Summary</h2>
                <p>{{ $resume->summary }}</p>
            </div>

            @if($resume->experiences->isNotEmpty())
            <div class="section">
                <h2>Experience</h2>
                @foreach($resume->experiences as $exp)
                <div>
                    <h3><strong>{{ $exp->job_title }}</strong> at {{ $exp->company }} ({{ $exp->start_date }} - {{ $exp->end_date }})</h3>
                    <p>{{ $exp->responsibilities }}</p>
                </div>
                @endforeach
            </div>
            @endif

            @if($resume->educations->isNotEmpty())
            <div class="section">
                <h2>Education</h2>
                @foreach($resume->educations as $edu)
                <div>
                    <h3><strong>{{ $edu->degree }}</strong>, {{ $edu->school }} ({{$edu->year}})</h3>
                </div>
                @endforeach
            </div>
            @endif

            @if($resume->skills->isNotEmpty())
            <div class="section">
                <h2>Skills</h2>
                @foreach($resume->skills as $skill)
                    <div>
                        <h3><strong>{{ $skill->skill_category }}:</strong> {{ $skill->skills }}</h3>
                    </div>
                @endforeach
            </div>
            @endif

            @if($resume->projects->isNotEmpty())
            <div class="section">
                <h2>Projects</h2>
                @foreach($resume->projects as $project)
                <div>
                    <h3><strong>{{ $project->project_name }}</strong></h3>
                    <p>{{ $project->project_key_points }}</p>
                    <p><strong>Tech:</strong> {{ $project->technologies }} | <strong>Tools:</strong> {{ $project->tools }}</p>
                </div>
                @endforeach
            </div>
            @endif

            @if($resume->certifications->isNotEmpty())
            <div class="section">
                <h2>Certifications</h2>
                @foreach($resume->certifications as $cert)
                <p><strong>{{ $cert->certification_name }}</strong> - {{ $cert->issuing_organization }}</p>
                @endforeach
            </div>
            @endif

            @if($resume->interested_areas)
            <div class="section">
                <h2>Areas of Interest</h2>
                <p>{{ $resume->interested_areas }}</p>
            </div>
            @endif
        @else
            <div style="text-align: center; padding: 50px;">
                <h1>No Resume Data</h1>
                <p>Please fill out the form to see a preview.</p>
            </div>
        @endif
    </div>
</body>
</html>
