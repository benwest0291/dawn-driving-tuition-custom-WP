<?php

// Add Theme Support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post_format', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

function wpb_add_google_fonts() {

  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,700,300', false );
  }

  add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

function add_theme_scripts()
{

// Load Styles

    wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/assets/src/app.css', array(), '9.5');



// Load scripts

  wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '1.12.9', true);
  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/vendor/bootstrap.min.js', array('jquery'), '4.5.3', true);


}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'dawndrivingtuition' ),
) );


// Register Menu Locations
register_nav_menus( [
  'main-menu' => esc_html__( 'Main Menu', 'dawndrivingtuition' ),
  'container' => 'div',
  'container_class' => 'container_class',
  'container_id' => 'container_id',
]);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );





// // Driving lession Blog

function driving_lession_blog()
{

  $args = array(

    'labels'=> array(
      'name' => 'Driving lession blogs',
      'singular_name' => 'Driving lession blog'
    ),
    'menu_icon' => 'dashicons-car',
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail'),
  );

  register_post_type('driving_lession_blog', $args);

}

add_action('init', 'driving_lession_blog');

?>
