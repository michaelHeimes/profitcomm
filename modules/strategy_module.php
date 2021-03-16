<section class="strategy-module<?php if(get_sub_field('remove_top_padding')):?> no-top-padding<?php endif;?><?php if(get_sub_field('remove_bottom_padding')):?> no-bottom-padding<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell text-center">

				<div class="logo-wrap">
					<?php 
					$image = get_sub_field('logo');
					if( !empty( $image ) ): ?>
					    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
					<?php endif; ?>
				</div>
				
				<h2 class="h1"><?php the_sub_field('heading');?></h2>
				
				<div class="copy-wrap text-center"><?php the_sub_field('copy');?></div>
				
				<h3 class="h2"><?php the_sub_field('process_heading');?></h3>

			</div>
		</div>
		

		<?php if( have_rows('process_steps') ):?>
			<?php while ( have_rows('process_steps') ) : the_row();?>
			
			<?php $steps_num = get_row_index();?>
									
			<?php endwhile;?>
		<?php endif;?>
			
		<?php if( have_rows('process_steps') ):?>
		<div class="steps-wrap grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-<?php echo $steps_num;?> justify-center">	
			<?php while ( have_rows('process_steps') ) : the_row();?>
			
			<?php $steps_num = get_row_index();?>
					
				<?php if( have_rows('single_step') ):?>
					<?php while ( have_rows('single_step') ) : the_row();?>	
					
					<div class="single-step cell text-center">
						<div class="inner">
							
							<?php 
							$image = get_sub_field('icon');
							if( !empty( $image ) ): ?>
							<div class="icon-wrap">
							    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							</div>
							<?php endif; ?>
							
							<h4><?php the_sub_field('name');?></h4>
							
							<p><?php the_sub_field('details');?></p>
						
						</div>
					</div>
				
					<?php endwhile;?>
				<?php endif;?>
			
			<?php endwhile;?>
		</div>
		<?php endif;?>
		
	</div>
</section>