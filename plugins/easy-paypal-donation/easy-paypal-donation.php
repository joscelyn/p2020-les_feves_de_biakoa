<?php

/*
Plugin Name: PayPal Donation
Plugin URI: https://wpplugin.org/easy-paypal-donation/
Description: A simple and easy way to accept PayPal donations on your website.
Tags: donation, donate, donations, charity, paypal, paypal donation, ecommerce, gateway, payment, paypal button, paypal donation, paypal donate, paypal payment, paypal plugin
Author: Scott Paterson
Author URI: https://wpplugin.org
License: GPL2
Version: 1.2.3
*/

/*  Copyright 2014-2017 Scott Paterson

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

//// variables
// plugin function 	  = wpedon
// shortcode 		  = wpedon
$plugin_basename = plugin_basename(__FILE__);


//// plugin functions
wpedon_wpeasydonation::init_wpedonwpeasydonation();

class wpedon_wpeasydonation {
	public static function init_wpedonwpeasydonation() {
	register_deactivation_hook( __FILE__, array( __CLASS__, "wpedon_deactivate" ));
	register_uninstall_hook( __FILE__, array( __CLASS__, "wpedon_uninstall" ));

	$wpedon_settingsoptions = array(
		'currency'    		=> '25',
		'language'    		=> '3',
		'liveaccount'    	=> '',
		'sandboxaccount'    => '',
		'mode'    			=> '2',
		'size'    			=> '2',
		'opens'   			=> '2',
		'no_note'    		=> '1',
		'no_shipping'    	=> '1',
		'cancel'    		=> '',
		'return'    		=> '',
		'note'    			=> '1',
		'upload_image'    	=> '',
	);

	add_option("wpedon_settingsoptions", $wpedon_settingsoptions);
	}
	
	function wpedon_deactivate() {
		delete_option("wpedon_notice_shown");
	}

	function wpedon_uninstall() {
	}
}

//// plugin includes

// private settings page
include_once ('includes/private_functions.php');

// private button inserter
include_once ('includes/private_button_inserter.php');

// private orders page
include_once ('includes/private_orders.php');

// private buttons page
include_once ('includes/private_buttons.php');

// private settings page
include_once ('includes/private_settings.php');

// public shortcode
include_once ('includes/public_shortcode.php');

// private filters
include_once ('includes/private_filters.php');

// private widget
include_once ('includes/private_widget.php');

// public ipn
include_once ('includes/public_ipn.php');

?>