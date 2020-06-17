<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Создание видеоконтента для продвижения бизнеса">
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<link rel="canonical" href="//davisvideo.ru">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri() . '/logo.ico'; ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(46775958, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/46775958" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
	<!-- /Yandex.Metrika counter -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142288980-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-142288980-1');
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->

	<?php wp_head(); ?>

	<style>
		.loaderArea {
			background: radial-gradient(ellipse at top, rgba(62,74,122,1) 0%, rgba(4,27,61,1) 100%);
			overflow: hidden;
			position: fixed;
			left: 0;
			top: 0;
			right:0;
			bottom:0;
			z-index: 100000;
			display: flex;
		}
		.loader {
			height: 115px;
			width: 115px;
			position: relative;
			margin: auto;
			vertical-align: middle;
			}

		.loader img.brick {
			position: absolute;
			bottom: 0;
			right: -15px;
		}

		.loader h5 {
			position: absolute;
			bottom: -50%;
			animation: opacity 2s infinite;
		}

			.brick {
			animation: rotate 2s infinite;
			}

			@keyframes rotate {
				0% {
				transform: rotate(0deg);
			}
			40% {
				transform: rotate(5deg);
			}
			60% {
				transform: rotate(175deg);
			}
			100% {
				transform: rotate(360deg);
			}
		}

		@keyframes opacity {
			0% {
				opacity: 1;
			}
			40% {
				opacity: 0.2;
			}
			50 % {
				opacity: 0;
			}
			60% {
				opacity: 0.2;
			}
			100% {
				opacity: 1;
			}
		}
	</style>

</head>
<body>
<div class="loaderArea">
	<div class="loader d-flex align-item-center">
		<img src="<?php echo get_template_directory_uri() . '/img/logo_w.png'; ?>" alt="">
		<img class="brick" src="<?php echo get_template_directory_uri() . '/img/brick.png'; ?>" alt="">
		<h5 class="text-white">Загрузка...</h5>
	</div>
</div>