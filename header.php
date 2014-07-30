<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="utf-8">
<title><?php wp_title( '|', true, 'right' ); ?></title>
    
<?php wp_head(); ?>
    
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
    e.src='//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
    
</head>

<body <?php body_class(); ?>>

<header id="header">
  <div class="wrap hpad vpad-half clearfix">
    
    <a class="logo" href="http://scratchtheme.com" title="Scratch Theme for WordPress">
      <img src="<?php echo get_template_directory_uri(); ?>/img/site-logo.svgz">
    </a>
      
    <span class="nav-toggle"
          data-direction="down">
      <i class="icon ion-navicon"></i>
    </span>
      
    <nav id="nav" role="navigation">
      <?php scratch_main_nav(); ?>
    </nav>
    
  </div>
</header>