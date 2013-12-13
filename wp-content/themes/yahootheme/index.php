<?php get_header();?>

	<style type="text/css">
		#header .background {
			height: 314px;
		}
	</style>

	<script type="text/javascript">
		$($('#header-menu-links').children()[0]).attr('class', 'active');
	</script>

	<div id="content">

		<div class="row">

			<div class="slideshow-wrapper">
				<div class="orbit-container">
					<div class="preloader"></div>
					<ul data-orbit="" data-options="timer_speed:4500; bullets:false; animation: &#39;fade&#39;;resume_on_mouseout: true;slide_number: false" class="" style="height: 375px">
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/img/carr02.jpg">
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/img/carr03.jpg">
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/img/carr04.jpg">
						</li>
					</ul>
					<div class="orbit-timer">
						<span></span>
						<div class="orbit-progress" style="width: 100%; -webkit-transition: width 10s linear;"></div>
					</div>
				</div>
			</div>

		</div>
		
		<!-- MAIN -->
		<div id="main" class="row">

			<div class="large-8 columns">
				<div class="section-title">
					<h5>GRUPO DE INVESTIGACIÓN DE SISTEMAS ESCALABLES Y APLICACIONES</h5>
				</div>
				<div class="just-text">
					<p>
					Realiza  docencia  e  investigación  aplicada  orientada  al  diseño,  construcción,  despliegue   y
					operación  de productos  de  software  que requieran manejar grandes volúmenes de información,
					con  especialización  en la solución de problemas ubicados en la intersección entre recuperación
					de  información  para  la  Web,  bases  de  datos,  y  procesamiento  paralelo  y  distribuido  de  la
					información.  Su  objetivo  principal  es  desarrollar  estrategias  que  le  permitan  a  productos  de
					software  escalar  de  manera  eficiente  en  usuarios  y  gestión  de  la  información,  y  crear  nuevas
					aplicaciones con énfasis en productos basados en la Web.
					</p>
				</div>

				<div class="section-title">
					<h5>NOTICIAS</h5>
				</div>
				<div>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
					
					<?php endif;?>
					
				</div>

			</div>

			<div class="large-4 columns">
				
				<div id="twitter-container">
					<a class="twitter-timeline" href="https://twitter.com/respond_group" data-widget-id="390454495164907520">Tweets por @respond_group</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<!-- <div id="sponsor-container">
					<div style="margin-bottom: 25px"><a href="http://www.orand.cl"><img src="<?php bloginfo('template_directory'); ?>/img/sp_orand.png"></a></div>
					<div><a href="http://labs.yahoo.com"><img src="<?php bloginfo('template_directory'); ?>/img/sp_yahoo.png"></a></div>
					<div><a href="http://www.mon.ki"><img src="<?php bloginfo('template_directory'); ?>/img/sp_monki.png"></a></div>
					<div><a href="http://www.newtenberg.com"><img src="<?php bloginfo('template_directory'); ?>/img/sp_newtenberg.png"></a></div>
				</div> -->

			</div>

		</div>

	</div>


<?php get_footer(); ?>