<?php
/**
 * Template Name: About Me Page
 */

$about_me_image = get_field('about_me_image'); 
$education_image = get_field('education_image'); 


get_header(); ?>

<div class="about-me-wrap">
    <div class="content-wrap">
        <div class="row row1">
            <div class="image-wrap">
                <img src="<?php echo $about_me_image; ?>" />
            </div>
            <div class="text-wrap">
                <div class="title-wrap">
                    <h2> About Me </h2>
                </div>
                <div class="paragraph-wrap">
                    <p>hello Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and
                        scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
        <div class="row row2">
            <div class="text-wrap">
                <div class="title-wrap">
                    <h2> Education </h2>
                </div>
                <div class="paragraph-wrap">
                    <h4>Parsons School of Design, Photography</h4>
                    <h4>Eugene Lang College, Interdisciplinary Science</h4>
                </div>
            </div>
            <div class="image-wrap">
                <img src="<?php echo $education_image; ?>" />
            </div>
        </div>
        <div class="row row3">
            <div class="text-wrap">
                <div class="left-wrap">
                    <div class="title-wrap">
                        <h2> Publications </h2>
                    </div>
                    <div class="paragraph-wrap">
                        <h4>Visions of a Wasteland | Sage Magazine | 2017</h4>
                        <h4>Yale School of Forestry and Environmental Studies</h4>
                        <br>
                        <h4>The Technology Issue | 2017</h4>
                        <h4>Flat Magazine</h4>
                        <br>
                        <h4>Astrophilia | 2016</h4>
                        <h4>Self-published Hardcover</h4>
                        <br>
                        <h4>Loose Buttons | 2016</h4>
                        <h4>LadyGunn Magazine Online</h4>
                        <br>
                        <h4>J. Colby Smith | 2014</h4>
                        <h4>The Vice Channels: i-D Online</h4>
                        <br>
                    </div>
                </div>
                <div class="right-wrap">
                    <div class="title-wrap">
                        <h2> Exhibitions </h2>
                    </div>
                    <div class="paragraph-wrap">
                        <h4>Transitions | Bronx Breeze Gallery | 2017</h4>
                        <h4>En Foco: The Apartment Gallery Series</h4>
                        <br>
                        <h4>Astrophilia | Milk Gallery | 2016</h4>
                        <h4>Parsons Senior Exhibition</h4>
                        <br>
                        <h4>Two Rooms | The Hermitage Museum, Russia | 2015</h4>
                        <h4>Within and Without Exhibition</h4>
                        <br>
                        <h4>Fleeting | Parsons Gallery | 2015</h4>
                        <h4>Re:Definition Exhibition</h4>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>