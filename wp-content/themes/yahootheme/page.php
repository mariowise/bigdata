<?php get_header(); ?>

	<script type="text/javascript">
		$($('#header-menu-links').children()[<?php 
			$page_id = $_REQUEST['page_id'];
			$menu_links = array(0, 18, 41, 20, 22);
			for($i = 0; $i < count($menu_links); $i++)
				if($menu_links[$i] == $page_id)
					echo $i;
		?>]).attr('class', 'active');
	</script>

	<div id="content">

		<?php the_post();?>

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