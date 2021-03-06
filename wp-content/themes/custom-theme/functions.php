<?php

// load css
function load_css(){
    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('main',get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}

add_action("wp_enqueue_scripts","load_css");

// load js
function load_js(){
    wp_enqueue_script('jquery');
    wp_register_script('bootstrapjs',get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script('bootstrapjs');
}

add_action("wp_enqueue_scripts","load_js");

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
    array(
      'top-menu' => 'Top Menu Location',
      'mobile-menu' => 'Mobile Menu Location',
      'footer-menu' => 'Footer Menu Location',
    )
  );
  
  //custom image size
  add_image_size('blog-large', 800, 400, false);
  add_image_size('blog-small', 300, 200, true);
  
  // Register sidebars
  function my_sidebars(){
    register_sidebar(
        array(
          'name' => 'Page Sidebar',
          'id' => 'page-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'
        )
      );

      register_sidebar(
        array(
          'name' => 'Home Sidebar',
          'id' => 'home-sidebar',
          'before_title' => '<h4 class="widget-title">',
          'after_title' => '</h4>'
        )
      );
  
      register_sidebar(
          array(
            'name' => 'Footer Sidebar',
            'id' => 'footer-sidebar',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4>'
          )
        );
  }
  
  add_action('widgets_init', 'my_sidebars');

// custom post type
function add_animals_post(){
  $args = array(
    'labels' => array(
        'name' => 'Animals',
        'singular_name' => 'Animals',
    ),
  'hierarchical' => true, //boolean value toggles between pages & posts without labels
  'menu_icon' => 'dashicons-carrot',//get icon name from wordpress dashicons
  'public' => true,
  'has_archive' => true,
  'supports' => array('title','editor','thumbnail','custom-fields' ),// if one of the argument is  not mentioned,
  //if makes difference in features

);
  register_post_type('animals',$args);
}

add_action('init','add_animals_post');

// custom taxonomy
  function animals_taxonomy(){
    $args = array(
      'labels' => array(
          'name' => 'Families',
          'singular_name' => 'Family',
      ),
    'hierarchical' => true, //boolean value toggles between pages & posts without labels
    'public' => true,
  
  );
    register_taxonomy('families',array('animals'), $args);
  }
  
  add_action('init','animals_taxonomy');

?>