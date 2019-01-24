<?php
/**
 * This is the home page template file
 */

$featured_image = get_field('featured_image'); 
$photo_image = get_field('photo_image'); 
$dev_image = get_field('dev_image'); 
$astro_image = get_field('astro_image'); 
?>

<div class="landing-wrap">
    <?php get_header();?>
    <div class="inner-wrap">
        <div class="page-wrap" style="background-image: url('<?php echo $featured_image; ?>')">
            <div class="content-wrap">
                <div class="title">
                    <a href="/home/">
                        <h1>Drea Ibarra</h1>
                    </a>
                </div>

            </div>
            <div class="clear-wrap">
                <menu>
                    <div>
                        <li class="link li-photography"><a href="/photography/">Photographer</a></li>
                    </div>
                    <div>
                        <li class="link li-developer"><a href="/web-developer/">Developer</a></li>
                    </div>
                    <div>
                        <li class="link li-astronaut"><a href="/astro/">Space Deviant</a></li>
                    </div>
                    <div class="arrow-wrap">
                        <li class="li-arrow"><a href="">
                                <i class="fas fa-arrow-circle-down"></i>
                            </a></li>


                    </div>
                </menu>
            </div>
        </div>

    </div>
</div>

<div class="about-wrap-photo">
    <div class="content-wrap">
        <div class="image-wrap">
            <img src="<?php echo $photo_image; ?>" />
        </div>
        <div class="text-wrap">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</p>
        </div>
    </div>
</div>

<div class="about-wrap-dev">
    <div class="content-wrap">

        <div class="text-wrap">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</p>
        </div>
        <div class="image-wrap">
            <img src="<?php echo $dev_image; ?>" />
        </div>
    </div>
</div>

<div class="about-wrap-astro">
    <div class="content-wrap">
        <div class="image-wrap">
            <img src="<?php echo $astro_image; ?>" />
        </div>
        <div class="text-wrap">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.</p>
        </div>
    </div>
</div>

<div class="bottom-navbar-landing">
    <div class="content-wrap">
        <div class="menu-wrap">
            <ul>
                <li><a href="/photographer/">Photographer</a></li>
                <li><a href="/web-dev/">Developer</a></li>
                <li><a href="/astro/">Space Deviant</a></li>
                <li><a href="/about-me/">About Me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</div>


<?php get_footer();?>