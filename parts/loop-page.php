<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	
	<?php if ( !get_field('hide_title_banner')) :?>					
	<header class="article-header">
		<h1 class="page-title text-center">
			<?php if ( $title = get_field('alternative_page_title')):?>
			
				<?php echo $title;?>
			
			<?php else:?>
			
				<?php the_title(); ?>
			
			<?php endif;?>
		</h1>
	</header> <!-- end article header -->
	<?php endif;?>
					
    <section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	    <?php get_template_part( 'parts/loop', 'modules' ); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
						    					
</article> <!-- end article -->