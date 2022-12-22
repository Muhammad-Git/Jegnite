<?php /* Template Name: Contact Us Template */ ?>
<?php get_header(); ?>


<section class="home-sec-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text">
              <h6>Contact Us</h6>
              <h2>Get In Touch</h2>
            </div>
            <!--<div class="form">
              <input type="text" name="" id="" placeholder="Your Name">
              <input type="email" name="" id="" placeholder="Email Address">
              <input type="tel" name="" id="" placeholder="Your Phone">
              <input type="text" name="" id="" placeholder="Subject">
              <textarea name="" id="" placeholder="Message"></textarea>
              <button class="t-btn">Submit Now</button>
              
              
            </div>-->
            
              <?php echo do_shortcode('[contact-form-7 id="97" title="Contact form 1"]'); ?>
            
          </div>
        </div>
      </div>
    </section>


<?php get_footer();?>