<section class="copy-columns">
	<div class="grid-container">
		
		<?php if( $heading = get_sub_field('heading') ):?>
		<div class="grid-x grid-padding-x">
			<div class="cell text-center">
				
				<h2><?php echo $heading;?></h2>

			</div>
		</div>
		<?php endif;?>

		<?php if( have_rows('columns') ):?>
			<?php while ( have_rows('columns') ) : the_row();?>
			
			<?php $cols_num = get_row_index();?>
									
			<?php endwhile;?>
		<?php endif;?>
			
		<?php if( have_rows('columns') ):?>
		<div class="columns-wrap grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-<?php echo $cols_num;?> justify-center">	
			<?php while ( have_rows('columns') ) : the_row();?>
								
				<div class="single-col cell">
					<div class="inner">
						<?php the_sub_field('single_column');?>
					</div>
				</div>
			
			<?php endwhile;?>
		</div>
		<?php endif;?>
		
	</div>
</section>