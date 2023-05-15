<?php

/*
Plugin Name:  Galerie Videos Vimeo
Plugin URI:   https://codigoaccesibleconleo.com
Description:  Plugin pour créer une galerie de vidéos vimeo
Version:      1.0
Author:       Leonel Lopez
Author URI:   https://codigoaccesibleconleo.com
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  render2web.com

*/


//Si se accede directamente se sale
if (!defined('ABSPATH')) {
	exit;
}


//Cargar scripts
require_once(plugin_dir_path(__FILE__) . '/includes/galerie-videos-vimeo-scripts.php');

//Cargar shortcodes
require_once(plugin_dir_path(__FILE__) . 'includes/galerie-videos-vimeo-shortcodes.php');

if (is_admin()) {
	//Cargar shortcodes
	require_once(plugin_dir_path(__FILE__) . 'includes/galerie-videos-vimeo-fpp.php');


	//Cargar shortcodes
	require_once(plugin_dir_path(__FILE__) . 'includes/galerie-videos-vimeo-champs.php');
}
