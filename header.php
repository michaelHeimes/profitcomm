<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />	
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>
	
			
	<body <?php if( get_field('banner_background_image') || is_front_page() ):?><?php body_class('header-bg-img'); ?><?php else:?><?php body_class(); ?><?php endif;?>>

		<div class="off-canvas-wrapper">
			
			<!-- Load off-canvas container. Feel free to remove if not using. -->			
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
<!-- 				<header class="header<?php if ( get_field('hide_title_banner')) :?> has-home-hero<?php endif;?>" role="banner" data-sticky data-margin-top="0" data-sticky-on="small"> -->
				<header class="header<?php if ( get_field('hide_title_banner') ) :?> has-home-hero<?php endif;?>" role="banner" <?php $bg_image = get_field('banner_background_image'); if( empty($bg_image) && !is_front_page() ):?>data-sticky data-margin-top="0" data-sticky-on="small"<?php endif;?>>
					<div class="grid-container fluid">
					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
					 
					</div>
				</header> <!-- end .header -->