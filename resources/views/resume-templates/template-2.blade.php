<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview - Dark Professional</title>
    <style>
        body {
            font-family: 'Georgia', serif;
            color: #f5f5f5;
            background-color: #555;
        }
        .page {
            background: #2c2c2c;
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
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200'%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='20' fill='white' fill-opacity='0.05' transform='rotate(-30, 150, 100)'%3Egecnoguru.com%3C/text%3E%3C/svg%3E");
            background-repeat: repeat;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }
        .header { text-align: center; margin-bottom: 30px; border-bottom: 1px solid #555; padding-bottom: 20px; position: relative; z-index: 2; }
        .header h1 { margin: 0; font-size: 2.5em; color: #a9d7f6; }
        .header p { margin: 5px 0; color: #ccc; }
        .section { margin-bottom: 20px; position: relative; z-index: 2; }
        .section h2 { border-left: 4px solid #a9d7f6; padding-left: 10px; margin-bottom: 15px; font-size: 1.4em; }
        .entry { margin-bottom: 15px; }
        .entry h3 { margin: 0; font-size: 1.1em; color: #a9d7f6; }
        .entry p { margin: 5px 0; }
        .entry .date { float: right; font-style: italic; color: #aaa; }

        @media print {
            body {
                background: #2c2c2c;
                margin: 0;
            }
            .page {
                margin: 0;
                box-shadow: none;
                height: auto;
            }
            .page::after {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        @if($resume)
            <div class="header">
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
                <div class="entry">
                    <span class="date">{{ $exp->start_date }} - {{ $exp->end_date }}</span>
                    <h3>{{ $exp->job_title }}</h3>
                    <p><strong>{{ $exp->company }}</strong></p>
                    <p>{{ $exp->responsibilities }}</p>
                </div>
                @endforeach
            </div>
            @endif

            @if($resume->educations->isNotEmpty())
            <div class="section">
                <h2>Education</h2>
                @foreach($resume->educations as $edu)
                <div class="entry">
                    <h3>{{ $edu->degree }}</h3>
                    <p>{{ $edu->school }}</p>
                </div>
                @endforeach
            </div>
            @endif

            @if($resume->skills->isNotEmpty())
            <div class="section">
                <h2>Skills</h2>
                @foreach($resume->skills as $skill)
                    <div class="entry">
                        <h3>{{ $skill->skill_category }}</h3>
                        <p>{{ $skill->skills }}</p>
                    </div>
                @endforeach
            </div>
            @endif

            @if($resume->projects->isNotEmpty())
            <div class="section">
                <h2>Projects</h2>
                @foreach($resume->projects as $project)
                <div class="entry">
                    <h3>{{ $project->project_name }}</h3>
                    <p><strong>Technologies:</strong> {{ $project->technologies }} | <strong>Tools:</strong> {{ $project->tools }}</p>
                    <p>{{ $project->project_key_points }}</p>
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
