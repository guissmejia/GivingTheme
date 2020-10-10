<?php 

function init_template(){

  add_theme_support('post-thumbnails');
   add_theme_support( 'title-tag');

  register_nav_menus(
    array(
      'header_menu' => 'Primary Menú',
      'header_secondary_menu' => 'Secondary Menú',
      'footer_menu' => 'Footer Menú'

      )
  );
}

add_action('after_setup_theme', 'init_template');


function assets(){

  wp_register_style('fonts', 'https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Open+Sans+Condensed:wght@300;700&display=swap','','1.0','all');

  wp_enqueue_style('googleFonts', get_stylesheet_uri(), array('fonts'), '1.0', 'all');

  wp_enqueue_script('script', get_template_directory_uri().'/js/GivingTheme.js', '', '1.0', true);

}

add_action('wp_enqueue_scripts','assets');

/* Permite responder los comentarios de otro usuario en los post */
function enable_threaded_comments() {

	if ( is_singular() AND comments_open() AND ( get_option( 'thread_comments' ) == 1 ) ) {
	wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'get_header', 'enable_threaded_comments' );