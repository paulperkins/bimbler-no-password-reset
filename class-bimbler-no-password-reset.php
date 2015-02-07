<?php
/**
 * Bimbler No Password Reset
 *
 * @package   Bimbler_NoPasswordReset
 * @author    Paul Perkins <paul@paulperkins.net>
 * @license   GPL-2.0+
 * @link      http://www.paulperkins.net
 * @copyright 2014 Paul Perkins
 */

/**
 * Include dependencies necessary... (none at present)
 *
 */

/**
 * Bimbler No Password Reset
 *
 * @package Bimbler_NoPasswordReset
 * @author  Paul Perkins <paul@paulperkins.net>
 */
class Bimbler_NoPasswordReset {

        /*--------------------------------------------*
         * Constructor
         *--------------------------------------------*/

        /**
         * Instance of this class.
         *
         * @since    1.0.0
         *
         * @var      object
         */
        protected static $instance = null;

        /**
         * Return an instance of this class.
         *
         * @since     1.0.0
         *
         * @return    object    A single instance of this class.
         */
        public static function get_instance() {

                // If the single instance hasn't been set, set it now.
                if ( null == self::$instance ) {
                        self::$instance = new self;
                } // end if

                return self::$instance;

        } // end get_instance

        /**
         * Initializes the plugin by setting localization, admin styles, and content filters.
         */
        private function __construct() {

			add_filter ( 'new_user_approve_do_password_reset', array ($this, 'prevent_password_reset'));
        	         	
		} // End constructor.
	
	/*
	 * Prevent password from being reset.
	 *
	 */
	function prevent_password_reset () {
		
		error_log ('bimbler-no-password-reset: preventing password reset for newly approved user.');
		
		// Return false to stop password reset.
		return false;
	}
	
		
} // End class
