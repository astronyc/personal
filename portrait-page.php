<?php
/**
 * Template Name: Portrait Page
 */

get_header(); ?>

<div id="portrait-page">
    <div class="page-wrap">
        <div class="container-wrap">
            <div class="content-wrap">
                <div id="slideshow-wrap">

                    <?php
    
        // check if the repeater field has rows of data
        if( have_rows('portrait_image') ):
    
        // loop through the rows of data
        while ( have_rows('portrait_image') ) : the_row(); ?>

                    <img src="<?php the_sub_field('portfolio_slider'); ?>">

                    <?php
    
        endwhile;
    
        else :
    
        // no rows found
    
        endif;
    
        ?>

                </div>
            </div>
        </div>
    </div>
</div>