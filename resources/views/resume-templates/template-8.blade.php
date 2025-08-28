<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview - Classic Sidebar</title>
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            color: #333;
            background-color: #eee;
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
        .content { display: flex; position: relative; z-index: 2; height: 100%; padding: 2cm; }
        .main-content { width: 70%; }
        .sidebar { width: 30%; padding-left: 20px; }
        h1 { font-size: 2.5em; margin-bottom: 0; }
        h2 { font-size: 1.5em; border-bottom: 1px solid #ccc; padding-bottom: 5px; margin-top: 0; }
        h3 { font-size: 1.2em; }

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
                <div class="main-content">
                    <h1>{{ $resume->full_name }}</h1>
                    <p>{{ $resume->summary }}</p>

                    <h2>Experience</h2>
                    @foreach($resume->experiences as $exp)
                    <div>
                        <h3>{{ $exp->job_title }}</h3>
                        <p>{{ $exp->company }} | {{ $exp->start_date }} - {{ $exp->end_date }}</p>
                        <p>{{ $exp->responsibilities }}</p>
                    </div>
                    @endforeach

                    <h2>Projects</h2>
                    @foreach($resume->projects as $project)
                    <div>
                        <h3>{{ $project->project_name }}</h3>
                        <p>{{ $project->project_key_points }}</p>
                        <p><em>Tech: {{ $project->technologies }} | Tools: {{ $project->tools }}</em></p>
                    </div>
                    @endforeach
                </div>
                <div class="sidebar">
                    <h3>Contact</h3>
                    <p>{{ $resume->address }}</p>
                    <p>{{ $resume->phone }}</p>
                    <p>{{ $resume->email }}</p>

                    <h3>Education</h3>
                     @foreach($resume->educations as $edu)
                    <div>
                        <h4>{{ $edu->degree }}</h4>
                        <p>{{ $edu->school }} ({{$edu->year}})</p>
                    </div>
                    @endforeach

                    <h3>Skills</h3>
                     @foreach($resume->skills as $skill)
                    <div>
                        <h4>{{ $skill->skill_category }}</h4>
                        <p>{{ $skill->skills }}</p>
                    </div>
                    @endforeach

                    <h3>Certifications</h3>
                    @foreach($resume->certifications as $cert)
                        <p><strong>{{ $cert->certification_name }}</strong><br>{{ $cert->issuing_organization }}</p>
                    @endforeach

                    <h3>Interests</h3>
                    <p>{{ $resume->interested_areas }}</p>
                </div>
            @else
                <div style="text-align: center; padding: 50px; width: 100%;">
                    <h1>No Resume Data</h1>
                </div>
            @endif
        </div>
    </div>
</body>
</html>
