 <?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyright'];
$logoSrc = wp_get_attachment_url($logo);
 ?>


        
<?php wp_footer(); ?>


<footer>
   <div class="container">
      <div class="row">
         <div class="col-lg-4 col-md-6">
             <div class="log_img">
                 <a href="<?php echo site_url();?>">
                   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png" class="img-fluid" alt="" />
                  </a>
             </div>
            <div class="text-2">
               <?php echo $options['FooterAbout'];?>
            </div>
         </div>
         <div class="col-lg-2 col-md-6">
            <div class="text-2">
               <h2>Links</h2>
               <?php wp_nav_menu(array('menu'=>'Footer Menu','menu_class'=>''))?>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="text-2">
               <h2>Contact</h2>
               <div class="contact-info">
                  <ul>
                     <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/footer-icon-phone.png" /><a href="javascript:;">
                        DUNS: <?php echo $options['phone_number'];?></a
                           >
                     </li>
                     <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/footer-icon-page.png" /><a href="javascript:;" > Cage code: 8FE19</a>
                     </li>
                     <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/footer-icon-page.png" /><a
                           href=javascript:;
                           >
                        SAM UEI: DMU8CMR7W2B6</a
                           >
                     </li>
                     <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/footer-icon-location.png" /><a
                           href="javascript:;">Office: <?php echo $options['Office_Address'];?></a
                           >
                     </li>
                     <li>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/footer-icon-email.png" /><a href="mailto:<?php echo $options['email'];?>"
                           >
                        <?php echo $options['email'];?></a
                           >
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6">
            <div class="text-4">
               <h2>Cloud Service Partners</h2>
               <p>Amazon Web Services</p>
               <p>Google Cloud</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div class="copyright">
               <p>
                 <?php echo $options['copyright'];?> 
               </p>
            </div>
         </div>
      </div>
   </div>
</footer>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos-animate.js"></script>
    <script type="text/javascript ">
      wow = new WOW({
          animateClass: 'animated',
          offset: 100,
          callback: function(box) {
              console.log("WOW: animating < " + box.tagName.toLowerCase() + ">")
          }
      });
      wow.init();
    </script>
<script>
    $("ul li.last a").addClass("t-btn");
</script>

</body>
</html>