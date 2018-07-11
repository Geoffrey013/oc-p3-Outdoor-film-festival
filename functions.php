<?php

/*******************************************
******  Chargement des scripts *************
*******************************************/
define('GCFEST_VERSION', '1.0.0');

// chargement dans le front-end
function gcfest_scripts() {

// chargement des styles
	wp_enqueue_style( 'gcfest_bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css', array(), GCFEST_VERSION, 'all' );
 	wp_enqueue_style( 'gcfest_custom', get_template_directory_uri() . '/css/styles.css', array(), GCFEST_VERSION, 'all' );

// chargement des scripts
 	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), GCFEST_VERSION, 'true' );
	wp_enqueue_script( 'gcfest_admin_script', get_template_directory_uri() . '/js/festival.js', array('jquery', 'bootstrap-js'), GCFEST_VERSION, 'true' );
	
} // fin de la fonction gcfest-scripts


add_action('wp_enqueue_scripts', 'gcfest_scripts');


/*******************************************
*******  Utilitaires ***********************
*******************************************/
//récupération du chemin de l'image
function get_image_theme_path($imageName) {
  return get_template_directory_uri() . '/img/' . $imageName;
}

/*limitation du nombre de posts "presse" sur la page d'accueil
function wpdocs_five_posts_on_homepage( $query ) {
    if ( $query->is_home() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 3 );
    }
}
add_action( 'pre_get_posts', 'wpdocs_five_posts_on_homepage' );
*/

// limitation de l'excerpt
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



function gcfest_setup() {

	//fonction "image à la une"
	add_theme_support( 'post-thumbnails' );

	//Register Custom Navigation Walker
	require_once('includes/wp-bootstrap-navwalker.php');

	//active la gestion des menus
	register_nav_menus( array( 'primary' => 'principal', 'secondary' => 'deuxième') );
}

add_action('after_setup_theme', 'gcfest_setup');

