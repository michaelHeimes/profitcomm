<?php
/**
 * The template part for displaying an author byline
 */
 
$term = get_the_terms( $post->ID , 'site_theme' )[0]->name;

?>

<div class="byline grid-x grid-margin-x align-middle">
	
	<div class="button no-hover cell small-12 medium-shrink"><?php echo $term; ?></div>
	
	<div class="post-date cell small-12 medium-shrink"><?php echo get_the_date( 'F n, Y', $post->ID );?></div>
	
</div>	
