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
               <?php 
                  if ( have_posts() ) : 
                     while ( have_posts() ) : the_post(); 
                      ?>
                     <article class="d-flex justify-content-center mb-5 bg-white">
                        <div class="left">
                           <!-- Left image -->
                           <div class="card text-white border-0">
                              <img class="card-img" src="<?php 
                                 if(has_post_thumbnail()) {
                                    the_post_thumbnail();
                                 } else {
                                    echo get_theme_file_uri('/img/hero.jpg');
                                 }
                              ?>">
                              <div class="card-img-overlay d-flex align-items-end justify-content-center">
                                 <p class="card-text px-3 py-2 text-capitalize">
                                    <a target="_blank" class="text-white" href="<?php the_permalink(); ?>">
                                       <?php the_title(); ?>
                                    </a>
                                 </p>
                              </div>
                           </div>
                           <div class="content p-3">
                              <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <!-- Right -->
                        <div class="right bg-primary px-3">
                           <ul class="list-unstyled h-100 d-flex flex-column align-items-center justify-content-around">
                              <li class="d-flex align-items-center">
                                 <i class="fas fa-book-open text-secondary mx-1"></i>
                                 <a target="_blank" class="text-secondary text-center" href="<?php the_permalink(); ?>">Read!</a>
                              </li>
                              <li class="d-flex align-items-center">
                                 <i class="fas fa-comment text-secondary mx-1"></i>
                                 <a target="_blank" class="text-secondary text-center" href="<?php the_permalink(); ?>">Comment!</a>
                              </li>
                              <li class="d-flex align-items-center">
                                 <i class="fas fa-share-alt text-secondary mx-1"></i>
                                 <a target="_blank" class="text-secondary text-center" href="<?php the_permalink(); ?>">Share!</a>
                              </li>
                           </ul>
                        </div>
                     </article>
                     <?php endwhile; 
                  endif; 
               ?>
               
               <!-- Pagination -->
               <section id="pagination" class="mb-5">
                  <nav>
                     <ul class="pagination pagination-sm justify-content-center">
                        <!-- <li class="page-item mx-2 disabled">
                           <a class="page-link text-primary" href="#">Previous</a>
                        </li>
                        <li class="page-item mx-2 active">
                           <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item mx-2">
                           <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item mx-2">
                           <a class="page-link" href="#">3</a>
                        </li> -->
                        <li class="page-item mx-2">
                        <?php echo paginate_links(); ?>

                        </li>
                     </ul>
                  </nav>
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