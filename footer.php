<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					<div class="grid-container">
						
						<div class="inner-footer grid-x grid-padding-x">
							
							<div class="left cell small-12 medium-6">
								
								<div class="inner">
								
									<a href="<?php echo home_url(); ?>">
									<?php 
									$image = get_field('footer_logo', 'option');
									if( !empty( $image ) ): ?>
									    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									    
									<?php else:?>
									
									<?php bloginfo('name'); ?>
									    
									<?php endif; ?>
									</a>
									
									<?php if( $footer_copy = get_field('footer_copy', 'option')):?> 
									<p><?php echo $footer_copy;?></p>
									<?php endif;?>
									
									<div class="social-wrap">
										
										<?php if ( $facebook_url = get_field('facebook_url', 'option')):?>
										<a href="<?php echo $facebook_url;?>" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook-gray.svg"/>
										</a>
										<?php endif;?>
		
										<?php if ( $instagram_url = get_field('instagram_url', 'option')):?>
										<a href="<?php echo $instagram_url;?>" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-instagram-gray.svg"/>
										</a>
										<?php endif;?>
		
										<?php if ( $twitter_url = get_field('twitter_url', 'option')):?>
										<a href="<?php echo $twitter_url;?>" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter-gray.svg"/>
										</a>
										<?php endif;?>
										
										<?php if ( $linkedin_url = get_field('linkedin_url', 'option')):?>
										<a href="<?php echo $linkedin_url;?>" target="_blank">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-linkedin-gray.svg"/>
										</a>
										<?php endif;?>
																							
									</div>
									
									</div>
									
								</div>
								
								<div class="right cell small-12 medium-6">
									
									<nav role="navigation" class="grid-x grid-padding-x">
										<?php joints_footer_links_left(); ?>
			    						<?php joints_footer_links_right(); ?>
			    					</nav>
			    				
								</div>
							
							<div class="small-12 medium-12 large-12 cell">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="https://proprdesign.com/" target="_blank">Made by Propr Design</a></p>
							</div>
						
						</div> <!-- end #inner-footer -->
				
					</div>
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->