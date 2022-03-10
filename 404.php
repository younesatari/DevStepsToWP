<?php get_header(); ?>
   <!-- Welcome Section -->
   <section class="sticky-top bg-primary text-center my-1 d-flex align-items-center justify-content-center text-secondary py-2" id="welcome">
     -- Welcome to <a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a> --
   </section>
   <!-- Main Section -->
   <section class="bg-secondary mt-4" id="main">
      <div class="container-fluid">
         <div class="row">
            <!-- Articles Section -->
            <div class="col-md-8">
               <h1 class="text-center">The Page you are searching for is not found</h1>  
               <h2 class="text-center">Please try again : </h2>          
               <?php echo get_search_form(); ?>
            </div>
            <?php get_sidebar(); ?>
         </div>
      </div>
   </section>
   <!-- Who Am I Section -->
   <section class="bg-primary text-white py-5" id="who-am-i">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-10">
               <div class="row">
                  <div class="col-4">
                     <img class="img-fluid" src="<?php echo get_theme_file_uri('img/about.png'); ?>">
                  </div>
                  <div class="col-8">
                     <h4 class="bg-white text-dark mt-5 mb-3 py-2 px-2 d-inline-block">Who am I?</h4>
                     <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At veniam culpa quae illum aspernatur nisi blanditiis. Nemo, sit delectus! Quidem iste reiciendis aliquid minus praesentium.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php get_footer(); ?>