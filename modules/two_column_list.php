<section class="two-column-list module">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			
			<?php if( $copy = get_sub_field('copy') ):?>
			<div class="copy-wrap cell small-12 medium-12 tablet-10 tablet-offset-1">
				<?php echo $copy;?>
			</div>
			<?php endif;?>

			<?php if( $list = get_sub_field('list') ):?>
			<div class="list-wrap cell">
				<?php echo $list;?>
			</div>
			<?php endif;?>		
		
		</div>
	</div>
</section>