<?php

/** Add styles **/
add_action('wp_enqueue_scripts', 'style_theme' );
function style_theme() {
		wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'owl-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', [], '2.3.4' );

		wp_enqueue_style( 'reset-css', 'https://unpkg.com/@mezhevykh/mini-css-framework@1.0.3/dist/main.css');
		wp_enqueue_style( 'owl-styles', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
		wp_enqueue_style( 'owl-default-styles', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
		
	wp_enqueue_style( 'default_css', get_template_directory_uri() . 
		'/assets/css/default.css' );
	wp_enqueue_style( 'header_css', get_template_directory_uri() . 
		'/assets/css/header.css' );
	wp_enqueue_style( 'section1_css', get_template_directory_uri() . 
		'/assets/css/section1.css' );
	wp_enqueue_style( 'section2_css', get_template_directory_uri() . 
		'/assets/css/section2.css' );
	wp_enqueue_style( 'section3_css', get_template_directory_uri() . 
		'/assets/css/section3.css' );
	wp_enqueue_style( 'section4_css', get_template_directory_uri() . 
		'/assets/css/section4.css' );
	wp_enqueue_style( 'section5_css', get_template_directory_uri() . 
		'/assets/css/section5.css' );
	wp_enqueue_style( 'section6_css', get_template_directory_uri() . 
		'/assets/css/section6.css' );
	wp_enqueue_style( 'section7_css', get_template_directory_uri() . 
		'/assets/css/section7.css' );
	wp_enqueue_style( 'section8_css', get_template_directory_uri() . 
		'/assets/css/section8.css' );
	wp_enqueue_style( 'section9_css', get_template_directory_uri() . 
		'/assets/css/section9.css' );
	wp_enqueue_style( 'footer_css', get_template_directory_uri() . 
		'/assets/css/footer.css' );
	wp_enqueue_style( 'aboutus_css', get_template_directory_uri() . 
		'/assets/css/aboutus/aboutus_section1.css' );
	wp_enqueue_style( 'aboutus2_css', get_template_directory_uri() . 
		'/assets/css/aboutus/aboutus_section2.css' );
	wp_enqueue_style( 'aboutus3_css', get_template_directory_uri() . 
		'/assets/css/aboutus/aboutus_section3.css' );
	wp_enqueue_style( 'aboutus4_css', get_template_directory_uri() . 
		'/assets/css/aboutus/aboutus_section4.css' );
	wp_enqueue_style( 'faq_css', get_template_directory_uri() . 
		'/assets/css/faq/page_faq.css' );

	 wp_enqueue_script('faq_script', get_template_directory_uri() . 
	 	'/assets/scripts/popap.js');

	 wp_enqueue_script('main-scripts', get_template_directory_uri() . 
	 	'/assets/scripts/main.js');
	wp_enqueue_style('style', get_stylesheet_uri());
}

//подключение шрифтов Open Sans и Barlow от Google start
function wph_add_google_fonts() {
    if ( !is_admin() ) {
        wp_register_style('google-open-sans-barlow', 'fonts.googleapis.com/css?family=Barlow:400,600|Open+Sans:300,700', array(), null, 'all');
        wp_enqueue_style('google-open-sans-barlow');       
    }
}
add_action('wp_enqueue_scripts', 'wph_add_google_fonts');
//подключение шрифтов Open Sans и Barlow от Google end


/** Add Logo **/
add_theme_support( 'custom-logo', array(
	'header-text' => array( 'site-title', 'site-description' ),
) );

/** Add WP_Menu **/
/**add_theme_support('menus'); **/

register_nav_menus(array(
	'top'    => 'Верхнее меню',    //Название месторасположения меню в шаблоне
	'bottom1' => 'Нижнее меню1',      //Название другого месторасположения ме
	'bottom2' => 'Нижнее меню2'      //Название другого месторасположения меню 
));



// Добавляем страницу с настройками
if( function_exists('acf_add_options_page') ) {
		acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
		acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}

/** FONT OWESOME **/
function load_font_awesome() {
  wp_enqueue_style( 'font-awesome-style', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'load_font_awesome' );