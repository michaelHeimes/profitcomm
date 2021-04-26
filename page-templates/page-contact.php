<?php 
/**
 * Template Name: Contact Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
			    <div class="grid-container">
				    <div class="grid-x grid-padding-x">
					    
					    <div class="heading-wrap cell small-12 medium-8 medium-offset-4 ">
						    <h1><?php the_field('heading');?></h1>
					    </div>
					    
					    <div class="left cell small-12 medium-4">
							<?php the_field('copy');?>
					    </div>
			
					    <div class="right cell small-12 medium-8">
							<?php gravity_form( 1, false, false, false, '', true );?>
					    </div>			    
						
				    </div>
			    </div>
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>