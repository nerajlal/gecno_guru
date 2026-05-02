<?php
/**
 * GecnoGuru — Shared page layout (navbar + footer)
 * Usage: require '_layout.php'; then call page_start() / page_end()
 *
 * deploy: public_html/_layout.php
 */

define('APP_PATH', '/main/prod');
define('WHATSAPP', 'https://wa.me/918547349691');

function page_start(string $title, string $metaDesc = ''): void {
    $desc = $metaDesc ?: 'GecnoGuru — Your AI-powered career development platform.';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($desc) ?>">
    <title><?= htmlspecialchars($title) ?> — GecnoGuru</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/assets/landing.css">
    <link rel="stylesheet" href="/assets/page.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar" id="navbar">
    <div class="container">
        <div class="navbar-inner">
            <a href="/" class="logo"><span>Gecno</span>Guru</a>
            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li class="dropdown">
                    <a href="#">Services <i class="fas fa-chevron-down" style="font-size:0.7rem;margin-left:4px;"></i></a>
                    <div class="dropdown-menu">
                        <a href="<?= APP_PATH ?>/services">All Services</a>
                        <a href="<?= APP_PATH ?>/resume">Resume Builder</a>
                        <a href="<?= APP_PATH ?>/portfolio">Portfolio Builder</a>
                        <a href="<?= APP_PATH ?>/coverletter">Cover Letter</a>
                        <a href="<?= APP_PATH ?>/sessions">1-on-1 Sessions</a>
                    </div>
                </li>
                <li><a href="/about.php">About</a></li>
                <li><a href="/faq.php">FAQ</a></li>
                <li><a href="<?= APP_PATH ?>/contact">Contact</a></li>
            </ul>
            <a href="<?= APP_PATH ?>" class="btn-nav">Get Started</a>
            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</nav>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobile-menu">
    <a href="/">Home</a>
    <div>
        <a href="#" id="mobile-services-toggle" style="display:flex;align-items:center;justify-content:space-between;">
            Services <i class="fas fa-chevron-down" style="font-size:0.75rem;transition:transform 0.2s;"></i>
        </a>
        <div class="mobile-submenu" id="mobile-submenu" style="display:none;">
            <a href="<?= APP_PATH ?>/services">All Services</a>
            <a href="<?= APP_PATH ?>/resume">Resume Builder</a>
            <a href="<?= APP_PATH ?>/portfolio">Portfolio Builder</a>
            <a href="<?= APP_PATH ?>/coverletter">Cover Letter</a>
            <a href="<?= APP_PATH ?>/sessions">1-on-1 Sessions</a>
        </div>
    </div>
    <a href="/about.php">About</a>
    <a href="/faq.php">FAQ</a>
    <a href="<?= APP_PATH ?>/contact">Contact</a>
    <a href="<?= APP_PATH ?>" class="btn-nav" style="text-align:center;">Get Started</a>
</div>

<!-- PAGE HERO BANNER -->
<div class="page-hero gradient-bg">
    <div class="container">
        <div class="page-hero-inner">
            <h1 id="page-hero-title"><?= htmlspecialchars($title) ?></h1>
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <a href="/">Home</a>
                <i class="fas fa-chevron-right"></i>
                <span><?= htmlspecialchars($title) ?></span>
            </nav>
        </div>
    </div>
</div>

<!-- MAIN CONTENT starts here -->
<main class="page-main">
    <div class="container">
        <div class="page-content-card">
<?php
}

function page_end(): void {
?>
        </div><!-- /.page-content-card -->
    </div><!-- /.container -->
</main>

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="/" class="logo" style="display:block;margin-bottom:1rem;"><span>Gecno</span>Guru</a>
                <p>Your complete AI-powered career development platform. Build outstanding resumes, portfolios, and land your dream career.</p>
                <div class="footer-socials">
                    <a href="<?= WHATSAPP ?>" target="_blank" rel="noopener" class="social-btn"><i class="fab fa-whatsapp"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-btn"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4>Services</h4>
                <ul>
                    <li><a href="<?= APP_PATH ?>/resume">Resume Builder</a></li>
                    <li><a href="<?= APP_PATH ?>/coverletter">Cover Letter</a></li>
                    <li><a href="<?= APP_PATH ?>/portfolio">Portfolio Builder</a></li>
                    <li><a href="<?= APP_PATH ?>/sessions">1-on-1 Sessions</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Company</h4>
                <ul>
                    <li><a href="/about.php">About Us</a></li>
                    <li><a href="/faq.php">FAQ</a></li>
                    <li><a href="<?= APP_PATH ?>/contact">Contact</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Legal</h4>
                <ul>
                    <li><a href="/privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="/terms.php">Terms &amp; Conditions</a></li>
                    <li><a href="/refund-policy.php">Refund Policy</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <span>&copy; <?= date('Y') ?> GecnoGuru. All rights reserved.</span>
            <div class="footer-bottom-links">
                <a href="/privacy-policy.php">Privacy</a>
                <a href="/terms.php">Terms</a>
                <a href="/refund-policy.php">Refunds</a>
            </div>
        </div>
    </div>
</footer>

<script src="/assets/landing.js"></script>
</body>
</html>
<?php
}
