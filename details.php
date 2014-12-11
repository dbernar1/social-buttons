<?php
function add_social_buttons_to_header__dbsb( $social_networks, $name_of_hook_that_prints_out_html_into_header ) {
	$function_that_prints_out_social_buttons = function() use ( $social_networks ) {
		the_social_buttons__dbsb( $social_networks );
	};

	add_action(
		$name_of_hook_that_prints_out_html_into_header,
		$function_that_prints_out_social_buttons
	);

}

function the_social_buttons__dbsb( $social_networks ) {
	the_html_for_social_buttons__dbsb( $social_networks );
	the_css_for_social_buttons__dbsb();
}

function the_html_for_social_buttons__dbsb( $social_networks ) {
?>
<ul id="social-buttons">
	<?php foreach ( $social_networks as $network_name => $pointing_to_url ): ?>
	<li><?php the_link_for__dbsb( $network_name, $pointing_to_$url ) ?></li>
	<?php endforeach ?>
</ul>
<?php
}

function the_link_for__dbsb( $network_name, $pointing_to_url ) { ?>
	<a
		target="_blank"
		href="<?php echo $url ?>"
	>
		<img
			src="<?php echo plugins_url( 'icons/' . icon_for__dbsb( $network_name ), __FILE__ ) ?>"
			alt="<?php echo $network_name ?>"
		/>
	</a>
<?php
}

function icon_for__dbsb( $social_network ) {
	$icon_for = array(
		'YouTube' => 'youtube.jpg',
		'Twitter' => 'twitter.jpg',
		'LinkedIn' => 'linkedin.jpg',
		'Instagram' => 'instagram.jpg',
		'Facebook' => 'facebook.jpg',
	);

	return $icon_for[ $social_network ];
}

function print_css_for_social_buttons__dbsb() {
?>
<style>
/* reset styles for social-buttons, from http://meyerweb.com/eric/tools/css/reset/ */
#social-buttons, #social-buttons * {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
	list-style: none;
}
/* end of reset */

#social-buttons {
	position: absolute;
	right: 0px;
	top: 42px;
	z-index: 2000;
}

#social-buttons li {
	float: left;
	padding-left: 10px;
}

#social-buttons a img {
	width: 27px;
}
</style>
<?php
}
