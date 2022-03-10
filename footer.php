<!-- Footer -->
<footer id="footer">
      <!-- Contact -->
      <section class="bg-danger py-3" id="contact">
         <div class="container">
            <div class="row">
               <!-- <div class="col-12 mx-auto d-flex justify-content-center align-items-center list-unstyled">
                  <li class="mx-2"><a class="text-white text-center" href="#">Terms & Politics</a></li>
                  <li class="mx-2"><a class="text-white text-center" href="#">Archive</a></li>
                  <li class="mx-2"><a class="text-white text-center" href="#">Contact Us</a></li>
               </div> -->
               <?php wp_nav_menu(array('theme-location' => 'footer-menu')); ?>
            </div>
         </div>
      </section>
      <!-- Copyright -->
      <section id="copyright" class="bg-secondary py-3">
         <div class="container">
            <div class="row">
               <div class="col mx-auto text-center">
                  Has been coded by Youness Atari &copy; 2021
               </div>
            </div>
         </div>
      </section>
   </footer>
   <?php wp_footer(); ?>
</body>
</html>