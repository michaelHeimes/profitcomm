<section class="wysiwyg-editor module<?php if(get_sub_field('remove_top_padding')):?> no-top-padding<?php endif;?><?php if(get_sub_field('remove_bottom_padding')):?> no-bottom-padding<?php endif;?>">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="cell">
				<?php the_sub_field('editor');?>
			</div>
		</div>
	</div>
</section>