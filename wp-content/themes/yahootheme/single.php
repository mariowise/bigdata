
<?php get_header() ?>

	<?php the_post() ?>

	<div id="main" class="row">

		<div class="columns small-12">
			<div class="post">
				<div class="row">
					<div class="columns small-1">
						<div class="date" style="float: left">
							<div><?php the_time('j');?></div>
							<div><?php the_time('m');?>-<?php the_time('Y');?></div>
						</div>
					</div>
					<div class="columns small-11 title"><?php the_title('<h2>','</h2>');?></div>
				</div>
				<div id="post-content" class="row">
					<div class="columns small-4">
						<?php the_post_thumbnail('wpf-featured'); ?>
					</div>
					<div class="columns small-8"><?php the_content();?></div>
				</div>
			</div>
			<hr>
			<div class="row post-link-move">
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