<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview - Modern Elegance</title>
    <style>
        body {
            font-family: 'Calibri', sans-serif;
            color: #333;
            background-color: #eee;
        }
        .page {
            background: white;
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
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='200'%3E%3Ctext x='50%25' y='50%25' dominant-baseline='middle' text-anchor='middle' font-size='20' fill-opacity='0.05' transform='rotate(-30, 150, 100)'%3Egecnoguru.com%3C/text%3E%3C/svg%3E");
            background-repeat: repeat;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }
        .container {
            display: flex;
            position: relative;
            z-index: 2;
            height: 100%;
        }
        .left-column { width: 35%; background: #34495e; color: #fff; padding: 2cm; }
        .right-column { width: 65%; padding: 2cm; }
        .header h1 { font-size: 2.2em; margin-bottom: 5px; }
        .header h2 { font-size: 1.2em; margin: 0; font-weight: 300; }
        .section { margin-bottom: 20px; }
        .section h3 { font-size: 1.2em; text-transform: uppercase; margin-bottom: 10px; padding-bottom: 5px; border-bottom: 1px solid; }
        .left-column .section h3 { border-bottom-color: #fff; }
        .right-column .section h3 { border-bottom-color: #34495e; }
        .entry { margin-bottom: 15px; }
        .entry h4 { margin: 0; font-size: 1.1em; }
        .entry p { margin: 2px 0; }

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
            .page::after {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="container">
            @if($resume)
                <div class="left-column">
                    <div class="header">
                        <h1>{{ $resume->full_name }}</h1>
                    </div>
                    <div class="section">
                        <h3>Contact</h3>
                        <p>{{ $resume->address }}</p>
                        <p>{{ $resume->phone }}</p>
                        <p>{{ $resume->email }}</p>
                    </div>

                    @if($resume->skills->isNotEmpty())
                    <div class="section">
                        <h3>Skills</h3>
                        @foreach($resume->skills as $skill)
                            <div class="entry">
                                <h4>{{ $skill->skill_category }}</h4>
                                <p>{{ $skill->skills }}</p>
                            </div>
                        @endforeach
                    </div>
                    @endif

                    @if($resume->interested_areas)
                    <div class="section">
                        <h3>Interests</h3>
                        <p>{{ $resume->interested_areas }}</p>
                    </div>
                    @endif
                </div>
                <div class="right-column">
                    <div class="section">
                        <h3>Summary</h3>
                        <p>{{ $resume->summary }}</p>
                    </div>

                    @if($resume->experiences->isNotEmpty())
                    <div class="section">
                        <h3>Experience</h3>
                        @foreach($resume->experiences as $exp)
                        <div class="entry">
                            <h4>{{ $exp->job_title }} at {{ $exp->company }}</h4>
                            <p><em>{{ $exp->start_date }} - {{ $exp->end_date }}</em></p>
                            <p>{{ $exp->responsibilities }}</p>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    @if($resume->educations->isNotEmpty())
                    <div class="section">
                        <h3>Education</h3>
                        @foreach($resume->educations as $edu)
                        <div class="entry">
                            <h4>{{ $edu->degree }}</h4>
                            <p>{{ $edu->school }} ({{$edu->year}})</p>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    @if($resume->projects->isNotEmpty())
                    <div class="section">
                        <h3>Projects</h3>
                        @foreach($resume->projects as $project)
                        <div class="entry">
                            <h4>{{ $project->project_name }}</h4>
                            <p>{{ $project->project_key_points }}</p>
                            <p><strong>Tech:</strong> {{ $project->technologies }}</p>
                        </div>
                        @endforeach
                    </div>
                    @endif

                    @if($resume->certifications->isNotEmpty())
                    <div class="section">
                        <h3>Certifications</h3>
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
