<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>

<section class="home-sec-2 inner_services">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="text">
              
               <h2><?php echo the_title();?></h2>
               <?php echo wpautop(the_content());?>
                 
            </div>
         </div>
      </div>
      
   </div>
</section>

<?php endwhile; wp_reset_query(); ?>
<?php get_footer(); ?>