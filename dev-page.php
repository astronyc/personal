<?php
/**
 * Template Name: Developer Page
 */


get_header(); ?>



<div id="dev-page">
    <div class="page-wrap">
        <?php if(get_field('dev_page_repeater')): ?>

        <div class="photo-wrap">

            <?php while(has_sub_field('dev_page_repeater')): ?>
            <a href="<?php the_sub_field('dev_project_link'); ?>">
                <div class="image-wrap" style="background-image:url(<?php the_sub_field('dev_project_image'); ?>)">
                    <p>
                        <?php the_sub_field('dev_project_title'); ?>
                    </p>
                </div>
            </a>
            <?php endwhile; ?>

        </div>
        <?php endif; ?>

    </div>
</div>


<?php get_footer();