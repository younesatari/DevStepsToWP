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
                        <!-- Share -->
                        <section class="share mb-5">
                           <p class="text-center">Share this article on:</p>
                           <div class="socials d-flex align-items-center justify-content-center">
                              <a class="mx-3" href="#"><i class="fab fa-whatsapp"></i></a>
                              <a class="mx-3" href="#"><i class="fab fa-linkedin"></i></a>
                              <a class="mx-3" href="#"><i class="fab fa-facebook"></i></a>
                              <a class="mx-3" href="#"><i class="fab fa-twitter"></i></a>
                           </div>
                        </section>
                        <!-- Article img -->
                        <?php the_post_thumbnail(); ?>
                        <!-- Article text -->
                        <section class="article-text my-5 px-4 text-justify">
                           <?php the_content(); ?>
                        </section>
                    <?php endwhile; 
                  endif; 
               ?>
               
               <!-- Share -->
               <p class="text-center">Don't forget to share it on :</p>
               <section class="share-2 d-flex flex-column flex-md-row align-items-center justify-content-center mb-5">
                  <a class="mx-2 my-1 btn btn-success text-white" href="#"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                  <a class="mx-2 my-1 btn btn-primary text-white" href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
                  <a class="mx-2 my-1 btn btn-danger text-white" href="#"><i class="fab fa-facebook"></i> Facebook</a>
                  <a class="mx-2 my-1 btn btn-info text-white" href="#"><i class="fab fa-twitter"></i> Twitter</a>
               </section>
               <!-- Comment Section -->
               <section class="comment-section pt-5 mb-5">
                  <!-- Comment method -->
                  <div class="comment-method d-flex align-items-center justify-content-center mb-3">
                     <a class="btn btn-danger text-white mx-2 my-1 cmnt-1" href="#">Comment using site's comments <i class="fas fa-comment"></i></a>
                     <a class="btn btn-primary text-white mx-2 my-1" href="#">Comment using using Facebook <i class="fab fa-facebook-f"></i></a>
                  </div>
                  <!-- form -->
                  <form id="form">
                     <div class="form-group">
                        <textarea class="form-control mb-2" id="message" rows="3"></textarea>
                        <a type="button" class="btn btn-block btn-danger text-white" href="#">Enter Your Comment</a>
                    </div>
                  </form>
               </section>
               
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