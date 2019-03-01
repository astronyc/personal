<?php
/**
 * Template Name: About Me Page
 */

$about_me_image = get_field('about_me_image'); 
$education_image = get_field('education_image'); 


get_header(); ?>

<div class="about-me-wrap">
    <div class="content-wrap">
        <div class="row row3">
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
                        <br>
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

                        <h4>
                            <?php the_sub_field("exhibition_title"); ?>
                        </h4>
                        <h4>
                            <?php the_sub_field("location"); ?>
                        </h4>
                        <br class="display">
                        <?php endwhile; ?>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row row1">
                <div class="text-wrap">
                    <h3>About Drea</h3>
                </div>
                <div class="paragraph-wrap">
                    <p>hello Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has
                        been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of
                        type
                        and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>

        </div>

    </div>

</div>




<!--<div class="row row2">
            <div class="text-wrap">
                <div class="title-wrap">
                    <h2> Education </h2>
                </div>
                <div class="paragraph-wrap">
                    <h4>Parsons School of Design, Photography</h4>
                    <h4>Eugene Lang College, Interdisciplinary Science</h4>
                </div>
            </div>
          
        </div> -->

<?php get_footer(); ?>