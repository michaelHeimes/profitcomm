<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
 
/*
$theme = get_field('page_theme');
 
$added_classes = 'insight-card cell';

$all_classes = $theme['value']." ".$added_classes;
*/
 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('insight-card cell'); ?> role="article">					

	<div class="inner text-left">
    	
    	<div class="top">
	    	
	    	<?php 
			$image = get_field('card_image');
			if( !empty( $image ) ): ?>
			    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
			
			
			<svg xmlns="http://www.w3.org/2000/svg" width="378px" height="163px" viewBox="0 0 377.562 162.75">
				<path id="Subtraction_2" data-name="Subtraction 2" d="M923.683,162.75H546.121V123.861a266.227,266.227,0,0,0,28.484,14.8,264.238,264.238,0,0,0,52.943,17.173,261.138,261.138,0,0,0,53.679,5.587A262.5,262.5,0,0,0,755,150.823a263.77,263.77,0,0,0,67.573-30.646A261.344,261.344,0,0,0,921.18,5.623L923.683,0V162.749Z" transform="translate(-546.121)" fill="#033e64"/>
			</svg>
	    	
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

