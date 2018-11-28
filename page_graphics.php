<?php
/**
 * Template Name: Graphics Page
 */

get_header(); 

$left_flat      = get_field('left_flat'); 
$right_flat     = get_field('right_flat'); 

?>

<div id="flat-magazine">
	<div class="col-xs-6">
		<img src="<?php echo $left_flat; ?>">
		hello
	</div><!-- end col-->
	<div class="col-xs-6">
		<img src="<?php echo $right_flat; ?>">
		yes do u copy
	</div><!-- end col-->
</div><!--flat-magazine-->

<main class="page-container grid-container"  role="main">


	<div class="col-xs-12">
		<div id="graphic-slideshow-wrap">										
			<?php
				// check if the repeater field has rows of data
				if( have_rows('graphic_slider') ):
			
				// loop through the rows of data
				while ( have_rows('graphic_slider') ) : the_row(); ?>
			
					<img src="<?php the_sub_field('slider_image'); ?>">
					
						<?php
			
						endwhile;
			
						else :
			
						// no rows found
			
						endif;
			
						?>
			
		</div>
	</div>
</main>

<?php get_footer();
