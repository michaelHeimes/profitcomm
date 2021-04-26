<section class="two-column-list module<?php if(get_sub_field('remove_top_padding')):?> no-top-padding<?php endif;?><?php if(get_sub_field('remove_bottom_padding')):?> no-bottom-padding<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<?php if( $copy = get_sub_field('copy') ):?>
			<div class="copy-wrap cell small-12 medium-12 tablet-10 tablet-offset-1">
				<?php echo $copy;?>
			</div>
			<?php endif;?>
			
		</div>
			
		<?php if( have_rows('list') ):?>
		<div class="grid-x grid-margin-x">
			<?php while ( have_rows('list') ) : the_row();?>	
			

			
			<?php if( have_rows('single_row') ):?>
				<?php while ( have_rows('single_row') ) : the_row();?>	
				
					<?php if( get_sub_field('add_link') ):?>
					
						<?php
							$link = get_field('link');
							$link_url = $link['url'];
						    $link_title = $link['title'];
						    $link_target = $link['target'] ? $link['target'] : '_self';
						?>
					
						<a class="single-row cell small-12 medium-6" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
							<div class="grid-x grid-padding-x align-middle">
								
								<?php 
								$image = get_sub_field('icon');
								if( !empty( $image ) ): ?>
								<div class="icon-wrap cell shrink">
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div>
								<?php endif; ?>
								
								<div class="cell auto">
									<?php the_sub_field('text');?>
								</div>
						
							</div>
						</a>
					
					<?php else:?>
					
						<div class="single-row cell small-12 medium-6">				
							<div class="grid-x grid-padding-x align-middle">
								
								<?php 
								$image = get_sub_field('icon');
								if( !empty( $image ) ): ?>
								<div class="icon-wrap cell shrink">
								    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</div>
								<?php endif; ?>
								
								<div class="cell auto">
									<?php the_sub_field('text');?>
								</div>
						
							</div>
						</div>
					
					<?php endif;?>
				
				<?php endwhile;?>
			<?php endif;?>
			
			<?php endwhile;?>
		</div>
		<?php endif;?>
			
		</div>
	</div>
</section>