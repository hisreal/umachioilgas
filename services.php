<?php
$title = "Our Services | U-Machi Oil & Gas Ltd";
$page = "services";
require_once("header.php"); ?>

<?php
$hero_bg = 'assets/img/slider/home-hero.webp';
$hero_title = 'Our Services';
$hero_subtitle = 'U-Machi Oil & Gas Ltd provides a comprehensive range of petroleum supply and fuel logistics services.';
require_once('hero-banner.php');
?>

<!-- SERVICES SECTION -->
<section class="services-section section-dark">
    <div class="container">

        <!-- Section Header -->
      		<div class="row">
 				<div class="col-xl-12 col-lg-12 text-center">
 					<div class="section-title">
 						<h6>What we do</h6>
						<br>
						<br>
						<br>
 					</div>
 				</div>
 			</div>

        <div class="row g-4 justify-content-center">

            <!-- Service 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card p-4 h-100 d-flex flex-column text-center">

                    <div class="service-icon mb-4">
                        <img src="assets/img/icon/retail.png" alt="Retail & Depot Operations">
                    </div>

                    <h5 class="fw-bold heading">Retail & Depot Operations</h5>

                    <p class="flex-grow-1 mt-3">
                        Our Retail & Depot Operations are designed to ensure that every U-Machi location delivers efficient, controlled, safe, and customer-focused petroleum services.
                    </p>

                    <a href="retaildepot" class="btn btn-umachi w-100 mt-3">Read More</a>

                </div>
            </div>

            <!-- Service 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card p-4 h-100 d-flex flex-column text-center">

                    <div class="service-icon mb-4">
                        <img src="assets/img/icon/barrel.png" alt="Bulk Petroleum Marketing, Distribution & Supply">
                    </div>

                    <h5 class="fw-bold heading">Bulk Petroleum Marketing, Distribution & Supply</h5>

                    <p class="flex-grow-1 mt-3">
                        We provide reliable bulk petroleum marketing, distribution, and supply solutions to commercial, industrial, retail, and other high-volume customers.
                    </p>

                    <a href="bulksupply" class="btn btn-umachi w-100 mt-3">Read More</a>

                </div>
            </div>

            <!-- Service 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="service-card p-4 h-100 d-flex flex-column text-center">

                    <div class="service-icon mb-4">
                        <img src="assets/img/icon/fuel-station.png" alt="Mobile Fuel Service">
                    </div>

                    <h5 class="fw-bold heading">Mobile Fuel Service</h5>

                    <p class="flex-grow-1 mt-3">
                        We provide mobile fuel delivery services designed to bring petroleum products directly to customers at their preferred locations.
                    </p>

                    <a href="mobilefuel" class="btn btn-umachi w-100 mt-3">Read More</a>

                </div>
            </div>

        </div>
    </div>
</section>


<?php require_once('footer.php'); ?>