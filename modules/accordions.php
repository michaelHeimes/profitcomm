<section class="accordions module<?php if(get_sub_field('remove_top_padding')):?> no-top-padding<?php endif;?><?php if(get_sub_field('remove_bottom_padding')):?> no-bottom-padding<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell">
				
				<?php if ( $heading = get_sub_field('heading') ):?>
					<h2 class="h1"><?php echo $heading;?></h2>
				<?php endif;?> 

				<?php if ( $copy = get_sub_field('copy') ):?>
					<p><?php echo $copy;?></p>
				<?php endif;?> 
				
				<?php if( have_rows('accordions') ):?>
				<div class="accordion" data-accordion  data-allow-all-closed="true">
					<?php while ( have_rows('accordions') ) : the_row();?>	
					
					<?php if( have_rows('single_accordion') ):?>
						<?php while ( have_rows('single_accordion') ) : the_row();?>	
						
						<div class="single-accordion" data-accordion-item>
							
							<a href="#" class="accordion-title"><?php the_sub_field('heading');?></a>
							
							<div class="accordion-content<?php if ( $cols_num = get_sub_field('number_of_cols')):?> cols-<?php echo $cols_num;?><?php endif;?>" data-tab-content>
								<?php the_sub_field('content');?>
							</div>
							
						</div>
					
						<?php endwhile;?>
					<?php endif;?>
				
					<?php endwhile;?>
				</div>
				<?php endif;?>
				
				<?php the_sub_field('editor');?>
			</div>
		</div>
	</div>
</section>