<?php
/*
Template Name: Projects
*/
?>

<?php get_header(); ?>

	<script type="text/javascript">
		$('#header-menu-links li[name="<?php 
				$title = str_replace(" ", "", get_the_title());
				$title = strtolower($title);
				echo $title;
			?>"]').attr('class', 'active');
	</script>

	<div id="content">

		<div class="row">

			<div class="columns small-12">
				<div class="post">
					<div class="row">
						<div class="columns small-12 title"><h2>Projects</h2></div>
						<hr>
					</div>
					<div class="row">
						<div class="columns small-12">
							
							<?php getPostsByCategoryName('projects'); ?>

							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

							<div class="row news-item">
								<!-- <div class="small-4 columns">
									<div>
										<?php the_post_thumbnail('wpf-featured'); ?>
									</div>
								</div> -->
								<div class="small-12 columns body">
									<div class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
									<div class="description"><p><?php the_content();?></p></div>
								</div>
							</div>

							<?php endwhile;?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>