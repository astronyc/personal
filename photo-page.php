<?php
/**
 * Template Name: Photography Page
 */

$photo_page_main_photo = get_field("photo_page_main_photo");


get_header(); ?>



<div class="site-wrap">
    <div class="main-wrap">

        <div style="background: url(<?php echo $photo_page_main_photo; ?> ) no-repeat center; width:100%; height: 80vh; background-size:cover;"></div>
    </div>
</div>
</div>

<?php get_footer();