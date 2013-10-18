<?php
/*
Template Name: Noticias
*/
?>

<?php get_header(); ?>

	<script type="text/javascript">
		$($('#header-menu-links').children()[2]).attr('class', 'active');
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
						<div class="columns small-3">



						</div>
						<div class="columns small-9">

							<?php // Display blog posts on any page @ http://m0n.co/l
								$temp = $wp_query; $wp_query= null;
								$wp_query = new WP_Query(); $wp_query->query('showposts=100' . '&paged='.$paged);
								while ($wp_query->have_posts()) : $wp_query->the_post(); 
							?>

							<div class="row news-item">
								<div class="small-4 columns">
									<div class="picture">
										<?php the_post_thumbnail('wpf-featured'); ?>
									</div>
								</div>
								<div class="small-6 columns body">
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