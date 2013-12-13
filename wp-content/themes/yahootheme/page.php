<?php get_header(); ?>

	<div id="content">

		<?php the_post();?>

		<script type="text/javascript">
			$('#header-menu-links li[name="<?php 
					$title = str_replace(" ", "", get_the_title());
					$title = strtolower($title);
					echo $title;
				?>"]').attr('class', 'active');
		</script>

		<div class="row">

			<div class="columns small-12">
				<div class="post">
					<div class="row">
						<div class="columns small-12 title"><?php the_title('<h2>','</h2>');?></div>
						<hr>
					</div>
					<div id="post-content" class="row">
						<div class="columns small-12"><?php the_content();?></div>
					</div>
				</div>
			</div>

		</div>


	</div>

<?php get_footer(); ?>