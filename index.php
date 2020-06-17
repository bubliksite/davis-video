
<?php get_header(); ?>

<header>
	<div class="logo text-center">
		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Логотип">
	</div>
</header>

<div class="content">
	<div class="video-background">
		<video loop muted autoplay poster="<?php echo get_template_directory_uri(); ?>/video/sitevideo.png">
			<source src="<?php echo get_template_directory_uri(); ?>/video/sitevideo.mp4" type="video/mp4">
			<source src="<?php echo get_template_directory_uri(); ?>/video/sitevideo.webm" type="video/webm">
			<source src="<?php echo get_template_directory_uri(); ?>/video/sitevideo.m4v" type="video/m4v" codecs="avc1.42E01E, mp4a.40.2">
		</video>
		<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo get_template_directory_uri(); ?>/img/bg.png" class="d-block w-100" alt="...">
				</div>
			</div>
		</div>
		<div class="ugol bg-gray"></div>
	</div>
			<div class="services bg-gray pt-5">
				<div id="carousel-services" class="carousel slide mobs-on" data-ride="carousel">
					<div class="carousel-inner">
						<div class="col-12 carousel-item active">
							<a class="no-link" href="https://davisvideo.ru/animaciya-logotipa/">
								<img class="kart" src="<?php echo get_template_directory_uri(); ?>/img/anima.jpg" alt="Анимация логотипа">
								<div class="layout">
									<div class="in-layout">
										<div class="in-in-layout">
											<div class="icon mx-auto">
												<img class="animate-icon" src="<?php echo get_template_directory_uri(); ?>/img/play1.png" alt="">
												<img class="stay-icon" src="<?php echo get_template_directory_uri(); ?>/img/play2.png" alt="">
											</div>
											<h3 class="text-center text-lowercase mt-3 text-white mx-3">анимируем логотип</h3>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12 carousel-item">
							<a class="no-link" href="https://davisvideo.ru/montazh-video/">
								<img class="kart" src="<?php echo get_template_directory_uri(); ?>/img/cutter.jpg" alt="Анимация логотипа">
								<div class="layout">
									<div class="in-layout">
										<div class="in-in-layout">
											<div class="icon mx-auto">
												<img class="animate-icon-2" src="<?php echo get_template_directory_uri(); ?>/img/sciss.png" alt="">
												<img class="stay-icon" src="<?php echo get_template_directory_uri(); ?>/img/film-up.png" alt="">
												<img class="animate-icon-3" src="<?php echo get_template_directory_uri(); ?>/img/film-down.png" alt="">
											</div>
											<h3 class="text-center text-lowercase mt-3 text-white mx-3">смонтируем видео</h3>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12 carousel-item">
							<a class="no-link" href="https://davisvideo.ru/promo-rolik-dlya-instagram/">
								<img class="kart" src="<?php echo get_template_directory_uri(); ?>/img/insta.jpg" alt="Анимация логотипа">
								<div class="layout">
									<div class="in-layout">
										<div class="in-in-layout">
											<div class="icon mx-auto">
												<img class="animate-icon" src="<?php echo get_template_directory_uri(); ?>/img/inst2.png" alt="">
												<img class="stay-icon" src="<?php echo get_template_directory_uri(); ?>/img/inst1.png" alt="">
											</div>
											<h3 class="text-center text-lowercase mt-3 text-white mx-3">промо-ролик instagram</h3>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carousel-services" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carousel-services" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<div class="container mobs-off">
					<div class="row text-center">
						<div class="col-md-4 my-5">
							<a class="no-link" href="https://davisvideo.ru/animaciya-logotipa/">
								<img class="kart" src="<?php echo get_template_directory_uri(); ?>/img/anima.jpg" alt="Анимация логотипа">
								<div class="layout">
									<div class="in-layout">
										<div class="in-in-layout">
											<div class="icon mx-auto">
												<img class="animate-icon" src="<?php echo get_template_directory_uri(); ?>/img/play1.png" alt="">
												<img class="stay-icon" src="<?php echo get_template_directory_uri(); ?>/img/play2.png" alt="">
											</div>
											<h3 class="text-lowercase mt-3 text-white mx-3">анимируем логотип</h3>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 my-5">
							<a class="no-link" href="https://davisvideo.ru/montazh-video/">
								<img class="kart" src="<?php echo get_template_directory_uri(); ?>/img/cutter.jpg" alt="Анимация логотипа">
								<div class="layout">
									<div class="in-layout">
										<div class="in-in-layout">
											<div class="icon mx-auto">
												<img class="animate-icon-2" src="<?php echo get_template_directory_uri(); ?>/img/sciss.png" alt="">
												<img class="stay-icon" src="<?php echo get_template_directory_uri(); ?>/img/film-up.png" alt="">
												<img class="animate-icon-3" src="<?php echo get_template_directory_uri(); ?>/img/film-down.png" alt="">
											</div>
											<h3 class="text-lowercase mt-3 text-white mx-3">смонтируем видео</h3>
										</div>
									</div>
								</div>
							</a>
						</div>
						<div class="col-md-4 my-5">
							<a class="no-link" href="https://davisvideo.ru/promo-rolik-dlya-instagram/">
								<img class="kart" src="<?php echo get_template_directory_uri(); ?>/img/insta.jpg" alt="Анимация логотипа">
								<div class="layout">
									<div class="in-layout">
										<div class="in-in-layout">
											<div class="icon mx-auto">
												<img class="animate-icon" src="<?php echo get_template_directory_uri(); ?>/img/inst2.png" alt="">
												<img class="stay-icon" src="<?php echo get_template_directory_uri(); ?>/img/inst1.png" alt="">
											</div>
											<h3 class="text-lowercase mt-3 text-white mx-3">промо-ролик instagram</h3>
										</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
	</div>
	<div class="base py-5 bg-gray">
		<div class="container">

			<?php $postCounter = 1; ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php if (($postCounter%2) != 0) : ?>

			<div class="row" style="position: relative;">
				<div class="red-border"></div>
				<div class="col-md-6">
					<h3 class="mobs-on text-uppercase"><?php echo the_title(); ?></h3>
					<div style="padding:56.25% 0 0 0;position:relative;">
						<iframe src="https://player.vimeo.com/video/<?php echo CFS()->get('videoNumberVimeo'); ?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6">
					<h3 class="mobs-off text-uppercase"><?php echo the_title(); ?></h3>
					<div class="red-border-mob">
						<p class="mt-5d font-light"><?php echo CFS()->get('videoDescription'); ?></p>
						<p class="font-light"><span class="font-weight-bold">Срок изготовления: </span> <?php echo CFS()->get('videoTerm'); ?></p>
						<p class="font-light"><span class="font-weight-bold">Стоимость: </span> <?php echo CFS()->get('videoPrice'); ?></p>
					</div>
				</div>
			</div>
			<p><br></p>
			<p><br></p>

			<?php else : ?>

			<div class="row" style="position: relative;">
				<div class="blue-border"></div>
				<div class="col-md-6 mobs-on">
					<h3 class="mobs-on text-uppercase"><?php echo the_title(); ?></h3>
					<div style="padding:56.25% 0 0 0;position:relative;">
						<iframe src="https://player.vimeo.com/video/<?php echo CFS()->get('videoNumberVimeo'); ?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6">
					<h3 class="mobs-off text-uppercase"><?php echo the_title(); ?></h3>
					<div class="blue-border-mob">
						<p class="mt-5d font-light"><?php echo CFS()->get('videoDescription'); ?></p>
						<p class="font-light"><span class="font-weight-bold">Срок изготовления: </span> <?php echo CFS()->get('videoTerm'); ?></p>
						<p class="font-light"><span class="font-weight-bold">Стоимость: </span> <?php echo CFS()->get('videoPrice'); ?></p>
					</div>
				</div>
				<div class="col-md-6 mobs-off">
					<div style="padding:56.25% 0 0 0;position:relative;">
						<iframe src="https://player.vimeo.com/video/<?php echo CFS()->get('videoNumberVimeo'); ?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
					</div>
				</div>
			</div>
			<p><br></p>
			<p><br></p>
		<?php endif ?>
			<?php $postCounter = $postCounter + 1; ?>
			<?php endwhile ?>
			<?php else: ?>
			<?php endif ?>
		</div>
	</div>


<?php get_footer(); ?>