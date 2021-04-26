<?php if( get_post_type(get_the_ID()) == 'insights_post'):?>

	<?php get_template_part('parts/loop', 'archive-insight');?>

<?php endif;?>

<?php if( get_post_type(get_the_ID()) == 'news_post'):?>

	<?php get_template_part('parts/loop', 'archive-news-card');?>

<?php endif;?>