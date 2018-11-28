<?php
/**
 * This is the home page template file
 * Template Name: Home Page
 */

$featured_image                         = get_field('featured_image');

get_header(); ?>

<div class="main-page-flex">
    <div class="left-vertical-menu">
        <ul>
            <li>
                <h2><a>mediums</a></h2>
            </li>
            <li>
                <h2><a>nudes</a></h2>
            </li>
        </ul>
    </div>
    <div class="featured-image">
        <img src="<?php echo $featured_image; ?>">
    </div>
    <div class="right-vertical-menu">
        <ul>
            <li>
                <h2><a>portraits</a></h2>
            </li>
            <li>
                <h2><a>places</a></h2>
            </li>
        </ul>
    </div>
</div>


<?php get_footer();  ?>