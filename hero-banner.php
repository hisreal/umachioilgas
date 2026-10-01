<?php
/**
 * Reusable interior-page hero banner — one consistent, premium treatment
 * used across every interior page.
 *
 * Set these variables before requiring this file:
 *
 *   $hero_bg       (string, required) background image path
 *   $hero_title    (string, required) HTML allowed (e.g. "Retail & Depot <br>Operations")
 *   $hero_subtitle (string, required) HTML allowed (e.g. with an inline <br>)
 */
?>
<section class="page-hero" style="background-image: url('<?php echo $hero_bg; ?>');">
    <div class="page-hero-overlay"></div>
    <div class="container">
        <div class="page-hero-content">
            <h1><?php echo $hero_title; ?></h1>
            <p><?php echo $hero_subtitle; ?></p>
        </div>
    </div>
</section>
<?php
// Clear so these don't accidentally leak into a later include on the same page.
unset($hero_bg, $hero_title, $hero_subtitle);
