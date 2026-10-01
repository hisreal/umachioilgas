<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

<title><?php echo $title; ?></title>

<script>
// Scroll-reveal setup: hide .wow elements from the first paint (avoids a
// visible -> hidden -> fade-in flash). If main.js never takes over,
// withdraw the class so content can't stay invisible.
(function () {
    var root = document.documentElement;
    if (!('IntersectionObserver' in window) ||
        window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        return;
    }
    root.classList.add('js-reveal');
    window.addEventListener('load', function () {
        setTimeout(function () {
            if (!window.revealReady) {
                root.classList.remove('js-reveal');
            }
        }, 1500);
    });
})();
</script>

<!-- Primary SEO -->
<meta name="description" content="U-Machi Oil & Gas Ltd provides reliable bulk petroleum supply, diesel delivery, mobile fuel services, marine gas oil and fuel logistics for industries, construction, marine and corporate organizations across Nigeria.">

<meta name="keywords" content="Oil and Gas Nigeria, Diesel Supply Nigeria, Bulk Petroleum Supply, Mobile Fuel Delivery Nigeria, Marine Gas Oil Supply, PMS Petrol Supply, Fuel Logistics Nigeria, U-Machi Oil and Gas Ltd">

<meta name="author" content="U-Machi Oil & Gas Ltd">
<meta name="robots" content="index, follow">

<link rel="canonical" href="https://www.umachioilgas.com/">

<!-- Open Graph SEO -->
<meta property="og:title" content="U-Machi Oil & Gas Ltd | Bulk Petroleum & Mobile Fuel Supply">
<meta property="og:description" content="Trusted petroleum supply company delivering diesel, petrol, LPG and mobile fuel solutions to industries, construction companies, marine operators and businesses in Nigeria.">
<meta property="og:image" content="https://www.umachioilgas.com/assets/img/logo2.png">
<meta property="og:url" content="https://www.umachioilgas.com">
<meta property="og:type" content="website">

<!-- Twitter SEO -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="U-Machi Oil & Gas Ltd">
<meta name="twitter:description" content="Reliable diesel supply, bulk petroleum delivery and mobile fuel services for industries and businesses across Nigeria.">
<meta name="twitter:image" content="https://www.umachioilgas.com/assets/img/logo2.png">

<!-- Favicon -->
<link rel="icon" href="assets/img/logo1.png" type="image/png">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Teko:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<!-- Font Awesome -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- Line Awesome -->
<link href="assets/css/line-awesome.min.css" rel="stylesheet">

<!-- Bar Filler -->
<link href="assets/css/barfiller.css" rel="stylesheet">

<!-- Magnific Popup -->
<link href="assets/css/magnific-popup.css" rel="stylesheet">

<!-- Flaticon -->
<link href="assets/css/flaticon.css" rel="stylesheet">

<!-- Owl Carousel -->
<link href="assets/css/owl.carousel.css" rel="stylesheet">

<?php if ($page === 'home'): ?>
<!-- Preload the homepage hero's first image (its largest paint) -->
<link rel="preload" as="image" href="assets/img/slider/home-hero.webp" fetchpriority="high">
<?php endif; ?>

<!-- Main CSS -->
<link rel="stylesheet" href="assets/css/style.css?v=<?php echo filemtime('assets/css/style.css');?>">

<!-- Responsive CSS -->
<link rel="stylesheet" href="assets/css/responsive.css?v=<?php echo filemtime('assets/css/responsive.css');?>">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Owl Carousel -->
<script src="assets/js/owl.carousel.min.js"></script>

<!-- Structured Data (Google SEO) -->
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "LocalBusiness",
 "name": "U-Machi Oil & Gas Ltd",
 "image": "https://www.umachioilgas.com/assets/img/logo2.png",
 "url": "https://www.umachioilgas.com",
 "telephone": "+2349000000000",
 "address": {
   "@type": "PostalAddress",
   "streetAddress": "KM 19 PH/ABA Expressway, Iriebe",
   "addressLocality": "Port Harcourt",
   "addressRegion": "Rivers State",
   "addressCountry": "Nigeria"
 },
 "areaServed": "Nigeria",
 "serviceType": [
   "Bulk Petroleum Supply",
   "Mobile Fuel Delivery",
   "Marine Gas Oil Supply",
   "Diesel Supply"
 ]
}
</script>

</head>

<body>

<!-- Header -->
<header class="header-area">

<div class="sticky-area">
<div class="navigation">

<div class="container">
<div class="row align-items-center">

<div class="col-lg-3">

<div class="logo">
<a class="navbar-brand" href="index.php">
<img src="assets/img/logo2.png" width="1200" height="404"
alt="U-Machi Oil and Gas Limited Nigeria Petroleum Supply Company">
</a>
</div>

</div>

<div class="col-lg-9">

<div class="main-menu">

<nav class="navbar navbar-expand-xl">

<button class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent"
aria-expanded="false"
aria-label="Toggle navigation">

<span style="background:#ff7b00" class="navbar-toggler-icon"></span>
<span style="background:#ff7b00" class="navbar-toggler-icon"></span>
<span style="background:#ff7b00" class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

<ul class="navbar-nav">

    <li class="nav-item">
        <a class="nav-link <?php if($page=='home') echo 'active'; ?>" href="index.php">Home</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php if($page=='about') echo 'active'; ?>" href="about.php">About</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php if(in_array($page, array('services','retaildepot','bulksupply','mobilefuel'))) echo 'active'; ?>" href="services.php">Services</a>
        <ul class="sub-menu">
            <li><a href="retaildepot.php">Retail & Depot Operations</a></li>
            <li><a href="bulksupply.php">Bulk Petroleum Marketing, Distribution & Supply</a></li>
            <li><a href="mobilefuel.php">Mobile Fuel Services</a></li>
        </ul>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php if($page=='hse') echo 'active'; ?>" href="hse.php">HSE</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php if($page=='industries') echo 'active'; ?>" href="industries.php">Industries</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php if($page=='faq') echo 'active'; ?>" href="faq.php">Faq</a>
    </li>

    <li class="nav-item">
        <a class="nav-link <?php if($page=='contact') echo 'active'; ?>" href="contact.php">Contact</a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" alt="_blank" href="https://portal.umachioilgas.com/index.php?route=auth%2Flogin">Staff Portal</a>
    </li>

    <li class="nav-item nav-cta-item">
        <a class="nav-cta-btn" href="assets/docs/company-profile.pdf" target="_blank" rel="noopener">Company Profile</a>
    </li>

</ul>

</div>

</nav>

</div>
</div>

</div>
</div>
</div>
</div>

<!-- Search Popup -->
<div class="search-popup">

<span class="search-back-drop"></span>

<div class="search-inner">

<div class="auto-container">

<div class="upper-text">
<div class="text">Search for anything.</div>
<button class="close-search" aria-label="Close search"><span class="la la-times"></span></button>
</div>

<form method="post" action="#">
<div class="form-group">
<label for="search-field" class="visually-hidden">Search</label>
<input id="search-field" type="search" name="search-field" placeholder="Search..." required>
<button type="submit" aria-label="Submit search"><i class="la la-search"></i></button>
</div>
</form>

</div>
</div>
</div>

</header>