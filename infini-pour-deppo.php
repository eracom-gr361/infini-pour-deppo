<?php
/*
Plugin Name: Infini pour Deppo
Plugin URI: https://github.com/eracom-gr361/infini-pour-deppo
Description: charger la fonte Infini, et désactiver la fonte originale du thème Deppo.
Version: 0.1
Author: Manuel Schmalstieg
Author URI: https://ms-studio.net
GitHub Plugin URI: https://github.com/eracom-gr361/infini-pour-deppo
*/
 
function load_infini_font( $query ) {
	
  // 1) Charger le style CSS pour Infini

	wp_enqueue_style( 
		'infini-font', 
		plugin_dir_url( __FILE__ ) . 'webfont/infini.css',
		false, // dependencies
		null // version
	); 

  // 2) Desactiver la fonte originale de Deppo

  wp_dequeue_style( 'deppo-font-enqueue' );
        
}
add_action( 'wp_enqueue_scripts', 'load_infini_font', 11 );