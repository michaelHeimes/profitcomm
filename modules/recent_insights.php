<?php $theme = get_field('page_theme');?>

<section class="recent-insights module">
	<div class="grid-container">
		<div class="post-grid grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3" data-equalizer data-equalize-on="medium" data-equalize-on-stack="true">

			<?php
		    $args = array(  
		        'post_type' => 'insights_post',
		        'post_status' => 'publish',
		        'posts_per_page' => 6,
			    'meta_query' => array(
			        array(
			            'key'   => 'page_theme',
			            'value' => $theme['value'],
			        )
			    )
		    );
		
		    $loop = new WP_Query( $args ); 
		        
		    while ( $loop->have_posts() ) : $loop->the_post();?>
		    
				<?php get_template_part('parts/loop', 'archive-insight');?>
		    
		    <?php endwhile;
		
		    wp_reset_postdata(); 
		    ?>
			
		</div>
	</div>
</section>

