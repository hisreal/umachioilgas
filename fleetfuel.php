<?php
$title = "Fleet Fuel Management | U-Machi Oil & Gas Ltd";
$page = "fleetfuel";
require_once('header.php'); ?>

<?php
$hero_bg = 'assets/img/slider/home-hero.webp';
$hero_title = 'Fleet Fuel Management';
$hero_subtitle = 'Structured fuel supply solutions for fleet operators, built around efficiency and accountability.';
require_once('hero-banner.php');
?>

<!-- Overview -->
<div class="chooseus-area section-padding">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <div class="section-title">
                    <h6>Overview</h6>
                </div>
                <p class="highlight mt-4">
                    We offer structured fuel supply solutions for fleet operators, designed to keep vehicles and
                    equipment running with minimal disruption. Our Fleet Fuel Management service combines scheduled
                    deliveries, consumption monitoring, and transparent billing so businesses can plan around a
                    dependable, accountable fuel supply.
                </p>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="feature-img wow fadeInUp" data-wow-delay=".6s">
                    <!-- PLACEHOLDER IMAGE: swap src for the fleet photo when ready -->
                    <img src="assets/img/about-img.webp" alt="Fleet Fuel Management" loading="lazy">
                </div>
            </div>

        </div>
    </div>
</div>

<!-- What's included -->
<section class="services-section section-dark">
    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h6>What&rsquo;s Included</h6>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-2">
            <div class="col-lg-3 col-md-6">
                <div class="benefit-card is-tile">
                    <div class="benefit-icon"><i class="bi bi-calendar-check"></i></div>
                    <h6 class="fw-bold heading">Scheduled Fuel Deliveries</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="benefit-card is-tile">
                    <div class="benefit-icon"><i class="bi bi-speedometer2"></i></div>
                    <h6 class="fw-bold heading">Consumption Monitoring</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="benefit-card is-tile">
                    <div class="benefit-icon"><i class="bi bi-receipt"></i></div>
                    <h6 class="fw-bold heading">Corporate Billing Systems</h6>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="benefit-card is-tile">
                    <div class="benefit-icon"><i class="bi bi-headset"></i></div>
                    <h6 class="fw-bold heading">Dedicated Supply Coordination</h6>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA (placeholder copy: edit to taste) -->
<div class="section-padding">
    <div class="container">
        <div class="partner-cta d-flex flex-wrap justify-content-between align-items-center">
            <div class="partner-cta-text">
                <h3>Keep Your Fleet Moving</h3>
                <p>Talk to us about a scheduled, accountable fuel supply for your fleet.</p>
            </div>
            <a href="contact.php#quotes" class="nav-cta-btn partner-cta-btn">Get a Quote Now</a>
        </div>
    </div>
</div>

<?php require_once('footer.php'); ?>
