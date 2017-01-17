<?php
/*
Plugin Name: Automatische WordPress Updates
Plugin URI: https://speedword.press
Description: Das Plugin muss sich im Ordner wp-content/mu-plugins/ befinden. Ebenfalls muss in der wp-config autoupdaten aktiviert sein.
Author: Daniel Bieli
Author URI: https://speedword.press
License: GPL2
*/

//** Plugin Update */

add_filter( 'auto_update_plugin', '__return_true' );

//** Theme Auto Update */
 
add_filter( 'auto_update_theme', '__return_true' );