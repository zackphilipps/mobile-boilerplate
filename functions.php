<?php

/* Do not remove this line. */
require_once('core/scratch.php');









/*
 * mobile_meta() adds all meta information to the <head> element for us.
 */

function mobile_meta() { ?>
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta http-equiv="cleartype" content="on">

        <!-- Disable phone number detection. -->
        <!--<meta name="format-detection" content="telephone=no">-->
 
        <!-- Set viewport. -->
        <meta name="viewport" content="initial-scale=1, user-scalable=no, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi">

        <!--<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/img/touch/touch-icon-196x196.png">-->
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon.png">

        <!-- Tile icon for Win8 (144x144 + tile color) -->
        <!--<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/img/touch/apple-touch-icon-144x144-precomposed.png">
        <meta name="msapplication-TileColor" content="#222222">-->

        <!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->


        <!-- SEO: If mobile URL is different from desktop URL, add a canonical link to the desktop page -->
        <!--
        <link rel="canonical" href="http://www.example.com/" >
        -->

        <!-- Add to homescreen for Chrome on Android -->
        <!--
        <meta name="mobile-web-app-capable" content="yes">
        -->

        <!-- For iOS web apps. Delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
        <!--
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?>">

        <!-- Startup images -->
 
        <!-- iOS 6 & 7 iPad (retina, portrait) -->
        <!--<link href="<?php echo get_template_directory_uri(); ?>/img/startup/startup-tablet-portrait-retina.png"
              media="(device-width: 768px) and (device-height: 1024px)
                 and (orientation: portrait)
                 and (-webkit-device-pixel-ratio: 2)"
              rel="apple-touch-startup-image">-->
 
        <!-- iOS 6 & 7 iPad (retina, landscape) -->
        <!--<link href="<?php echo get_template_directory_uri(); ?>/img/startup/startup-tablet-landscape-retina.png"
              media="(device-width: 768px) and (device-height: 1024px)
                 and (orientation: landscape)
                 and (-webkit-device-pixel-ratio: 2)"
              rel="apple-touch-startup-image">-->
 
        <!-- iOS 6 iPad (portrait) -->
        <!--<link href="<?php echo get_template_directory_uri(); ?>/img/startup/startup-tablet-portrait.png"
              media="(device-width: 768px) and (device-height: 1024px)
                 and (orientation: portrait)
                 and (-webkit-device-pixel-ratio: 1)"
              rel="apple-touch-startup-image">-->
 
        <!-- iOS 6 iPad (landscape) -->
        <!--<link href="<?php echo get_template_directory_uri(); ?>/img/startup/startup-tablet-landscape.png"
              media="(device-width: 768px) and (device-height: 1024px)
                 and (orientation: landscape)
                 and (-webkit-device-pixel-ratio: 1)"
              rel="apple-touch-startup-image">-->
 
        <!-- iOS 6 & 7 iPhone 5 -->
        <!--<link href="<?php echo get_template_directory_uri(); ?>/img/startup/startup-retina-4in.png"
              media="(device-width: 320px) and (device-height: 568px)
                 and (-webkit-device-pixel-ratio: 2)"
              rel="apple-touch-startup-image">-->
 
        <!-- iOS 6 & 7 iPhone (retina) -->
        <!--<link href="<?php echo get_template_directory_uri(); ?>/img/startup/startup-retina.png"
              media="(device-width: 320px) and (device-height: 480px)
                 and (-webkit-device-pixel-ratio: 2)"
              rel="apple-touch-startup-image">-->
 
        <!-- iOS 6 iPhone -->
        <!--<link href="<?php echo get_template_directory_uri(); ?>/img/startup/startup.png"
              media="(device-width: 320px) and (device-height: 480px)
                 and (-webkit-device-pixel-ratio: 1)"
              rel="apple-touch-startup-image">-->

<?php }

 add_action('wp_head', 'mobile_meta'); 

/* Theme CSS */

function theme_styles() {
    
    wp_enqueue_style( 'scratch-main', get_template_directory_uri() . '/css/master.css' );
  
    global $wp_styles; /* call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way */
  
    wp_register_style( 'scratch-ie', get_template_directory_uri() . '/css/ie.css' );
    $wp_styles->add_data( 'scratch-ie', 'conditional', 'lt IE 9' );
    wp_enqueue_style( 'scratch-ie' );
  
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

/* Theme JavaScript */

function theme_js() {
    
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.2.min.js', array(), false, false );
    
    /*wp_enqueue_script( 'helper', get_template_directory_uri() . '/js/helper.js', array('jquery'), false, true );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array(), false, true );*/
  
    /* FOR DEVELOPMENT */
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/concat/main.js', array('jquery'), false, true );
  
    /* FOR PRODUCTION */
    /*wp_enqueue_script( 'main', get_template_directory_uri() . '/js/compiled/main.min.js', array('jquery'), false, true );*/
    
}

add_action( 'wp_enqueue_scripts', 'theme_js' );

/* Enable ACF Options Page */

if(function_exists('acf_add_options_page')) { 
 
	acf_add_options_page();
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
 
}

/* Enable Featured Image */

add_theme_support( 'post-thumbnails' ); 

/* Enable Custom Menus */

add_theme_support( 'menus' );

register_nav_menus(
    array(
        'main-nav' => __( 'Main Nav', 'scratch' )   // main nav in header
    )
);

function scratch_main_nav() {
	// display the wp3 menu if available
	wp_nav_menu(array(
		'container' => false,                           // remove nav container
		'container_class' => '',           // class of container (should you choose to use it)
		'menu' => __( 'Main Nav', 'scratch' ),  // nav name
		'menu_class' => 'main-nav',         // adding custom nav class
		'theme_location' => 'main-nav',                 // where it's located in the theme
		'before' => '',                                 // before the menu
		'after' => '',                                  // after the menu
		'link_before' => '',                            // before each link
		'link_after' => '',                             // after each link
		'depth' => 0    // fallback function
	));
} /* end scratch main nav */

function scratch_login_stylesheet() { ?>
    <link rel="stylesheet" id="custom_wp_admin_css"  href="<?php echo get_template_directory_uri() . '/css/login.css'; ?>" type="text/css" media="all" />
<?php }
add_action( 'login_enqueue_scripts', 'scratch_login_stylesheet' );









/* Place custom functions below here. */

/* Don't delete this closing tag. */
?>