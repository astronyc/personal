<?php
/**
 * Template Name: Astro Page
 */
$space_image_01 = get_field('space_image_01'); 
$space_image_02 = get_field('space_image_02'); 
$space_image_03 = get_field('space_image_03'); 
$space_image_04 = get_field('space_image_04'); 
$space_image_05 = get_field('space_image_05'); 
$space_image_06 = get_field('space_image_06'); 
$space_image_07 = get_field('space_image_07'); 
$space_image_08 = get_field('space_image_08'); 

 get_header();
?>


<div id="astro-page">
    <div class="page-wrap">
        <div class="div-wrap">
            <div class="text-wrap" style="background-image:url('<?php echo $space_image_01; ?>')">
                <h2 class="astro">Astro</h2>
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
            <div class="full-wrap">
                <img src="<?php echo $space_image_02; ?>">
            </div>
            <div class="half-wrap">
                <div class="left-wrap">
                    <img src="<?php echo $space_image_03; ?>">
                </div>
                <div class="right-wrap">
                    <img src="<?php echo $space_image_04; ?>">
                </div>
            </div>
            <div class="full-wrap">
                <img src="<?php echo $space_image_05; ?>">
            </div>
            <div class="padded-wrap">
                <img src="<?php echo $space_image_06; ?>">

            </div>
            <div class="inverted-wrap">
                <h2 class="everywhere" style="background-image:url('<?php echo $space_image_01; ?>')">is everywhere.
                </h2>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>