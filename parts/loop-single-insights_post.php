<?php
/**
 * Template part for displaying a single post
 */ 

	$first_term = get_the_terms( $post->ID, 'site_theme' )[0];
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12"
							
				<header class="article-header">	
					<?php get_template_part( 'parts/content', 'insight-byline' ); ?>
					<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
			    </header> <!-- end article header -->
								
			    <section class="entry-content" itemprop="text">
<!-- 					<?php the_field('content'); ?> -->
					<?php the_content();?>
				</section> <!-- end article section -->
				
			</div>
		</div>
	</div>
				
				
	<div class="grid-container fluid insights-cards-wrap">
		<div class="grid-x grid-padding-x">
			<div class="cell small-12">
				<div class="width-1200">		
				
					<footer class="article-footer text-center">
						
						<div class="small-caps share-label">Share This Post</div>
					
						<div class="a2a_kit a2a_default_style">
						    <a class="a2a_button_facebook" href="#">
						        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-facebook-white.svg"/>
						    </a>
						    <a class="a2a_button_twitter" href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-twitter-white.svg"/>
						    </a>	    
							<a class="a2a_button_linkedin" data-url="<?php echo get_permalink();?>" href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-linkedin-white.svg"/>
							</a>
					
						</div>
						
						<script async src="https://static.addtoany.com/menu/page.js"></script>
											
						<div class="post-grid grid-x grid-padding-x small-up-1 medium-up-2 tablet-up-3" data-equalizer data-equalize-on="medium" data-equalize-on-stack="true">
				
				
							<?php
						    $args = array(  
						        'post_type' => 'insights_post',
						        'post_status' => 'publish',
						        'posts_per_page' => 6,
								'tax_query' => array(
							        array(
							            'taxonomy' => 'site_theme',
							            'field' => 'slug',
							            'terms' => $first_term->name,
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
				
					</footer> <!-- end article footer -->
			
				</div>
			</div>
		</div>
	</div>	
			
													
</article> <!-- end article -->