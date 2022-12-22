<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />-->
<title><?php bloginfo( 'title' ); ?></title>
<?php wp_head();?>
	
 <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lib.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link  href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"/>
     <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WZXDS7G');</script>   
    
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WZXDS7G"
   height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
</head>
<?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyrite'];
$size = 344;
$options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
$att_img = wp_get_attachment_image($logo, array($size, $size), false);
$logoSrc = wp_get_attachment_url($logo);
$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
?>
<body <?php body_class(); ?>>


 <header>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/line.png" class="img-fluid line" alt="" />
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="logo" id="headerlogo">
              <a href="<?php echo site_url();?>"><img src="<?php echo $logoSrc;?>" class="img-fluid" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-8 col-md-8">
            <div class="nav-bar">
                <?php wp_nav_menu(array('menu'=>'Header Menu','menu_class'=>''))?>
             
            </div>
          </div>
        </div>
      </div>
    </header>
    
    <?php if(is_home() || is_front_page() ){$home_page_banner = get_field('home_page_banner');?>
    
    <section class="home-banner" style="background-image: url(<?php echo $home_page_banner['banner_image'];?>)">
       <a href="#home-sec-2" id="down-btn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/drop-down.png" class="img-fluid" alt="" /></a>
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="heading">
                   <h1><?php echo $home_page_banner['banner_heading'];?></h1>
                   <p><?php echo $home_page_banner['banner_content'];?></p>
                </div>
             </div>
          </div>
       </div>
    </section>
    
    <?php } else { ?>
    
    <?php if(get_field('bannerimage')){
        
    $BannerImage = get_field('bannerimage');
    
    }else{
    
    $BannerImage =  "https://insitechstaging.com/demo/jegnite/wp/wp-content/uploads/2022/10/1203109225755962.0zQkTOh1EehXndUJQrmB_height640.png";
    
    }?>
    
    <?php if(get_field('bannerheading')){
        
    $BannerHeading = get_field('bannerheading');
    
    }else{
    
    $BannerHeading = get_the_title();
    
    }?>
    
    
   <section class="page-title" style="background-image:url(<?php echo $BannerImage?>)">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1><?php echo $BannerHeading; ?></h1>
          </div>
        </div>
      </div>
    </section>
    
    <?php } ?>