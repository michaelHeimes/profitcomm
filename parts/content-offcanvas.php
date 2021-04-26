<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-top" id="off-canvas" data-off-canvas data-transition="overlap" style="display: none;">
	<div class="grid-cotnainer">
		<div class="grid-x grid-padding-x">
			<div class="cell">
							
				<?php joints_off_canvas_nav(); ?>
			
				<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>
			
					<?php dynamic_sidebar( 'offcanvas' ); ?>
			
				<?php endif; ?>
				
				<div class="social-wrap">
					
					<?php if ( $facebook_url = get_field('facebook_url', 'option')):?>
					<a href="<?php echo $facebook_url;?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook-green.svg"/>
					</a>
					<?php endif;?>
			
					<?php if ( $instagram_url = get_field('instagram_url', 'option')):?>
					<a href="<?php echo $instagram_url;?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram-green.svg"/>
					</a>
					<?php endif;?>
			
					<?php if ( $twitter_url = get_field('twitter_url', 'option')):?>
					<a href="<?php echo $twitter_url;?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter-green.svg"/>
					</a>
					<?php endif;?>
					
					<?php if ( $linkedin_url = get_field('linkedin_url', 'option')):?>
					<a href="<?php echo $linkedin_url;?>" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-linkedin-green.svg"/>
					</a>
					<?php endif;?>
																		
				</div>

			</div>
		</div>
	</div>
</div>
