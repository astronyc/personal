<?php
/**
 * This is the home page template file
 */

$featured_image = get_field('featured_image'); 
?>

<div class="landing-wrap">
    <?php get_header();?>
    <div class="inner-wrap">
        <div class="page-wrap">

            <div class="image-wrap" style="background-image:url(<?php echo $featured_image; ?>)">
            </div>

        </div>

    </div>
</div>

<?php get_footer();?>