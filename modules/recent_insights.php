<?php $theme = get_field('page_theme');?>

<section class="recent-insights module">
	<div class="grid-container">
		
		<div class="top-wrap">
			<div class="inner text-center">
			
			<?php if( $heading = get_field('ri_heading', 'option') ):?>
				<h2><?php echo $heading;?></h2>
			<?php endif;?>

			<?php if( $text = get_field('ri_text', 'option') ):?>
				<div class="text"><?php echo $text;?></div>
			<?php endif;?>
			
			<?php 
			$link = get_field('ri_button_link_to_more', 'option');
			if( $link ): 
			    $link_url = $link['url'];
			    $link_title = $link['title'];
			    $link_target = $link['target'] ? $link['target'] : '_self';
			    ?>
			    <a class="button all-insights" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
			<?php endif; ?>			


			</div>
		</div>
		
		<div class="post-grid grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3" data-equalizer data-equalize-on="medium" data-equalize-on-stack="true">

			<?php
				
			if (!empty($theme)) {
				
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
		    
		    } else {
			    $args = array(  
			        'post_type' => 'insights_post',
			        'post_status' => 'publish',
			        'posts_per_page' => 6,
			    );			    
		    }
		
		    $loop = new WP_Query( $args ); 
		        
		    while ( $loop->have_posts() ) : $loop->the_post();?>
		    
				<?php get_template_part('parts/loop', 'archive-insight');?>
		    
		    <?php endwhile;
		
		    wp_reset_postdata(); 
		    ?>
			
		</div>
	</div>
</section>

