<?php
/**
 * Template part for displaying posts
 *
 * Used for single, index, archive, search.
 */
  
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('cell'); ?> role="article">
		
	<a class="small-caps grid-x grid-padding-x align-middle" href="<?php echo get_permalink();?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

		<div class="left cell auto">
			<h3><?php the_title();?></h3>
		</div>
		
		<div class="right cell shrink">
			<span>Read More</span>
			<svg xmlns="http://www.w3.org/2000/svg" width="17.002" height="11.773" viewBox="0 0 17.002 11.773">
			  <g id="Group_277" data-name="Group 277" transform="translate(-1558.964 -2554.301)">
			    <g id="Group_96" data-name="Group 96" transform="translate(1558.964 2554.832)">
			      <g id="Group_95" data-name="Group 95" transform="translate(0 5.356)">
			        <line id="Line_1088" data-name="Line 1088" x2="15.8" fill="none" stroke="#f6780d" stroke-miterlimit="10" stroke-width="1.5"/>
			      </g>
			      <path id="Path_35" data-name="Path 35" d="M67,.4l5.356,5.356L67,11.112" transform="translate(-56.414 -0.4)" fill="none" stroke="#f6780d" stroke-miterlimit="10" stroke-width="1.5" fill-rule="evenodd"/>
			    </g>
			  </g>
			</svg>
		</div>
		
	</a>

</article> <!-- end article -->

