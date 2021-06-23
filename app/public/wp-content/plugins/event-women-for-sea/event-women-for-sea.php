<?php
/**
 * Plugin Name: Event Woment for sea 
 * Description: description de mon plugin
 * Version: 1.0
 * Author: ECV digital
 */

 /**
 * Set a transient used for redirection upon activation.
 *
 * @since 1.4.0
 */
function cptui_activation_redirect() {
	// Bail if activating from network, or bulk.
	if ( is_network_admin() ) {
		return;
	}

	// Add the transient to redirect.
	set_transient( 'cptui_activation_redirect', true, 30 );
}
add_action( 'activate_' . plugin_basename( __FILE__ ), 'cptui_activation_redirect' );

/**
 * Redirect user to CPTUI about page upon plugin activation.
 *
 * @since 1.4.0
 */
function cptui_make_activation_redirect() {

	if ( ! get_transient( 'cptui_activation_redirect' ) ) {
		return;
	}

	delete_transient( 'cptui_activation_redirect' );

	// Bail if activating from network, or bulk.
	if ( is_network_admin() ) {
		return;
	}

	if ( ! cptui_is_new_install() ) {
		return;
	}

	// Redirect to CPTUI about page.
	wp_safe_redirect(
		add_query_arg(
			[ 'page' => 'cptui_main_menu' ],
			cptui_admin_url( 'admin.php?page=cptui_main_menu' )
		)
	);
}
add_action( 'admin_init', 'cptui_make_activation_redirect', 1 );

/**
 * Flush our rewrite rules on deactivation.
 *
 * @since 0.8.0
 *
 * @internal
 */
function cptui_deactivation() {
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'cptui_deactivation' );

/**
 * Register our text domain.
 *
 * @since 0.8.0
 *
 * @internal
 */
function cptui_load_textdomain() {
	load_plugin_textdomain( 'custom-post-type-ui' );
}
add_action( 'plugins_loaded', 'cptui_load_textdomain' );


function livepost_scripts() {
    wp_enqueue_style( 'style-name', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' );
    wp_enqueue_style('wfs_style', '/wp-content/plugins/wfs/wfs.css');
    wp_enqueue_script( 'script-name', 'https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js' );
}
add_action( 'wp_enqueue_scripts', 'wfs_scripts' );



 // Our custom post type function
function event_create_posttype() {
 
    register_post_type( 'event',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Événement' ),
                'singular_name' => __( 'Événement' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'event'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'event_create_posttype' );




function weboost_theme_support(){
    add_theme_support( 'title-tag' );
}

do_action( 'after_setup_theme', 'weboost_theme_support' );

