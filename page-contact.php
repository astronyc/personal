<?php
/**
 * Template Name: Contact Page
 */




get_header(); ?>

<div class="contact-section">
    <div class="outer-wrap">
        <div class="inner-wrap">
            <h2>Let's Connect</h2>
            <form class="form">
                <div class="id">
                    <div class="name">
                        <input id="name" type="text" name="name" placeholder="name">
                    </div>
                    <div class="email">
                        <input id="email" type="text" name="email" placeholder="email">
                    </div>
                    <div class="content">
                        <textarea name="content" id="content" cols="30" rows="10" placeholder="Message"></textarea>
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php get_footer();