<?php 
    /*
    Plugin Name: Bimbler No Password Reset
    Plugin URI: http://www.bimblers.com
    Description: Plugin to work alongside the New User Approve plugin, preventing the plugin from resetting a user's password.
    Author: Paul Perkins
    Version: 0.1
    Author URI: http://www.bimblers.com
    */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
        die;
} // end if

require_once( plugin_dir_path( __FILE__ ) . 'class-bimbler-no-password-reset.php' );

Bimbler_NoPasswordReset::get_instance();
