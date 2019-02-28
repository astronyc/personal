<?php
/**
 * Template Name: Developer Page
 */


get_header(); ?>



<div id="dev-page">
    <div class="page-wrap">
        <?php if(get_field('dev_page_repeater')): ?>
        <div class="row first-row">
            <div class="box">

                <?php while(has_sub_field('dev_page_repeater')): ?>

                <div class="content-wrap" style="background-image: url('<?php the_sub_field('dev_project_image'); ?>')">
                    <div class="text-overlay">
                        <a class="link" href="<?php the_sub_field('dev_project_link'); ?>">
                            <?php the_sub_field('dev_project_title'); ?> </a>
                    </div>
                    <?php endwhile; ?>

                </div>

                <?php endif; ?>

            </div>

        </div>
    </div>
</div>


<?php get_footer();