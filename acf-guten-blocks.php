<?php
/**
 * Plugin Name: ACF Guten Blocks
 * Plugin URI: https://github.com/imranhsayed/acf-blocks
 * Description: This plugin creates Gutenberg blocks using ACF
 * Version: 1.0.0
 * Author: Imran Sayed
 * Author URI: https://codeytek.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: acf-guten-blocks
 * Domain Path: /languages
 *
 * @package ACF Guten Blocks
 */
// Define Constants.
define( 'ACFB_URI', plugins_url( 'rest-api-endpoints' ) );
define( 'ACFB_TEMPLATE_PATH', plugin_dir_path( __FILE__ ) . 'templates/' );
define( 'ACFB_PLUGIN_PATH', __FILE__ );

// File Includes
include_once 'inc/class-acfw-register-block.php';
