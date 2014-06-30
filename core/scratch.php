<?php

function hide_admin_bar_from_front_end() {
  if (is_blog_admin()) {
    return true;
  }
  return false;
}

add_filter( 'show_admin_bar', 'hide_admin_bar_from_front_end' );









add_action('init', 'bones_head_cleanup');

/*********************
WP_HEAD GOODNESS
The default wordpress head is
a mess. Let's clean it up by
removing all the junk we don't
need.
*********************/

function bones_head_cleanup() {
  // category feeds
  // remove_action( 'wp_head', 'feed_links_extra', 3 );
  // post and comment feeds
  // remove_action( 'wp_head', 'feed_links', 2 );
  // EditURI link
  remove_action( 'wp_head', 'rsd_link' );
  // windows live writer
  remove_action( 'wp_head', 'wlwmanifest_link' );
  // index link
  remove_action( 'wp_head', 'index_rel_link' );
  // previous link
  remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
  // start link
  remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
  // links for adjacent posts
  remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
  // WP version
  remove_action( 'wp_head', 'wp_generator' );
  // remove WP version from css
  add_filter( 'style_loader_src', 'bones_remove_wp_ver_css_js', 9999 );
  // remove Wp version from scripts
  add_filter( 'script_loader_src', 'bones_remove_wp_ver_css_js', 9999 );

} /* end bones head cleanup */

// remove WP version from scripts
function bones_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}









/*
 * LAYOUT FUNCTIONS
 * Feel free to create your own layout functions, or write your own calls to these
 * in your template files.
 */

function two_columns($count) {
    $string = "sixcol";
    if($count % 2 == 0) {
        $string .= " last";
    } else {
        $string .= " first";
    }
    return $string;
}









function two_columns_12($count) {
    if($count % 2 == 0) {
        $string = "eightcol last";
    } else {
        $string = "fourcol first";
    }
    return $string;
}









function two_columns_21($count) {
    if($count % 2 == 0) {
        $string = "fourcol last";
    } else {
        $string = "eightcol first";
    }
    return $string;
}









function three_columns($count) {
    $string = "fourcol";
    if($count % 3 == 0) {
        $string .= " last";
    } elseif(($count - 1) % 3 == 0) {
        $string .= " first";
    }
    return $string;
}









function three_columns_112($count) {
    $string = "threecol";
    if($count % 3 == 0) {
        $string = "sixcol last";
    } elseif(($count - 1) % 3 == 0) {
        $string .= " first";
    }
    return $string;
}









function three_columns_121($count) {
    $string = "sixcol";
    if($count % 3 == 0) {
        $string = "threecol last";
    } elseif(($count - 1) % 3 == 0) {
        $string = "threecol first";
    }
    return $string;
}









function three_columns_211($count) {
    $string = "threecol";
    if($count % 3 == 0) {
        $string .= " last";
    } elseif(($count - 1) % 3 == 0) {
        $string = "sixcol first";
    }
    return $string;
}









function four_columns($count) {
    $string = "threecol";
    if($count % 4 == 0) {
        $string .= " last";
    } elseif(($count - 1) % 4 == 0) {
        $string .= " first";
    }
    return $string;
}









function five_columns($count) {
    $string = "twoptfourcol";
    if($count % 5 == 0) {
        $string .= " last";
    } elseif(($count - 1) % 5 == 0) {
        $string .= " first";
    }
    return $string;
}









function six_columns($count) {
    $string = "twocol";
    if($count % 6 == 0) {
        $string .= " last";
    } elseif(($count - 1) % 6 == 0) {
        $string .= " first";
    }
    return $string;
}









function custom_columns($count) {
  
    $string = "custom-col";
  
    if($count % 2 == 0) {
        $string .= " even";
    } else {
        $string .= " odd";
    }
  
    if($count % 3 == 0) {
        $string .= " three-last";
    } elseif(($count - 1) % 3 == 0) {
        $string .= " three-first";
    }
  
    if($count % 4 == 0) {
        $string .= " four-last";
    } elseif(($count - 1) % 4 == 0) {
        $string .= " four-first";
    }
  
    return $string;
  
}









function two_columns_flex($blocks, $count) {
    $block_count = count($blocks);
    if($block_count % 2 == 0) {
        return two_columns($count);
    } elseif(($block_count - 1) % 2 == 0) {
        if($count == $block_count) {
            return "twelvecol first";
        } else {
            return two_columns($count);
        }
    } else {
        return "error";
    }
}









