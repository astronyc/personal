<?php
/**
 * This is the home page template file
 */

$featured_image = get_field('featured_image'); 
$photo_image = get_field('photo_image'); 
$dev_image = get_field('dev_image'); 
$astro_image = get_field('astro_image'); 
?>

<div class="landing-wrap">
    <?php get_header();?>
    <div class="inner-wrap">
        <div class="page-wrap">

            <div class="image-wrap" style="background-image:url(<?php echo $featured_image; ?>)">
            </div>

        </div>

    </div>
</div>




<div class="page-footer">
    <div class="footer-menu-1">
        <div class="astronaut">

            <div class="astronaut-location">
                <h5>Orbiting:</h5>
                <h5 class="current-location">New York, NY</h5>
            </div>
        </div>
    </div>
    <div class="footer-menu-2">
        <div class="menu-right right-about">
            <a href="/about/">About</a>
        </div>
        <div class="menu-right right-contact">
            <a href="/contact/">Contact</a>
        </div>
        <div class="menu-right right-instagram">
            <a href="www.instagram.com/andreaibarra/">Instagram</a>
        </div>
    </div>
</div>


<?php get_footer();?>