<?php
/**
 * Plugin Name: Name Of The Plugin
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: 1.0
 * Author: Troobles
 * Author URI: http://troobles.com
 * Text Domain: plugin_prefix
 * Domain Path: /languages/
 * Network: false
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
/**
 * MODE: Select Development or Live Mode
 * Description: All ZotCore Modules will contain the same structure for ASSETS this includes JS/CSS/IMAGES 
 *              This also assumes that the plugin assets directory structure reflects the same structure 
 *              on the root directory of the site.
 * Required: In order for this to be of any use the CONSTANT 'ZC_SITE_MODULE_ASSETS' must be defined in wp-config.php
 * @val: bool TRUE (default) means that the Assets will be sourced from plugin directory
 *       bool FALSE means that the Assets will be sourced from ROOT "ASSETS" Directory
 */
if ( ! defined( 'PLUGIN_PREFIX_DEV_MODE' ) ) {
	define('PLUGIN_PREFIX_DEV_MODE', true);	
}
/**
 * CONSTANTS: Define PATH and URI CONSTANTS
 * Description: Checks the Plugin Defined Constants used.  
 *              Additionally, Changes the ASSETS Directory Contstant definition depending on MODE.
 *              To Enable, do a find replace on PLUGIN_PREFIX.
 */


//PATHS
if ( ! defined( 'PLUGIN_PREFIX_DIR_PATH' ) ) {
	define( 'PLUGIN_PREFIX_DIR_PATH' , plugin_dir_path(__FILE__) );	
}

// SETTINGS: Contains the Plugin Options and Configurations
if ( ! defined( 'PLUGIN_PREFIX_SETTINGS_DIR' ) ) {
	define( 'PLUGIN_PREFIX_SETTINGS_DIR' , PLUGIN_PREFIX_DIR_PATH.'settings/' );	
}

// LIB: The Core directory All the Utility Classes, Widgets, and Other Functionality that drives the Plugin's Features
if ( ! defined( 'PLUGIN_PREFIX_LIB_DIR' ) ) {
	define( 'PLUGIN_PREFIX_LIB_DIR' , PLUGIN_PREFIX_DIR_PATH.'lib/' );	
}

// LIB > FUNCTIONS: Contains the specific Helper Functions used in the Plugin (Does not include "View/Template Tag" Functions)
if ( ! defined( 'PLUGIN_PREFIX_FUNCTIONS_DIR' ) ) {
	define( 'PLUGIN_PREFIX_FUNCTIONS_DIR' , PLUGIN_PREFIX_LIB_DIR.'functions/' );	
}

// VIEWS: Contains Site Templates, Template Tags, and other "Displays" Related to the Plugin
if ( ! defined( 'PLUGIN_PREFIX_VIEWS_DIR' ) ) {
	define( 'PLUGIN_PREFIX_VIEWS_DIR' , PLUGIN_PREFIX_DIR_PATH.'views/' );	
}


// URI's
if ( ! defined( 'PLUGIN_PREFIX_DIR_URI' ) ) {
	define( 'PLUGIN_PREFIX_DIR_URI' , plugin_dir_url(__FILE__) );	
}

if ( defined( 'ZC_SITE_MODULE_ASSETS' ) ) {

	if ( true === PLUGIN_PREFIX_DEV_MODE ) {
		define( 'PLUGIN_PREFIX_ASSETS_URI' , PLUGIN_PREFIX_DIR_URI.'assets/' );	
	}else{
		define( 'PLUGIN_PREFIX_ASSETS_URI' , ZC_SITE_MODULE_ASSETS.'PLUGIN_PREFIX/' );	
	}
	
} else {
	if ( ! defined( 'PLUGIN_PREFIX_ASSETS_URI' ) ) {
		define( 'PLUGIN_PREFIX_ASSETS_URI' , PLUGIN_PREFIX_DIR_URI.'assets/' );	
	}
}

/*
* REQUIRES: Load all Required Files
*
*/
//Loads All Required Files
require_once('loader.php');
//Initiates the Main Plugin Class
require_once('plugin.php');
//Sets up the Plugin Options and Settings
require_once('settings.php');

?>