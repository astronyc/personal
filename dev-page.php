<?php
/**
 * Template Name: Developer Page
 */

$dev_background = get_field("dev_background");

get_header(); ?>



<div id="dev-page" style="background-image: url('#')">
    <div class="page-wrap">
        <div class="row first-row">
            <div class="box box1">
                <div class="content-wrap" style="background-image: url('/Users/andreaibarra/Desktop/Screen Shot 2019-01-11 at 9.13.05 AM.png')">
                    <div class="text-overlay">
                        <a class="link" href="dev-project-page">
                            Weston Carew Designs
                        </a>
                    </div>
                </div>
            </div>
            <div class="box box2">
                <div class="content-wrap">
                    <div class="text-overlay">
                        <a class="link" href="#">
                            Second Example</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row second-row">
            <div class="box box3">
                <div class="content-wrap">
                    <div class="text-overlay">
                        Ejemplo Tres
                    </div>
                </div>
            </div>
            <div class="box box4">
                <div class="content-wrap">
                    <div class="text-overlay">
                        You get the idea
                    </div>
                </div>
            </div>
        </div>
        <div class="row third-row">
            <div class="box box5">
                <div class="content-wrap">
                    <div class="text-overlay">
                        Wazzzup
                    </div>
                </div>
            </div>
            <div class="box box6">
                <div class="content-wrap">
                    <div class="text-overlay">
                        Blase Blase
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="page-footer">
    <div class="footer-menu-1">
        <div class="backtrack-link">
            <a href="/home/">
                <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-left"></i> Beam me back home</a>
        </div>
        <div class="astronaut">

            <div class="astronaut-location">
                <h5>Orbiting:</h5>
                <h5 class="current-location">New York, NY</h5>
            </div>
        </div>
    </div>
    <div class="footer-menu-2">
        <div class="menu-right right-about">
            <a href="/about/">About</a>
        </div>
        <div class="menu-right right-contact">
            <a href="/contact/">Contact</a>
        </div>
        <div class="menu-right right-instagram">
            <a href="www.instagram.com/andreaibarra/">Instagram</a>
        </div>
    </div>
</div>
<?php get_footer();