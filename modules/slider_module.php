<section class="slider module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell">
				
				<?php if( have_rows('slider') ):?>
				<div class="sm-slider grid-x grid-padding-x">
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
					
						<?php endwhile;?>
					<?php endif;?>
				
					<?php endwhile;?>
				</div>
				<?php endif;?>
				
				
			</div>
		</div>
	</div>
</section>