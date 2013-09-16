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

	</div>

<?php get_footer(); ?>