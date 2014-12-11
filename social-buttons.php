<?php
/*
 * Plugin Name: Social Buttons
 * Author: Dan Bernardic
 * Author URI: http://bernardic.ca
 * License: GPL2
 */
require dirname( __FILE__ ) . '/details.php';




add_social_buttons_to_header__dbsb(
	$social_networks__dbsb = array(
		'YouTube' => 'https://www.youtube.com/user/nittyscottMC',
		'Twitter' => 'https://twitter.com/bernardic',
		'LinkedIn' => 'https://ca.linkedin.com/in/danbernardic',
		'Instagram' => 'http://instagram.com/user',
		'Facebook' => 'https://www.facebook.com/dan.bernardic',
	),
	$name_of_hook_that_prints_out_html_into_header__dbsb = 'mysite_header'
);
