<?php
/**
 * Template Name: Astro Page
 */
$space_image = get_field('space_image'); 

 get_header();
?>


<div id="astro-page">
    <div class="page-wrap">
        <div class="div-wrap">
            <div class="text-wrap">
                <h2>Astro</h2>
                <img src="<?php echo $space_image; ?>" />
                <h3>is everywhere.</h3>
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



        <?php get_footer();?>