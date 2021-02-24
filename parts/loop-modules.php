<?php if ( have_rows('modules') ) : ?>
<?php while ( have_rows('modules') ) : ?> 
	<?php the_row(); ?>

	<?php if ( get_row_layout() == 'accordions' ) : 
	
		get_template_part('modules/accordions');
	
	endif;?>

	<?php if ( get_row_layout() == 'blue_box_copy_and_button_link' ) : 
	
		get_template_part('modules/blue_box_copy_and_button_link');
	
	endif;?>

	<?php if ( get_row_layout() == 'blue_box_copy_and_button_link' ) : 
	
		get_template_part('modules/blue_box_copy_and_button_link');
	
	endif;?>

	<?php if ( get_row_layout() == 'copy_columns_and_centered_heading' ) : 
	
		get_template_part('modules/copy_columns_and_centered_heading');
	
	endif;?>
	
	<?php if ( get_row_layout() == 'image_or_video_&_copylink-button' ) : 
	
		get_template_part('modules/image_or_video_&_copylink-button');
	
	endif;?>

	<?php if ( get_row_layout() == 'people' ) : 
	
		get_template_part('modules/people');
	
	endif;?>

	<?php if ( get_row_layout() == 'recent_news' ) : 
	
		get_template_part('modules/recent_news');
	
	endif;?>
	
	<?php if ( get_row_layout() == 'recent_insights' ) : 
	
		get_template_part('modules/recent_insights');
	
	endif;?>

	<?php if ( get_row_layout() == 'strategy_module' ) : 
	
		get_template_part('modules/strategy_module');
	
	endif;?>

	<?php if ( get_row_layout() == 'theme_cards' ) : 
	
		get_template_part('modules/theme_cards');
	
	endif;?>

	<?php if ( get_row_layout() == 'two_column_list' ) : 
	
		get_template_part('modules/two_column_list');
	
	endif;?>

	<?php if ( get_row_layout() == 'wysiwyg_editor' ) : 
	
		get_template_part('modules/wysiwyg_editor');
	
	endif;?>
	
	<?php endwhile;?>
<?php endif;?>