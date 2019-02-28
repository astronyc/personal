<?php
/**
 * Template Name: Photography Page
 */

$main_image = get_field('main_image'); 


get_header(); ?>

<div class="page-wrap">
    <?php if(get_field('photo_banner_repeater')): ?>

    <div class="photo-wrap">

        <?php while(has_sub_field('photo_banner_repeater')): ?>
        <a href="<?php the_sub_field('photo_project_link'); ?>">
            <div class="image-wrap" style="background-image:url(<?php the_sub_field('photo_project_image'); ?>)">
                <p>
                    <?php the_sub_field('photo_project_title'); ?>
                </p>

            </div>
        </a>
        <?php endwhile; ?>

    </div>
    <?php endif; ?>

</div>

<?php get_footer();