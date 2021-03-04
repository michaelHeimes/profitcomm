<section class="people module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="cell">
				<h2 class="h1"><?php the_sub_field('heading');?></h2>
			</div>

			<?php if( have_rows('people') ):?>
			<div class="cell">
				<?php while ( have_rows('people') ) : the_row();?>	
				
				<?php if( have_rows('single_person') ):?>
					<?php while ( have_rows('single_person') ) : the_row();?>	
				
					<div class="single-person grid-x grid-padding-x">
	
						<div class="left cell small-12 medium-3">
						<?php 
						$image = get_sub_field('photo');
						if( !empty( $image ) ): ?>
						<div class="img-wrap">
						    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						</div>
						<?php endif; ?>
						</div>
			
						<div class="right cell small-12 medium-9">
							<h3><?php the_sub_field('name');?></h3>
							<div class="title"><?php the_sub_field('title');?></div>
							<div class="bio-wrap"><?php the_sub_field('bio');?></div>
						</div>
					
					</div>
				
					<?php endwhile;?>
				<?php endif;?>
							
				<?php endwhile;?>
			</div>
			<?php endif;?>

		</div>
	</div>
</section>