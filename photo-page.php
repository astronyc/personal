<?php
/**
 * Template Name: Photography Page
 */

$photo_page_main_photo = get_field("photo_page_main_photo");


get_header(); ?>



<div class="site-wrap">
    <div class="main-wrap">

        <div style="background: url(<?php echo $photo_page_main_photo; ?> ) no-repeat center; width:100%; height: 80vh; background-size:cover;"></div>
    </div>
</div>
</div>

<div class="page-footer">
    <div class="footer-menu-1">
        <div class="backtrack-link">
            <a href='#top'>
                <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i> Beam me back home</a>
        </div>
        <div class="astronaut">
            <div class="astronaut-icon">
                <i class="fas fa-user-astronaut"></i>
            </div>
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

<?php get_footer();