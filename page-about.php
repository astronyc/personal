<?php
/**
 * Template Name: About Me Page
 */

$about_me_image = get_field('about_me_image'); 
$education_image = get_field('education_image'); 
$about = get_field('about');


get_header(); ?>

<div class="about-me-wrap">
    <div class="content-wrap">
        <div class="row row1">
            <div class="text-wrap">
                <div class="left-wrap">
                    <div class="title-wrap">
                        <h3>Publications</h3>
                    </div>
                    <?php if(get_field('publications')): ?>
                    <div class="paragraph-wrap">
                        <?php while(has_sub_field('publications')): ?>

                        <h4>
                            <?php the_sub_field("publication_title"); ?>
                        </h4>
                        <h4>
                            <?php the_sub_field("platform"); ?>
                        </h4>

                        <?php endwhile; ?>

                    </div>
                    <?php endif; ?>

                </div>
                <div class="right-wrap">
                    <div class="title-wrap">
                        <h3>Exhibitions</h3>
                    </div>
                    <?php if(get_field('exhibitions')): ?>
                    <div class="paragraph-wrap">
                        <?php while(has_sub_field('exhibitions')): ?>

                        <?php if(has_sub_field('exhibitions')): ?>
                        <h4>
                            <?php the_sub_field("exhibition_title"); ?>
                        </h4>

                        <h4>
                            <?php the_sub_field("location"); ?>
                            <?php endif; ?>

                        </h4>
                        <?php endwhile; ?>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row row2">
                <div class="text-wrap">
                    <h3>About Drea</h3>
                </div>
                <div class="paragraph-wrap">
                    <p>
                        <?php echo $about; ?>
                    </p>
                </div>
            </div>

        </div>

    </div>

</div>


<?php get_footer(); ?>