<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */

if ( !is_single() ) {
	$theme = get_field('page_theme');
}
 
?>

<div class="top-bar" id="top-bar-menu">
	
	<div class="top-bar-top"><?php joints_pre_nav();?></div>
	
	<div class="top-bar-left float-left">
		<ul class="menu">
			
			<li><a href="<?php echo home_url(); ?>">
			
			<?php if( !empty($theme) && $theme['value'] == 'rfp-alternative' ):?>
				
				<?php 
				$image = get_field('top_bar_logo_white', 'option');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
								
			<?php else:?>
							
				<?php 
				$image = get_field('top_bar_logo', 'option');
				if( !empty( $image ) ): ?>
				    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				<?php endif; ?>
						
			<?php endif;?>
			
			</a></li>
			
			<li class="show-for-sr"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>
	</div>
</div>