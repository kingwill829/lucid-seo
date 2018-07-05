<!doctype html>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


  <?php if (is_single() ) : ?>
   <script type="application/ld+json">
    {"@context" : "http://schema.org",
      "@type" : "Article",
      "headline" : "<?php the_title(); ?>",
      "image" : {
        "@type" : "imageObject",
        "url" : "<?php the_post_thumbnail_url(); ?>",
        "height" : "300",
        "width" : "500"
      },
      "datePublished" : "<?php the_time( get_option( 'date_format' ) ); ?>",
      "author" : "Will King",
      "publisher" : {
        "@type" : "organization",
        "name" : "Lucid SEO",
        "logo" : {
          "@type" : "imageObject",
          "url" : "<?php echo LOGO ?>"
        }
    }
   }
   </script>
 <?php endif; ?>
<?php wp_head(); ?>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MN94TGS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<header id="masthead" class="clearfix">
    <section id="site-logo">
      <a href="<?php echo get_option('home'); ?>">
        <img src="<?php echo LOGO ?>" alt="Lucid SEO logo" width="150"/>
      </a>
    </section>
    <div class="mobile-nav__icon">
      <div class="mobile-nav__icon-inner">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>  
    </div> 
    
      <?php wp_nav_menu( array(
        'theme_location' => 'primary-menu',
        'container' => 'nav',
        'menu_class' => 'nav'
         ) 
        ); ?>
	</header>
  <div class="site-content-contain">
    <div id="content" <?php if (!is_front_page()&&!is_page_template('template-landing-page.php')) {
      echo 'class="site-content"';
      }?>>