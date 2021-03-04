<?php if( get_post_type(get_the_ID()) == 'insights_post'):?>

	<?php get_template_part('parts/loop', 'archive-insight');?>

<?php endif;?>