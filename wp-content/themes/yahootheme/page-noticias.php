<?php
/*
Template Name: Noticias
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
						<div class="columns small-12 title"><h2>Noticias</h2></div>
						<hr>
					</div>
					<div class="row">
						<div class="columns small-12">

							<?php getPostsByCategoryName('noticias'); ?>

							<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

							<div class="row news-item">
								<div class="small-3 columns">
									<div class="picture">
										<?php the_post_thumbnail('wpf-featured'); ?>
									</div>
								</div>
								<div class="small-7 columns body">
									<div class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></div>
									<div class="description"><p><?php the_excerpt();?></p></div>
								</div>
								<div class="small-2 columns">
									<div class="date">
										<div><?php the_time('j');?></div>
										<div><?php the_time('m');?>-<?php the_time('Y');?></div>
									</div>
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