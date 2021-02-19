<?php if ( have_rows('modules') ) : ?>
<?php while ( have_rows('modules') ) : ?> 
	<?php the_row(); ?>

	<?php if ( get_row_layout() == 'blue_box_copy_and_button_link' ) : 
	
		get_template_part('modules/blue_box_copy_and_button_link');
	
	endif;?>
	
	<?php if ( get_row_layout() == 'image_left_&_copylink-button_right' ) : 
	
		get_template_part('modules/image_left_&_copylink-button_right');
	
	endif;?>

	<?php if ( get_row_layout() == 'two_column_list' ) : 
	
		get_template_part('modules/two_column_list');
	
	endif;?>

	<?php if ( get_row_layout() == 'wysiwyg_editor' ) : 
	
		get_template_part('modules/wysiwyg_editor');
	
	endif;?>
	
	<?php endwhile;?>
<?php endif;?>