<?php
/**
 * OceanWP Child Theme Functions
 *
 * When running a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions will be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update the theme).
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet.
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}

add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

function afficher_lien_admin() {
    
        // Utilisateur connecté, afficher le lien "admin"
        echo '<li><a href="'.admin_url().'">Admin</a></li>';
    
}

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args){
	$items = '<li><a title="Nous rencontrer" href="'. esc_url( get_page_link(18) ) .'">' . __( 'Nous rencontrer' ) . '</a></li>';

	if (is_user_logged_in()) {
    //if( $args->theme_location == 'primary_menu' ){
        $items .= '<li><a title="Admin" href="'. esc_url( admin_url() ) .'">' . __( 'Admin' ) . '</a></li>';
    }
	$items .= '<li><a id="menu-item-24" title="Commander" href="'. esc_url( get_page_link(20) ) .'">' . __( 'Commander' ) . '</a></li>';

    return $items;
}

// // SHORTCODES

// add_shortcode('banniere-titre', 'banniere_titre_func');

