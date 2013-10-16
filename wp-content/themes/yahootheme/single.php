
<?php get_header() ?>

	<?php the_post() ?>

	<div class="row">

		<div class="columns small-12">
			<div></div>
			<div>
				<?php the_title('<h2>','</h2>');?>
				<?php the_time('F m, Y');?>
				<?php the_post_thumbnail('wpf-featured'); ?>
				<?php the_content();?>
			</div>
			<hr>
			<div class="row">
				<div class="columns large-6 small-6">
					<?php previous_post_link('<i class="icon-double-angle-left"></i> %link'); ?> 
				</div>
				<div class="columns large-6 small-6 text-right">
					<?php next_post_link('%link <i class="icon-double-angle-right"></i>'); ?>
				</div>
			</div>
		</div>

	</div>

<?php get_footer() ?>