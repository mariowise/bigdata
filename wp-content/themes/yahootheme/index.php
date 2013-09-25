<?php get_header(); ?>

	<div id="content">

		<div class="row">

			<div class="slideshow-wrapper">
				<div class="orbit-container">
					<div class="preloader"></div>
					<ul data-orbit="" data-options="timer_speed:4500; bullets:false; animation: &#39;fade&#39;;resume_on_mouseout: true;slide_number: false" class="" style="height: 375px">
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/img/carr02.jpg">
							<div class="orbit-caption">...</div>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/img/carr03.jpg">
							<div class="orbit-caption">...</div>
						</li>
						<li>
							<img src="<?php bloginfo('template_directory'); ?>/img/carr04.jpg">
							<div class="orbit-caption">...</div>
						</li>
					</ul>
					<a href="#" class="orbit-prev">Prev <span></span></a>
					<a href="#" class="orbit-next">Next <span></span></a>
					<div class="orbit-timer">
						<span></span>
						<div class="orbit-progress" style="width: 100%; -webkit-transition: width 10s linear;"></div>
					</div>
				</div>
			</div>

		</div>

		<div id="main" class="row">

			<div class="large-8 columns">
				<div class="section-title">
					<h5>NOTICIAS</h5>
				</div>
				<div>

					<?php
						$i = 0;
						for($i = 0; $i < 3; $i++):
					?>

					<div class="row news-item">
						<div class="small-4 columns">
							<div class="picture">
								Sin imagen
							</div>
						</div>
						<div class="small-6 columns body">
							<div class="title">Título</div>
							<div class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
						</div>
						<div class="small-2 columns">
							<div class="date">
								<div>27</div>
								<div>sep-2013</div>
							</div>
						</div>
					</div>

					<?php endfor;?>
					
				</div>

			</div>

			<div class="large-4 columns">
				
				<a class="twitter-timeline" href="https://twitter.com/usach" data-widget-id="380776829214134272">Tweets por @usach</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

			</div>

		</div>

		<div id="publicaciones">

			<div class="row">

				<div class="section-title">
					<h5>PUBLICACIONES</h5>
				</div>

			</div>

			<div class="row">

				<div class="large-6 columns">Título</div>
				<div class="large-4 columns">Autores</div>			
				<div class="large-2 columns">Fecha</div>			

			</div>

		</div>

	</div>

<?php get_footer(); ?>