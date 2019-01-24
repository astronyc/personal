<?php
/**
 * Template Name: About Me Page
 */

$about_me_image = get_field('about_me_image'); 

get_header(); ?>

<div class="about-me-wrap">
    <div class="content-wrap">
        <div class="image-wrap">
            <img src="<?php echo $about_me_image; ?>" />
        </div>
        <div class="text-wrap">
            <div class="title-wrap">
                <h2> About Me </h2>
            </div>
            <div class="paragraph-wrap">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and
                    scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>