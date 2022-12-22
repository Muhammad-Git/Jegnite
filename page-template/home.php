<?php /* Template Name: Home Template */ ?>
<?php get_header(); 
$section_1 = get_field('section_1');
$section_2 = get_field('section_2');
$section_3 = get_field('section_3');
$section_4 = get_field('section_4');
?>



<section class="home-sec-1" id="home-sec-2">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sec-1-bg.png" class="img-fluid sec-1-bg" alt=""/>
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-12">
            <div class="img">
               <img src="<?php echo $section_1['image'];?>" class="img-fluid" alt=""/>
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <div class="text">
               <h6><?php echo $section_1['title'];?></h6>
               <h2><?php echo $section_1['subtitle'];?></h2>
               <div class="para-righ-space">
                  <span></span>
                  <?php echo $section_1['content'];?>
                  <div class="row">
                     <div class="col-md-5">
                        <div class="inner-text">
                           <?php echo $section_1['content_2'];?>
                        </div>
                     </div>
                     <div class="col-md-7">
                        <div class="inner-text">
                          <?php echo $section_1['content_3'];?>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="home-sec-2">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="text">
               <h6><?php echo $section_2['title'];?></h6>
               <h2><?php echo $section_2['subtitle'];?></h2>
               <p>
                  <?php echo $section_2['content'];?>
               </p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6 col-md-12">
            <div class="box">
                <?php    $x=1;  $args = array( 'post_type' => 'services' , 'posts_per_page' => '4','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>  
                <?php if($x==4){?>
                
                 <div class="row boxshadow boxshadow1">
                  <div class="col-md-3">
                     <img src="<?php echo get_field('image');?>" alt="" />
                  </div>
                  <div class="col-md-9">
                     <div class="inner-text">
                        <h3><?php the_title();?></h3>
                        <p><?php the_excerpt()?></p>
                     </div>
                  </div>
               </div>
                
                <?php } else {?>
               <div class="row mt-5 boxshadow">
                  <div class="col-lg-3 col-md-12">
                     <img src="<?php echo get_field('image');?>" alt="" />
                  </div>
                  <div class="col-lg-9 col-md-12">
                     <div class="inner-text">
                        <h3><?php the_title();?></h3>
                        <p><?php the_excerpt()?></p>
                     </div>
                  </div>
               </div>
               <?php } ?>
               <?php $x++; endwhile; wp_reset_query(); ?>
               <!-- <div class="row  boxshadow">
                  <div class="col-md-3">
                     <img src="assets/images/home/sec-2-2.png" alt="" />
                  </div>
                  <div class="col-md-9">
                     <div class="inner-text">
                        <h3>Enterprise Operations</h3>
                        <p>
                           Sed ut perspiciatis unde omnis iste natus error sit
                           voluptatem accusantium.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row  boxshadow">
                  <div class="col-md-3">
                     <img src="assets/images/home/sec-2-3.png" alt="" />
                  </div>
                  <div class="col-md-9">
                     <div class="inner-text">
                        <h3>IT Management Consulting</h3>
                        <p>
                           Sed ut perspiciatis unde omnis iste natus error sit
                           voluptatem accusantium.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="row  boxshadow boxshadow1">
                  <div class="col-md-3">
                     <img src="assets/images/home/sec-2-4.png" alt="" />
                  </div>
                  <div class="col-md-9">
                     <div class="inner-text">
                        <h3>Other Services</h3>
                        <p>
                           Sed ut perspiciatis unde omnis iste natus error sit
                           voluptatem accusantium.
                        </p>
                     </div>
                  </div>
               </div> -->
            </div>
         </div>
         <div class="col-lg-6 col-md-12">
            <img
               src="<?php echo $section_2['image'];?>" class="img-fluid" alt=""/>
         </div>
      </div>
   </div>
</section>

<section class="home-sec-3">
   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sec-3-bg.png" class="img-fluid home-sec-3-bg" alt="" />
   <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/blue-dots.png" class="img-fluid blue-dots" alt="" />
   <div class="container">
      <div class="row align-items-end">
         <div class="col-lg-7 col-md-12">
            <div class="box">
               <div class="text">
                  <h5><?php echo $section_3['title'];?></h5>
                  <h2><?php echo $section_3['subtitle'];?></h2>
                  <p><?php echo $section_3['content'];?></p>
                  <a href="<?php echo $section_3['page_link_up'];?>"><?php echo $section_3['button_title_up'];?> <img
                     src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sec-3-arrow.png" class="img-fluid" alt="" /></a>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <img src="<?php echo $section_3['image_left'];?>" class="img-fluid w-100" alt="" />
                  </div>
                  <div class="col-md-6">
                     <div class="img-hover h-100" style=" background-image: url(<?php echo site_url()?>/wp-content/uploads/2022/09/sec-3-2.png);">
                        <div class="img-text">
                           <img
                              src="<?php echo $section_3['image_button'];?>" class="img-fluid img-person" alt="" />
                           <h3><?php echo $section_3['title__recent_job_offers_'];?></h3>
                           <!--<p><?php echo $section_3['content__recent_job_offers_'];?></p>-->
                           <p>Job offers <?php echo wp_count_posts( 'awsm_job_openings' )->publish ;?> vacancies are waiting for you.</p>
                           <a href="<?php echo $section_3['page_link__recent_job_offers_'];?>"><?php echo $section_3['button_title__recent_job_offers_'];?> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/sec-3-arrow.png" class="img-fluid" alt="" /></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-5 col-md-6">
            <div class="img">
               <img src="<?php echo $section_3['image_right'];?>" class="img-fluid" alt="" />
            </div>
         </div>
      </div>
   </div>
</section>

<section class="home-sec-4">
   <!-- <img
      src="assets/images/home/sec-4-bg.png"
      class="img-fluid sec-4-bg"
      alt=""
      /> -->
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="text">
               <h6><?php echo $section_4['title'];?></h6>
               <h2><?php echo $section_4['content'];?></h2>
               <div class="logo-box">
                <?php if( have_rows('section_4')) : while ( have_rows('section_4') ) : the_row(); ?>
                    <?php if( have_rows('section_4_repeater') ): while ( have_rows('section_4_repeater') ) : the_row(); ?>    
                  <div class="logo-sec">
                     <img src="<?php echo get_sub_field('image'); ?>" class="img-fluid" alt="" />
                  </div>
                      <?php endwhile; endif; ?>
                  <?php endwhile; endif; ?>
               </div>
               <a href="<?php echo site_url();?>/contact-us/" class="t-btn">Contact Us</a>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="home-sec-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text">
              <h6>Contact Us</h6>
              <h2>Get In Touch</h2>
            </div>
             <?php echo do_shortcode('[contact-form-7 id="97" title="Contact form 1"]'); ?>
            
          </div>
        </div>
      </div>
    </section>




<?php get_footer(); ?>