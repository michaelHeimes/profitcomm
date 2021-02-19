<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
 
$theme = get_field('page_theme');
 
$added_classes = 'insight-card cell';

$all_classes = $theme['value']." ".$added_classes;
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($all_classes); ?> role="article">					

	<div class="inner text-left">
    	
    	<div class="top">
	    	
	    	<?php 
			$image = get_field('card_image');
			if( !empty( $image ) ): ?>
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
	    	
    	</div>

		<div class="bottom" data-equalizer-watch>
			
			<div class="text-wrap">
			
				<h3><?php the_title();?></h3>
				
				<p><?php the_field('excerpt');?></p>
			
			</div>
			
			<div class="link-wrap">
				<a class="small-caps" href="<?php echo get_permalink();?>" rel="bookmark" title="<?php the_title_attribute(); ?>">Read More</a>
			</div>
				
		</div>
	
	</div>

</article> <!-- end article -->

