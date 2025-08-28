<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume Preview</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            background-color: #f0f2f5;
        }
        .preview-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .preview-header {
            width: 100%;
            max-width: 210mm; /* A4 width */
            padding: 10px 0;
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }
        /* Re-using watermark style from templates */
        .watermarked {
            position: relative;
            background-color: white;
        }
        .watermarked::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100' width='100' height='100' fill-opacity='.05' fill='%23000'%3e%3ctext x='50' y='50' dominant-baseline='middle' text-anchor='middle' transform='rotate(-45, 50, 50)' font-size='14' font-family='Arial'%3egecnoguru.com%3c/text%3e%3c/svg%3e");
            background-repeat: repeat;
            pointer-events: none;
            z-index: 1;
        }
        .resume-content {
            position: relative;
            z-index: 2;
        }
    </style>
</head>
<body>
    <div class="preview-container">
        <div class="preview-header">
            <button class="btn btn-primary" disabled>Download (Coming Soon)</button>
        </div>
        <div class="watermarked">
            <div class="resume-content">
                @include('resume-templates.' . $template, ['resume' => $resume])
            </div>
        </div>
    </div>
</body>
</html>
