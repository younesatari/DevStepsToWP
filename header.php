<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">  
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php wp_head(); ?>
   <title><?php bloginfo('name');?></title>
</head>
<body class="bg-secondary">
   <!-- Header -->
   <header id="home" class="d-flex flex-column justify-content-between">
      <!-- Top Section -->
      <div class="top-section pt-5 d-flex justify-content-end">
          <?php get_search_form(); ?>
      </div>      
      <!-- Nav Section -->
      <nav class="d-flex">
         <div class="container d-flex justify-content-center align-items-center">  
               <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
         </div>
      </nav>
      <!-- Bottom Section -->
      <div class="bottom-section p-3">
         <div class="social-icons">
            <a class="mx-2" href="#"><i class="fab fa-facebook-f text-secondary"></i></a>
            <a class="mx-2" href="#"><i class="fab fa-twitter text-secondary"></i></a>
            <a class="mx-2" href="#"><i class="fab fa-youtube text-secondary"></i></a>
         </div>
      </div>
   </header>