<section class="blue-box-copy-and-button-link module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12 medium-10 medium-offset-1 large-8 large-offset-2">
				
				<?php if( $smallHeading = get_sub_field('small_heading') ):?>
					<h2 class="small-caps text-center"><?php echo $smallHeading;?></h2>
				<?php endif;?>

				<?php if( $centeredCopy = get_sub_field('centered_copy') ):?>
					<p class="copy text-center"><?php echo $centeredCopy;?></p>
				<?php endif;?>
				
				<?php 
				$link = get_sub_field('button_link');
				if( $link ): 
				    $link_url = $link['url'];
				    $link_title = $link['title'];
				    $link_target = $link['target'] ? $link['target'] : '_self';
				    ?>
				<div class="text-center">
				    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
				</div>
				<?php endif; ?>
				
			</div>
		</div>
	</div>
</section>