function three_columns_flex($blocks, $count) {
    $block_count = count($blocks);
    if($block_count % 3 == 0) {
        return three_columns($count);
    } elseif(($block_count + 1) % 3 == 0) {
        if($count == $block_count || $count == ($block_count - 1)) {
            if(($count - 1) % 3 == 0) {
                return "sixcol first";
            } else {
                return "sixcol last";
            }
        } else {
            return three_columns($count);
        }
    } elseif(($block_count - 1) % 3 == 0) {
        if($count == $block_count) {
            return "twelvecol first";
        } else {
            return three_columns($count);
        }
    } else {
        return "error";
    }
}









/**
 * Include the TGM_Plugin_Activation class.
 */
require_once dirname( __FILE__ ) . '/php/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
/**
 * Register the required plugins for this theme.
 *
 * In this example, we register two plugins - one included with the TGMPA library
 * and one from the .org repo.
 *
 * The variable passed to tgmpa_register_plugins() should be an array of plugin
 * arrays.
 *
 * This function is hooked into tgmpa_init, which is fired within the
 * TGM_Plugin_Activation class constructor.
 */
function my_theme_register_required_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		// This is an example of how to include a plugin from the WordPress Plugin Repository
        array(
			'name' 		=> 'Advanced Custom Fields',
			'slug' 		=> 'advanced-custom-fields',
			'required' 	=> false,
		),
        array(
			'name' 		=> 'CloudFlare',
			'slug' 		=> 'cloudflare',
			'required' 	=> false,
		),
        array(
			'name' 		=> 'Custom Post Type UI',
			'slug' 		=> 'custom-post-type-ui',
			'required' 	=> false,
		),
        array(
			'name' 		=> 'Relevanssi - A Better Search',
			'slug' 		=> 'relevanssi',
			'required' 	=> false,
		),
        array(
			'name' 		=> 'WordPress Backup to Dropbox',
			'slug' 		=> 'wordpress-backup-to-dropbox',
			'required' 	=> false,
		)

	);

	// Change this to your theme text domain, used for internationalising strings
	$theme_text_domain = 'tgmpa';

	/**
	 * Array of configuration settings. Amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * leave the strings uncommented.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
		'domain'       		=> $theme_text_domain,         	// Text domain - likely want to be the same as your theme.
		'default_path' 		=> '',                         	// Default absolute path to pre-packaged plugins
		'parent_menu_slug' 	=> 'themes.php', 				// Default parent menu slug
		'parent_url_slug' 	=> 'themes.php', 				// Default parent URL slug
		'menu'         		=> 'install-required-plugins', 	// Menu slug
		'has_notices'      	=> true,                       	// Show admin notices or not
		'is_automatic'    	=> false,					   	// Automatically activate plugins after installation or not
		'message' 			=> '',							// Message to output right before the plugins table
		'strings'      		=> array(
			'page_title'                       			=> __( 'Install Required Plugins', $theme_text_domain ),
			'menu_title'                       			=> __( 'Install Plugins', $theme_text_domain ),
			'installing'                       			=> __( 'Installing Plugin: %s', $theme_text_domain ), // %1$s = plugin name
			'oops'                             			=> __( 'Something went wrong with the plugin API.', $theme_text_domain ),
			'notice_can_install_required'     			=> _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_install_recommended'			=> _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_install'  					=> _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s)
			'notice_can_activate_required'    			=> _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_can_activate_recommended'			=> _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_activate' 					=> _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s)
			'notice_ask_to_update' 						=> _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s)
			'notice_cannot_update' 						=> _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s)
			'install_link' 					  			=> _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),
			'activate_link' 				  			=> _n_noop( 'Activate installed plugin', 'Activate installed plugins' ),
			'return'                           			=> __( 'Return to Required Plugins Installer', $theme_text_domain ),
			'plugin_activated'                 			=> __( 'Plugin activated successfully.', $theme_text_domain ),
			'complete' 									=> __( 'All plugins installed and activated successfully. %s', $theme_text_domain ), // %1$s = dashboard link
			'nag_type'									=> 'updated' // Determines admin notice type - can only be 'updated' or 'error'
		)
	);

	tgmpa( $plugins, $config );

}

?>