<?php
/**
 * Template Name: Photo Project Page
 */

get_header(); ?>

<div class="container-wrapper">
    <div class="scrolling-wrapper">
        <?php

// check if the repeater field has rows of data
if( have_rows('slider_image') ):

    // loop through the rows of data
    while ( have_rows('slider_image') ) : the_row(); ?>
        <div class="card">
            <img src="<?php the_sub_field('portfolio_slider'); ?>">
        </div>
        <?php

    endwhile;

else :

    // no rows found

endif;

?>
    </div>


    <div class="horizontal-scroll-wrap">

    </div>
</div>


<?php get_footer();