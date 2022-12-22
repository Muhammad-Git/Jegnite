<?php /* Template Name: Jobs Template */ ?>
<?php get_header(); ?>

<section class="home-sec-2">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="box">
               <div class="row">
                  <div class="col-md-3">
                     <img src="<?php echo get_field('image');?>" alt="" />
                  </div>
                  <div class="col-md-12">
                     <div class="inner-text">
                         <h2>Total Jobs (<?php echo wp_count_posts( 'awsm_job_openings' )->publish ;?> )</h2>
                        <!--<?php echo do_shortcode('[jobs]');?>-->
                        <?php echo do_shortcode('[awsmjobs]');?>
                        <!--<?php echo do_shortcode('[submit_job_form]');?>-->
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php get_footer();?>