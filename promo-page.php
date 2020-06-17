<?php 

/*
Template name: Промо страницы
*/

 ?>

 <?php get_header(); ?>

<div class="content bg-gray">

	

	<div class="head-promo" style="background: url('<?php echo the_post_thumbnail_url(); ?>') no-repeat center; background-size: cover;">
		<div class="bg-opacity-dark"></div>
		<div class="ugol bg-gray"></div>
		<div class="container text-white">
			<h1>
				<?php the_title(); ?><br>
				<button class="btn text-white" onclick="history.back();"><i class="fas fa-chevron-left"></i> Назад</button>
			</h1>
		</div>
	</div>

	<?php $postCounter = 1; ?>
	<?php $promos = CFS()->get('_promo'); ?>


	<div class="container promo-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		<?php foreach ($promos as $promo) : ?>


		<?php if (($postCounter%2) != 0) : ?>

			<div class="row" style="position: relative;">
				<div class="red-border"></div>
				<div class="col-md-6">
					<h3 class="mobs-on text-uppercase"><?php echo $promo['promoHeader']; ?></h3>
					<div style="padding:56.25% 0 0 0;position:relative;">
						<iframe src="https://player.vimeo.com/video/<?php echo $promo['promoNumberVimeo']; ?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
					</div>
					<script src="https://player.vimeo.com/api/player.js"></script>
				</div>
				<div class="col-md-6">
					<h3 class="mobs-off text-uppercase"><?php echo $promo['promoHeader']; ?></h3>
					<div class="font-light">
						<p class="mt-5"><?php echo $promo['promoDescription']; ?></p>
					</div>
					
				</div>
			</div>
			<?php $mores = $promo['_more']; ?>
			<div class="row mt-5">
				<?php foreach ($mores as $more) : ?>
					<div class="col-md mb-3">
						<p><?php echo $more['moreTitle']; ?></p>
						<div style="padding:56.25% 0 0 0;position:relative;">
							<iframe src="https://player.vimeo.com/video/<?php echo $more['moreNumberVimeo']; ?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;right:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
						</div>
						<script src="https://player.vimeo.com/api/player.js"></script>
					</div>
				<?php endforeach ?>
			</div>
			<p><br></p>
			<p><br></p>

			<?php else : ?>

			<div class="row" style="position: relative;">
				<div class="blue-border"></div>
				<div class="col-md-6 mobs-on">
					<h3 class="mobs-on text-uppercase"><?php echo $promo['promoHeader']; ?></h3>
					<div style="padding:56.25% 0 0 0;position:relative;">
						<iframe src="https://player.vimeo.com/video/<?php echo $promo['promoNumberVimeo']; ?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
					</div>
					<script src="https://player.vimeo.com/api/player.js"></script>
				</div>
				<div class="col-md-6">
					<h3 class="mobs-off text-uppercase"><?php echo $promo['promoHeader']; ?></h3>
					<div class="font-light">
						<p class="mt-5"><?php echo $promo['promoDescription']; ?></p>
					</div>
				</div>
				<div class="col-md-6 mobs-off">
					<div style="padding:56.25% 0 0 0;position:relative;">
						<iframe src="https://player.vimeo.com/video/<?php echo $promo['promoNumberVimeo']; ?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
					</div>
					<script src="https://player.vimeo.com/api/player.js"></script>
				</div>
			</div>	
			<?php $mores = $promo['_more']; ?>
			<div class="row mt-5">
				<?php foreach ($mores as $more) : ?>
					<div class="col-md mb-3">
						<p><?php echo $more['moreTitle']; ?></p>
						<div style="padding:56.25% 0 0 0;position:relative;">
							<iframe src="https://player.vimeo.com/video/<?php echo $more['moreNumberVimeo']; ?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;right:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
						</div>
						<script src="https://player.vimeo.com/api/player.js"></script>
					</div>
				<?php endforeach ?>
			</div>
			<p><br></p>
			<p><br></p>

		<?php endif ?>

			<?php $postCounter = $postCounter + 1; ?>

		<?php endforeach ?>
		<?php endwhile ?>
		<?php else: ?>
		<?php endif ?>

	</div>

	




<?php get_footer(); ?>

