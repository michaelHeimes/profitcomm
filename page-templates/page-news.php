<?php 
/**
 * Template Name: News Page
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
	
		<div class="inner-content">
	
		    <main class="main" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>				
			    
				<div class="grid-x grid-padding-x">
					<?php if( $heading = get_field('heading') ):?>
					<div class="cell text-center">
						<h2><?php echo $heading;?></h2>
					</div>
					<?php endif;?>
		
					<?php if( $copy = get_field('copy') ):?>
					<div class="copy-wrap cell text-center">
						<p><span class="large-copy"><?php echo $copy;?></span></p>
					</div>
					<?php endif;?>
				</div>
			        
			   
<!--
			    <div class="filter-buttons-container grid-container fluid insights-cards-wrap">
				    
				    <div class="filter-buttons grid-x grid-padding-x align-center">
							
						<?php
							$args = array(
								'post_type'  => 'insights_post',
								'taxonomy' => 'site_theme'
							);
							$terms = get_terms($args);
						?>
						
						<?php foreach ($terms as $term): ?>
						<div class="cell shrink">
							<button class="theme-button <?php echo $term->slug ;?>" data-repeater="default" data-posts-per-page="9"  data-scroll="false" data-taxonomy="site_theme" data-taxonomy-terms="<?php echo $term->slug ;?>" aria-label="Show <?php echo $term->name; ?> Insights">
								<span class="theme-name"><?php echo $term->name; ?></span>
							</button>
						</div>
						<?php endforeach; ?>
						
					    <div class="cell small-12 text-center">
					    	<button class="active all" data-repeater="default" data-posts-per-page="9"  data-scroll="false" data-taxonomy="site_theme" data-taxonomy-terms="" aria-label="Show All Insights"><span>All</span></button>
					    </div>
								
					</div>
					
			    </div>
-->
			    				    			    
			    <?php echo do_shortcode('[ajax_load_more container_type="div" css_classes="post-grid grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3" post_type="news_post" posts_per_page="9" images_loaded="true" scroll="false" transition_container="false" button_label="Load More News"]');?>
		
			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>