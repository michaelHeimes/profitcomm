<header class="home-hero">
		
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="left cell small-12 medium-6 tablet-8">
				<?php if ($heading = get_sub_field('heading')):?>
					<h1><?php echo $heading;?></h1>
				<?php endif;?>
				
				<?php if ($copy = get_sub_field('copy')):?>
					<p><?php echo $copy;?></p>
				<?php endif;?>
				
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
			
			<div class="right cell small-12 medium-6 tablet-4 show-for-medium">
				<?php if( have_rows('cta') ):?>
					<?php while ( have_rows('cta') ) : the_row();?>	
						<div class="cta-wrap text-right">
							<h2><?php the_sub_field('heading');?></h2>

							<?php 
							$link = get_sub_field('link');
							if( $link ): 
							    $link_url = $link['url'];
							    $link_title = $link['title'];
							    $link_target = $link['target'] ? $link['target'] : '_self';
							    ?>
							    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow-white.svg"/></a>
							<?php endif; ?>	
							
						</div>
					<?php endwhile;?>
				<?php endif;?>
			</div>		
		</div>
	</div>
	
	<?php if( have_rows('cta') ):?>
		<?php while ( have_rows('cta') ) : the_row();?>	
		<div class="cell hide-for-medium">
			<div class="cta-wrap text-center">
				<div class="inner text-right">
					
					<h2><?php the_sub_field('heading');?></h2>
	
					<?php 
					$link = get_sub_field('link');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><span><?php echo esc_html( $link_title ); ?></span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/right-arrow-white.svg"/></a>
					<?php endif; ?>	

				</div>
			</div>
		</div>
		<?php endwhile;?>
	<?php endif;?>

</header>