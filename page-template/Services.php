<?php /* Template Name: Services Template */ ?>
<?php get_header(); ?>


<section class="ser-sec-1">
   <div class="container">

      <div class="row">
        <?php
        $ID = array('57','63');   
        $x=1; $args = array( 
            'post__in' => $ID,
            'post_type' => 'services' , 
            'posts_per_page' => '2',
            'order'=>'ASC',); 
        $index_query = new WP_Query($args); 
        while ($index_query->have_posts()) : $index_query->the_post(); ?> 
        <!--<?php var_dump($args);?>-->
        <!--<p><?php echo $count_posts = wp_count_posts( 'services' )->publish ;?></p>-->
         <div class="col-lg-6 col-md-12">
            <div class="box">
               <div class="img-box">
                  <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid w-100" alt="">
               </div>
               <div class="text">
                  <h3><?php echo the_title();?> </h3>
                  <?php if( have_rows('services') ):?>
                  <ul>
                     <?php while( have_rows('services') ) : the_row();?>
                     <li><a href="javascript:;"><?php echo the_sub_field('title');?></a></li>
                     <?php endwhile;?>
                  </ul>
                  <?php endif;?>
               </div>
            </div>
         </div>
         <?php $x++; endwhile; wp_reset_query(); ?>
      </div>

      <div class="row">
        <?php
        $ID = array('66','65');   
        $x=1; $args = array( 
            'post__in' => $ID,
            'post_type' => 'services' , 
            'posts_per_page' => '2',
            'order'=>'ASC',); 
        $index_query = new WP_Query($args); 
        while ($index_query->have_posts()) : $index_query->the_post(); ?> 
        
         <div class="col-lg-6 col-md-12">
            <div class="box">
               <div class="img-box">
                  <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid w-100" alt="">
               </div>
               <div class="text">
                  <h3><?php echo the_title();?> </h3>
                  <?php if( have_rows('services') ):?>
                  <ul>
                     <?php while( have_rows('services') ) : the_row();?>
                     <li><a href="javascript:;"><?php echo the_sub_field('title');?></a></li>
                     <?php endwhile;?>
                  </ul>
                  <?php endif;?>
               </div>
            </div>
         </div>
         <?php $x++; endwhile; wp_reset_query(); ?>
   </div>
</section>

<?php get_footer();?>