<section class="image-copy-link module">
	<div class="grid-container<?php if( get_field('width') == 'wide' ):?> fluid<?php endif;?>">
		<div class="grid-x grid-padding-x layout-<?php the_sub_field('layout');?>">
			
			<div class="left cell small-12 medium-6">

				<?php if ( get_sub_field('media_type') == 'image' ):?>
					<div class="img-wrap">
						<?php 
						$image = get_sub_field('image');
						if( !empty( $image ) ): ?>
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</div>
				<?php endif; ?>

				<?php if ( get_sub_field('media_type') == 'video' ):?>
					<div class="video-wrap">
						<div class="responsive-embed widescreen">
						<?php
						
						// Load value.
						$iframe = get_sub_field('video_link');
						
						// Use preg_match to find iframe src.
						preg_match('/src="(.+?)"/', $iframe, $matches);
						$src = $matches[1];
						
						// Add extra parameters to src and replcae HTML.
						$params = array(
						    'controls'  => 0,
						    'hd'        => 1,
						    'autohide'  => 1
						);
						$new_src = add_query_arg($params, $src);
						$iframe = str_replace($src, $new_src, $iframe);
						
						// Add extra attributes to iframe HTML.
						$attributes = 'frameborder="0"';
						$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);
						
						// Display customized HTML.
						echo $iframe;
						?>
						</div>
					</div>
				<?php endif; ?>
				
			</div>
			
			<div class="right cell small-12 medium-6">
				
				<div class="inner">
				
					<?php if( $pre_heading = get_sub_field('pre-heading') ):?>
						<h5><?php echo $pre_heading;?></h5>
					<?php endif;?>
	
					<?php if( get_sub_field('add_quote_above_copy') == 'true' ):?>
						<img class="quote" src="<?php echo get_template_directory_uri(); ?>/assets/images/quote.svg"/>
					<?php endif;?>

					<?php if( $copy = get_sub_field('copy') ):?>
						<div class="copy-wrap"><?php echo $copy;?></div>
					<?php endif;?>
		
					<?php 
					$link = get_sub_field('link_button');
					if( $link ): 
					    $link_url = $link['url'];
					    $link_title = $link['title'];
					    $link_target = $link['target'] ? $link['target'] : '_self';
					    ?>
					<div>
					    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					</div>
					<?php endif; ?>
				
				</div>

			</div>			
			
		</div>
	</div>
</section>