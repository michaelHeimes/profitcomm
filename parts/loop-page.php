<?php
/**
 * Template part for displaying page content in page.php
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	
	<?php if ( !get_field('hide_title_banner')) :?>					
	<header class="article-header"<?php if( $bg_img = get_field('banner_background_image') ):?>style="background-image: url(<?php echo $bg_img;?>)"<?php endif;?>>
		<h1 class="page-title text-center">
			<?php if ( $title = get_field('alternative_page_title')):?>
			
				<?php echo $title;?>
			
			<?php else:?>
			
				<?php the_title(); ?>
			
			<?php endif;?>
		</h1>
	</header> <!-- end article header -->
	
		<?php 
		
		$theme = get_field('page_theme');
		
		if( $theme['value'] == 'rfp-alternative' ):?>
		<div class="rfp-nav-wrap">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="cell small-12">
						<div class="inner">
							<div class="grid-x grid-padding-x">

								<div class="left cell small-12 medium-6 tablet-shrink">
									<h3><?php the_field('rfp_nav_dropdown_text', 'option');?></h3>
								</div>
								
								<div class="right cell small-12 medium-6 tablet-auto">
									<button class="button no-style" type="button" data-toggle="rfp-nav">
										<span></span>
										<svg xmlns="http://www.w3.org/2000/svg" width="16.002" height="7.161" viewBox="0 0 16.002 7.161">
											<path id="Path_297" data-name="Path 297" d="M7.865,3.839,16,11H0Z" transform="translate(16.002 11) rotate(180)" fill="#001e31"/>
										</svg>
									</button>
									
									<div class="dropdown-pane" id="rfp-nav" data-dropdown data-auto-focus="true">
										<?php joints_rfp_alt_nav();?>
									</div>
								</div>
								
							</div>
						</div>
					</div>	
				</div>
			</div>	
		</div>
		
		<?php endif;?>
	
	<?php endif;?>
					
    <section class="entry-content" itemprop="text">
	    <?php the_content(); ?>
	    <?php get_template_part( 'parts/loop', 'modules' ); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		 <?php wp_link_pages(); ?>
	</footer> <!-- end article footer -->
						    					
</article> <!-- end article -->