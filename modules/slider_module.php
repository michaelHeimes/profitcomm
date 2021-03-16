<section class="slider module<?php if(get_sub_field('remove_top_padding')):?> no-top-padding<?php endif;?><?php if(get_sub_field('remove_bottom_padding')):?> no-bottom-padding<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell">
				
				<div class="slider-controls">
					<div class="inner">
						
						<button type="button" class="slider-arrow sm-slide-prev no-style">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left-blue.svg"/>
						</button>
						<button type="button" class="slider-arrow sm-slide-next no-style">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right-blue.svg"/>
						</button>
						
					</div>
				</div>
				
				<?php if( have_rows('slider') ):?>
				<div class="sm-slider">
					<?php while ( have_rows('slider') ) : the_row();?>	
					
					<?php if( have_rows('single_slide') ):?>
						<?php while ( have_rows('single_slide') ) : the_row();?>	
						
						<div class="single-slide cell small-12 medium-4">
							<div class="inner">
								<?php 
								$image = get_sub_field('image');
								if( !empty( $image ) ): ?>
								<div class="img-wrap">
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div>
								<?php endif; ?>
								
								<div class="bottom">
								
									<?php if ( $caption = get_sub_field('caption') ):?>
									<div class="caption-wrap">
										<p><?php echo $caption;?></p>
									</div>
									<?php endif; ?>
									
									<?php 
									$link = get_sub_field('button_link');
									if( $link ): 
									    $link_url = $link['url'];
									    $link_title = $link['title'];
									    $link_target = $link['target'] ? $link['target'] : '_self';
									    ?>
									    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
									<?php endif; ?>		
									
								</div>						
							
							</div>
						</div>
					
						<?php endwhile;?>
					<?php endif;?>
				
					<?php endwhile;?>
				</div>
				

				
				<?php endif;?>
				
				
			</div>
		</div>
	</div>
</section>