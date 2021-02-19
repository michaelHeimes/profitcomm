<?php
/**
 * The template part for displaying an author byline
 */

$theme = get_field('page_theme');

?>

<div class="byline grid-x grid-margin-x align-middle">
	
	<div class="button cell small-12 medium-shrink"><?php echo esc_html($theme['label']);?></div>

	<div class="post-date cell small-12 medium-shrink"><?php echo get_the_date( 'F n, Y', $post->ID );?></div>
	
</div>	
