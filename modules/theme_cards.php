<section class="theme-cards module">
	<div class="grid-container fluid">
		
		<?php if( have_rows('cards') ):?>
		<div class="grid-x grid-padding-x small-up-1 medium-up-2 xlarge-up-4" data-equalizer data-equalize-on="medium">
			<?php while ( have_rows('cards') ) : the_row();?>	

				<?php if( have_rows('single_card') ):?>
					<?php while ( have_rows('single_card') ) : the_row();?>	
					
					<?php $theme = get_SUB_field('page_theme');?>

					<div class="cell" data-equalizer>
						<div class="inner theme-<?php echo $theme['value'];?>">
							
							<div class="top">
					
								<h2><?php echo $theme['label'];?></h2>
							
								<p><?php the_sub_field('copy');?></p>
							
							</div>
							
							<?php 
							$link = get_sub_field('button_link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							<div class="bottom">
							    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
							</div>
							<?php endif; ?>
					
						</div>
					</div>
					
					<?php endwhile;?>
				<?php endif;?>
			
			<?php endwhile;?>
		</div>
		<?php endif;?>

	</div>
</section>