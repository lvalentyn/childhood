<?php

add_action('wp_enqueue_scripts', 'childhood_scripts');/* хук для отслеживания стилей и скриптов 'wp_enqueue_scripts' - название хука ,'childhood_scripts' -наша функция, add_action - действие*/

function childhood_scripts() {
    wp_enqueue_style('childhood-style', get_stylesheet_uri()); /* подключаем style.css в корне */
    // wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/main.min.css'); /* подключить стили через сторонню папку */
    // wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');/* подключить стили через сторонню ссылку */
    wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true); /* подключаем js скрипт  */
    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js');
    wp_enqueue_script('jquery');
};

// если много скриптов или стилей можно разделить функции
// add_action('wp_enqueue_scripts', 'childhood_styles');/* хук для отслеживания стилей и скриптов */
// add_action('wp_enqueue_scripts', 'childhood_scripts');/* хук для отслеживания стилей и скриптов */
// function childhood_styles() {
//     wp_enqueue_style('childhood-style', get_stylesheet_uri()); /* подключаем style.css в корне */
//     // wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/main.min.css'); /* подключить стили через сторонню папку */
//     // wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');/* подключить стили через сторонню ссылку */
// };
// function childhood_scripts() {
//     wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true); /* подключаем js скрипт  */
// };

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );


function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyA4euNhLS1SLF7xtFfuk2KQkSVmbVlIa5I'; // Ваш ключ Google API
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>