<?php
/* Enable Post Thumbnail */
add_theme_support( 'post-thumbnails' );

function add_theme_scripts() {
   /* Load style.css*/
   wp_enqueue_style( 'style', get_stylesheet_uri() );
   /* Load main.css*/
   wp_enqueue_style('mainStyle', get_theme_file_uri('/css/main.css'));
   /* Load bootstrap.css*/
   wp_enqueue_style('bootstrap', get_theme_file_uri('/css/bootstrap.css'));
   /* Load font awesome */
   wp_enqueue_style('fontAwesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css');
   /* Load Scripts*/
   wp_enqueue_script('scriptOne', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', NULL, 1.0, true);
   wp_enqueue_script('scriptTwo', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', NULL, 1.1, true);
   wp_enqueue_script('scriptFour', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', NULL, 1.1, true);
}

add_action('wp_enqueue_scripts','add_theme_scripts');

/* Register Nav Menus */
function register_my_menus() {
   register_nav_menus(
     array(
       'header-menu' => __( 'Header Menu' ),
       'footer-menu' => __('Footer Menu')
      )
    );
  }
  add_action( 'init', 'register_my_menus' );
 
/* Register Widget*/
add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'primary',
            'name'          => __( 'Primary Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
    /* Repeat register_sidebar() code for additional sidebars. */
}
