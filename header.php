<!DOCTYPE html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="utf-8">
<title><?php wp_title( '|', true, 'right' ); ?><?php echo get_bloginfo( 'name' ); ?></title>
    
<?php wp_head(); ?>
    
<!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
    
<!-- The bottom part resumes the web app where the user left off -->
        
<!--        <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")
    
        if (window.navigator.standalone) {
   				 var setLastUrl = function() {
       				 localStorage['lastUrl'] = window.location;
    			}
   			 if (sessionStorage['init']) {
       			 setLastUrl();
   			 } else {
      			 sessionStorage['init'] = true;
        	if (localStorage['lastUrl']) {
            if (localStorage['lastUrl'] != window.location) {
                document.location.href = localStorage['lastUrl'];
            } else {
                setLastUrl();
            }
       		 } else {
           		 setLastUrl();
       			 }
   			 }
		}

        </script>-->
    
</head>

<body <?php body_class(); ?>>

<header id="header">
  <div class="wrap hpad vpad-half clearfix">
    
    <a class="logo" href="http://scratchtheme.com" title="Scratch Theme for WordPress">
      <img src="<?php echo get_template_directory_uri(); ?>/img/site-logo.svgz">
    </a>
      
    <span class="nav-toggle"><i class="icon ion-navicon"></i></span>
      
    <nav id="nav" role="navigation">
      <?php scratch_main_nav(); ?>
    </nav>
    
  </div>
</header>