<?php
/*
Template Name: People
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
						<div class="columns small-12 title"><h2>Research team</h2></div>
						<hr>
					</div>
				</div>
			</div>
		</div>

		<div class="row people">
			
			<div class="columns small-3">
				<div><img class="photo" src="<?php bloginfo('template_directory'); ?>/img/prof/avatarfinal-03.png"/></div>
			</div>
			<div class="columns small-9">
				<h4>Mauricio Marin</h4>
				<p class="resume">Dr. Mauricio Marin is a full professor at the Informatics Engineering Department, 
					University of Santiago, Chile, and a senior researcher at Yahoo! Labs Latinamerica 
					hosted by the University of Chile. He holds a PhD in Computer Science from University 
					of Oxford, UK, a MSc from University of Chile, and a BS in Electrical Engineering 
					from University of Magallanes, Chile. His research work is on parallel computing and 
					distributed systems with applications in Web search engines. He has obtained research 
					grants on parallel query processing upon distributed metric-space databases and scalable 
					parallel algorithms and data structures for text search and indexing.</p>
				<div class="row">
					<div class="columns small-4">
						<div><h6>Email</h6></div>
						<div class="contact">mauricio.marin@usach.cl</div>
					</div>
					<div class="columns small-4">
						<div><h6>Address</h6></div>
						<div class="contact">Ecuador 3659, Estación Central, Santiago, Chile</div>
					</div>
					<div class="columns small-4">
						<div><h6>Phone</h6></div>
						<div class="contact">+56 2 271 80941</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row people">
			
			<div class="columns small-3">
				<div><img class="photo" src="<?php bloginfo('template_directory'); ?>/img/prof/avatarfinal-04.png"/></div>
			</div>
			<div class="columns small-9">
				<h4>Erika Rosas</h4>
				<p class="resume">Dra. Erika Rosas, Assistant Professor, Department of Informatics Engineering 
					at the University of Santiago, Chile. Ms. Rosas obtained her Ph.D degree in computer science 
					in 2011 from  Pierre and Marie Curie University in Paris (Paris VI), France. She is a former 
					postdoctoral researcher of Yahoo! Labs, Santiago, Chile. Her research areas cover stream data 
					processing, mobile networks  and large scale networks, such as P2P and social network, in areas 
					like trust and reputation systems.</p>
				<div class="row">
					<div class="columns small-4">
						<div><h6>Email</h6></div>
						<div class="contact">erika.rosas@usach.cl</div>
					</div>
					<div class="columns small-4">
						<div><h6>Address</h6></div>
						<div class="contact">Ecuador 3659, Estación Central, Santiago, Chile</div>
					</div>
					<div class="columns small-4">
						<div><h6>Phone</h6></div>
						<div class="contact">+56 2 271 80925</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row people">
			
			<div class="columns small-3">
				<div><img class="photo" src="<?php bloginfo('template_directory'); ?>/img/prof/avatarfinal-01.png"/></div>
			</div>
			<div class="columns small-9">
				<h4>Carolina Bonacic</h4>
				<p class="resume">Dra. Carolina Bonacic, Assistant Professor, Department of Informatics 
					Engineering at the University of Santiago, Chile; former posdoctoral researcher at Yahoo! 
					Labs Latinamerica. Research areas: Information retrieval and Scalable Computing for Web 
					Applications; Education: PhD in Computer Science from Complutense University of Madrid, 
					Spain; Master of Computer Science from University of Chile, and Computing Engineer from 
					University of Magallanes, Chile.</p>
				<div class="row">
					<div class="columns small-4">
						<div><h6>Email</h6></div>
						<div class="contact">carolina.bonacic@usach.cl</div>
					</div>
					<div class="columns small-4">
						<div><h6>Address</h6></div>
						<div class="contact">Ecuador 3659, Estación Central, Santiago, Chile</div>
					</div>
					<div class="columns small-4">
						<div><h6>Phone</h6></div>
						<div class="contact">+56 2 271 80919</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row people">
			
			<div class="columns small-3">
				<div><img class="photo" src="<?php bloginfo('template_directory'); ?>/img/prof/avatarfinal-02.png"/></div>
			</div>
			<div class="columns small-9">
				<h4>Nicolas Hidalgo</h4>
				<p class="resume">Dr. Nicolas Hidalgo, Assistant Professor, Department of Informatics 
					Engineering at the University of Santiago, Chile. Mr. Hidalgo obtained his Ph.D degree 
					in computer science in 2011 from the Pierre and Marie Curie University (Paris VI), Paris, 
					France. He is a former postdoctoral researcher of Yahoo! Labs Santiago.  His research 
					areas cover distributed systems, scalable systems, peer-to-peer networks, stream  data 
					processing and mobile networks such as MANETs and DTNs.</p>
				<div class="row">
					<div class="columns small-4">
						<div><h6>Email</h6></div>
						<div class="contact">nicolas.hidalgo@usach.cl</div>
					</div>
					<div class="columns small-4">
						<div><h6>Address</h6></div>
						<div class="contact">Ecuador 3659, Estación Central, Santiago, Chile</div>
					</div>
					<div class="columns small-4">
						<div><h6>Phone</h6></div>
						<div class="contact">+56 2 271 80929</div>
					</div>
				</div>
			</div>

		</div>

		<div class="row">

			<div class="columns small-12">
				<div class="post" style="margin-top: 0px;">
					<div class="row">
						<div class="columns small-12 title"><h2>Students</h2></div>
						<hr>
					</div>
				</div>
			</div>
		</div>

		<div class="row people students">
			
			<?php for($i = 0; $i < 5; $i++): ?>

			<?php getPostsByCategoryName('students'); ?>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div class="columns small-2 student">
				<div class="photo"><?php the_post_thumbnail('wpf-featured'); ?></div>
				<h5><?php the_title();?></h5>
				<p class="resume"><?php the_excerpt();?></p>
				<!-- <div><h6>Email</h6></div>
				<div class="contact">nicolas.hidalgo@usach.cl</div>
				<div><h6>Address</h6></div>
				<div class="contact">Ecuador 3659, Estación Central, Santiago, Chile</div>
				<div><h6>Phone</h6></div>
				<div class="contact">+56 2 271 80929</div> -->
			</div>

			<?php endwhile; endif;?>	

			<?php endfor; ?>

		</div>

	</div>



<?php get_footer(); ?>