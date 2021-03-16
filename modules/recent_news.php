<section class="recent-news module<?php if(get_sub_field('remove_top_padding')):?> no-top-padding<?php endif;?><?php if(get_sub_field('remove_bottom_padding')):?> no-bottom-padding<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<div class="cell text-center">
				<h2>News</h2>
			</div>

			<?php
		    $args = array(  
		        'post_type' => 'news_post',
		        'post_status' => 'publish',
		        'posts_per_page' => 3,
		    );			    
		
		    $loop = new WP_Query( $args ); 
		        
		    while ( $loop->have_posts() ) : $loop->the_post();?>
		    
				<?php get_template_part('parts/loop', 'archive-news');?>
		    
		    <?php endwhile;
		
		    wp_reset_postdata(); 
		    ?>
		    
		    <div class="btn-wrap cell text-center">
		    	<a class="button" href="/news">View More News</a>
		    </div>
			
		</div>
	</div>
</section>