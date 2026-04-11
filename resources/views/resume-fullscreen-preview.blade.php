@include('includes.header')

<style>
    /* Scoped styles for this page */
    .preview-page-container {
        padding-top: 100px; /* Increased padding to push content down from navbar */
        padding-bottom: 40px;
        background-color: #f0f2f5;
    }
    .preview-controls {
        max-width: 210mm; /* A4 width */
        margin: 0 auto 20px auto;
        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }
    .watermarked-preview {
        max-width: 210mm; /* A4 width */
        margin: 0 auto;
        position: relative;
        background-color: white;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .watermarked-preview::before {
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
    .resume-content-container {
        position: relative;
        z-index: 2;
    }
</style>

<div class="preview-page-container">
    <div class="preview-controls">
        <a href="javascript:history.back()" class="btn btn-secondary">Back</a>
        <button class="btn btn-primary" disabled>Download (Coming Soon)</button>
    </div>
    <div class="watermarked-preview">
        <div class="resume-content-container">
            @include('resume-templates.' . $template, ['resume' => $resume])
        </div>
    </div>
</div>

@include('includes.footer')
