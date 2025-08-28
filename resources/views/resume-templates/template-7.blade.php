<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview - Creative Splash</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #444;
            background-color: #f0f0f0;
        }
        .page {
            background: #fff;
            width: 210mm;
            min-height: 297mm;
            display: block;
            margin: 2em auto;
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
        .content-wrapper { position: relative; z-index: 2; padding: 2cm; }
        .header {
            padding-bottom: 20px;
            border-bottom: 4px solid #4a90e2;
            margin-bottom: 20px;
        }
        .header h1 { font-size: 3em; margin: 0; color: #4a90e2; }
        .header p { font-size: 1.1em; margin: 5px 0; }
        .main-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 30px;
        }
        .section h2 {
            color: #4a90e2;
            font-size: 1.2em;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }
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
        <div class="content-wrapper">
            @if($resume)
                <div class="header">
                    <h1>{{ $resume->full_name }}</h1>
                    <p>{{ $resume->email }} | {{ $resume->phone }} | {{ $resume->address }}</p>
                </div>

                <div class="main-grid">
                    <div class="left-column">
                        <div class="section">
                            <h2>Skills</h2>
                            @foreach($resume->skills as $skill)
                                <div class="entry">
                                    <strong>{{ $skill->skill_category }}:</strong>
                                    <p>{{ $skill->skills }}</p>
                                </div>
                            @endforeach
                        </div>
                        <div class="section">
                            <h2>Certifications</h2>
                            @foreach($resume->certifications as $cert)
                                <p>{{ $cert->certification_name }}</p>
                            @endforeach
                        </div>
                        <div class="section">
                            <h2>Interests</h2>
                            <p>{{ $resume->interested_areas }}</p>
                        </div>
                    </div>

                    <div class="right-column">
                        <div class="section">
                            <h2>Summary</h2>
                            <p>{{ $resume->summary }}</p>
                        </div>
                        <div class="section">
                            <h2>Experience</h2>
                            @foreach($resume->experiences as $exp)
                            <div class="entry">
                                <h3><strong>{{ $exp->job_title }}</strong> at {{ $exp->company }}</h3>
                                <small>{{ $exp->start_date }} - {{ $exp->end_date }}</small>
                                <p>{{ $exp->responsibilities }}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="section">
                            <h2>Education</h2>
                            @foreach($resume->educations as $edu)
                            <div class="entry">
                                <h3><strong>{{ $edu->degree }}</strong> ({{$edu->year}})</h3>
                                <p>{{ $edu->school }}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="section">
                            <h2>Projects</h2>
                            @foreach($resume->projects as $project)
                            <div class="entry">
                                <h3><strong>{{ $project->project_name }}</strong></h3>
                                <p>{{ $project->project_key_points }}</p>
                                <p><em>Tech: {{ $project->technologies }} | Tools: {{ $project->tools }}</em></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @else
                <div style="text-align: center; padding: 50px;">
                    <h1>No Resume Data</h1>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
