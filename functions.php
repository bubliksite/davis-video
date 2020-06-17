<?php

/** Перечень стилей и скриптов **/
function load_style_script () {
	wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('bootstrap.min', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('all', '//use.fontawesome.com/releases/v5.8.1/css/all.css');

	wp_enqueue_script('jquery-3.3.1.min', '//code.jquery.com/jquery-3.3.1.min.js');
	wp_enqueue_script('popper.min', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_script('bootstrap.min', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
	wp_enqueue_script('player', '//player.vimeo.com/api/player.js');
	wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js');
}

/** Загрузка стилей и скриптов **/
add_action('wp_enqueue_scripts', 'load_style_script');

/** Отключаем верхнюю админ-панель **/
show_admin_bar(false);

/** Добавляем изображения **/
add_theme_support('post-thumbnails');