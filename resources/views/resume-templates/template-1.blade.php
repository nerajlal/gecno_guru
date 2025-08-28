<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview - Classic Professional</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #333;
            background-color: #eee; /* Grey background to see the page */
        }
        .page {
            background: white;
            width: 210mm;
            min-height: 297mm;
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
        .content {
            position: relative;
            z-index: 2;
        }
        .header { text-align: center; margin-bottom: 30px; }
        .header h1 { margin: 0; font-size: 2.5em; font-weight: bold; }
        .header p { margin: 5px 0; color: #555; }
        .section { margin-bottom: 20px; }
        .section h2 { border-bottom: 2px solid #333; padding-bottom: 5px; margin-bottom: 15px; font-size: 1.2em; text-transform: uppercase; letter-spacing: 1px; }
        .entry { margin-bottom: 15px; }
        .entry h3 { margin: 0; font-size: 1.1em; }
        .entry p { margin: 5px 0; }
        .entry .date { float: right; font-style: italic; color: #555; }

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
        <div class="content">
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
    </div>
</body>
</html>
