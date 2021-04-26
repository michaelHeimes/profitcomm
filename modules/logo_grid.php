<section class="logo-grid module<?php if(get_sub_field('remove_top_padding')):?> no-top-padding<?php endif;?><?php if(get_sub_field('remove_bottom_padding')):?> no-bottom-padding<?php endif;?>">
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x">
			<?php if( $heading = get_sub_field('heading') ):?>
			<div class="cell text-center">
				<h2><?php echo $heading;?></h2>
			</div>
			<?php endif;?>

			<?php if( $copy = get_sub_field('copy') ):?>
			<div class="copy-wrap cell text-center">
				<p><span class="large-copy"><?php echo $copy;?></span></p>
			</div>
			<?php endif;?>
		</div>
		
		<div class="grid-x grid-padding-x small-up-2 medium-up-3 tablet-up-4">
					
		<?php 
		$images = get_sub_field('logo_grid');
		if( $images ): ?>
		        <?php foreach( $images as $image ): ?>
		            <div class="single-logo cell">
		                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		            </div>
		        <?php endforeach; ?>
		<?php endif; ?>
			
		</div>
	</div>
</section>