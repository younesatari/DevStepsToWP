<?php get_header(); ?>
   <!-- Welcome Section -->
   <section class="sticky-top bg-primary text-center my-1 d-flex align-items-center justify-content-center text-secondary py-2" id="welcome">
     -- Welcome to <a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a> --
   </section>
   <!-- Main Section -->
   <section class="bg-secondary mt-4" id="main">
      <div class="container-fluid">
         <div class="row">
         <div class="col-md-8">
                <?php 
                  if ( have_posts() ) : 
                     while ( have_posts() ) : the_post(); ?>
                        <section class="tags d-flex align-items-center justify-content-center mb-5">
                           <?php echo get_the_category_list('/');  ?>
                        </section>
                        <!-- Article Title -->
                        <h4 class="text-center mb-5"><?php the_title(); ?></h4>
                        <!-- Article text -->
                        <section class="article-text my-5 px-4 text-justify">
                           <?php the_content(); ?>
                        </section>
                    <?php endwhile; 
                  endif; 
               ?>
               
               
               
               
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