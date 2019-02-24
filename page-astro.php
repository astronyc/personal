<?php
/**
 * Template Name: Astro Page
 */

 get_header();
?>


<div id="astro-page">
    <div class="page-wrap">
        <div class="div-wrap">
            <div class="text-wrap">
                <h2>Astro is everywhere.</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book.</p>
            </div>

            <div class="slider-wrap">
                <?php

            // check if the repeater field has rows of data
            if( have_rows('slider_image') ):

                // loop through the rows of data
                while ( have_rows('slider_image') ) : the_row(); ?>



                <div class="full-slider" style="background-image: url('<?php the_sub_field('portfolio_slider'); ?>')"></div>

                <?php

                endwhile;

            else :

                // no rows found

            endif;

            ?>
            </div>
        </div>

        <div class="page-footer">
            <div class="footer-menu-1">
                <div class="backtrack-link">
                    <a href="/home/">
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
    </div>

    <?php get_footer();?>