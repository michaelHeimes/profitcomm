<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content insight-content">

	<div class="inner-content">

		<main class="main" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		    
		    	<?php 
			    	if ( get_post_type(get_the_ID()) == 'insights_post'):
			    	
			    		get_template_part( 'parts/loop', 'single-insights_post' );
			    		
			    	elseif ( get_post_type(get_the_ID()) == 'news_post'):
			    	
			    		get_template_part( 'parts/loop', 'single-news_post' );
		
					else: 
						
						get_template_part( 'parts/loop', 'single' );
						
					endif; ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>