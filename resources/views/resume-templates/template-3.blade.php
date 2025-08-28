<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview - Minimal White</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            color: #444;
            background-color: #eee;
            line-height: 1.6;
        }
        .page {
            background: white;
            width: 210mm;
            height: 297mm;
            display: block;
            margin: 2em auto;
            padding: 2cm;
            box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
        }
        .watermark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-45deg);
            font-size: 120px;
            color: rgba(0, 0, 0, 0.05);
            font-weight: bold;
            pointer-events: none;
            white-space: nowrap;
            z-index: 1;
        }
        .container {
            display: flex;
            position: relative;
            z-index: 2;
            height: 100%;
        }
        .left-column { width: 30%; padding-right: 20px; border-right: 1px solid #eee; }
        .right-column { width: 70%; padding-left: 20px; }
        .header h1 { font-size: 2em; margin: 0; }
        .header p { font-size: 0.9em; margin: 2px 0; }
        .section { margin-bottom: 20px; }
        .section h2 { font-size: 1.1em; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 10px; color: #000; }
        .entry h3 { font-size: 1em; margin: 0; }
        .entry p { font-size: 0.9em; margin: 2px 0; }

        @media print {
            body {
                background: white;
                margin: 0;
            }
            .page {
                margin: 0;
                box-shadow: none;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="watermark">gecnoguru.com</div>
        <div class="container">
            @if($resume)
                <div class="left-column">
                    <div class="header">
                        <h1>{{ $resume->full_name }}</h1>
                    </div>
                    <div class="section">
                        <h2>Contact</h2>
                        <p>{{ $resume->address }}</p>
                        <p>{{ $resume->phone }}</p>
                        <p>{{ $resume->email }}</p>
                    </div>

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

                    @if($resume->interested_areas)
                    <div class="section">
                        <h2>Interests</h2>
                        <p>{{ $resume->interested_areas }}</p>
                    </div>
                    @endif
                </div>
                <div class="right-column">
                    <div class="section">
                        <h2>Summary</h2>
                        <p>{{ $resume->summary }}</p>
                    </div>

                    @if($resume->experiences->isNotEmpty())
                    <div class="section">
                        <h2>Experience</h2>
                        @foreach($resume->experiences as $exp)
                        <div class="entry">
                            <h3>{{ $exp->job_title }} at {{ $exp->company }}</h3>
                            <p><em>{{ $exp->start_date }} - {{ $exp->end_date }}</em></p>
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

                    @if($resume->projects->isNotEmpty())
                    <div class="section">
                        <h2>Projects</h2>
                        @foreach($resume->projects as $project)
                        <div class="entry">
                            <h3>{{ $project->project_name }}</h3>
                            <p>{{ $project->project_key_points }}</p>
                            <p><strong>Tech:</strong> {{ $project->technologies }}</p>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    @if($resume->certifications->isNotEmpty())
                    <div class="section">
                        <h2>Certifications</h2>
                        @foreach($resume->certifications as $cert)
                        <p>{{ $cert->certification_name }} ({{ $cert->issuing_organization }})</p>
                        @endforeach
                    </div>
                    @endif
                </div>
            @else
                <div style="text-align: center; padding: 50px; width: 100%;">
                    <h1>No Resume Data</h1>
                    <p>Please fill out the form to see a preview.</p>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
