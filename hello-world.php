<?php
/**
 * An example plugin for a membership course walking readers through how to work with GitHub.
 *
 * @link              https://github.com/concevoir-anshul/testplugin
 * @since             1.0.0
 * @package           HelloWorld
 *
 * @wordpress-plugin
 * Plugin Name:       My WordPress Hello World
 * Plugin URI:        https://github.com/concevoir-anshul/testplugin
 * Description:       A sample plugin just for Testing purpose.
 * Version:           1.0.0
 * Author:            Anshul Mahajan
 * Author URI:        https://concevoirwebservices.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter( 'login_message', 'wphw_login_message' );
/**
 * Adds 'Hello World' above the login form in the WordPress login form.
 *
 * @param    string $message    The default message to display above the form.
 * @return   string $message    The message to display above the form.
 */
function wphw_login_message( $message ) {

	$message = '<h2>';
		$message .= 'Hello World!';
	$message .= '</h2>';

	return $message ;

}
