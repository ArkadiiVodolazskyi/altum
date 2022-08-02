<?php

/*
* Plugin Name: Speakers
* Description: Adding functionality to  the site. CPT Speakers, taxonomies Positions/Country, filtering.
* Author: Arkadii Vodolazskyi
* Version: 1.0
*/

// Functionality

include_once __DIR__ . '/speakers_post_type.php';

// Assets

function speakers_styles() {
	wp_register_style( 'speakers_styles', plugins_url( 'assets/css/speakers.css', __FILE__ ), rand(1,9999) );
	wp_enqueue_style( 'speakers_styles', 9999999 );
}

function speakers_styles_admin() {
	wp_register_style( 'speakers_styles', plugins_url( 'assets/css/speakers_admin.css', __FILE__ ), rand(1,9999) );
	wp_enqueue_style( 'speakers_styles', 9999999 );
}

function speakers_scripts() {
	wp_register_script( 'speakers', plugins_url( 'assets/js/speakers.js', __FILE__ ), [], date('h:i:s'), true );
	wp_enqueue_script( 'speakers' );
}

add_action( 'wp_enqueue_scripts', 'speakers_styles' );
add_action( 'wp_enqueue_scripts', 'speakers_scripts' );
add_action( 'admin_enqueue_scripts', 'speakers_styles_admin' );

// Template pages

function speakers_templates( $template ) {
	if ( get_post_type() === 'speakers' ) {
		if (is_single()) {
			$template = __DIR__ . '/pages/single-speakers.php';
		} else if (is_archive()) {
			$template = __DIR__ . '/pages/archive-speakers.php';
		}
	}
	return $template;
}
add_filter( 'template_include', 'speakers_templates' );

// Settings

function speakers_settings_menu() {
	$page_title = 'Speakers Settings';
	$menu_title = 'Speakers Settings';
	$capability = 'manage_options';
	$menu_slug  = 'speakers-settings-page';
	$function   = 'speakers_settings_page';
	$icon_url   = 'dashicons-media-code';
	$position   = 1000;
	add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );

	add_action( 'admin_init', 'update_are_speakers_filters' );
}
add_action( 'admin_menu', 'speakers_settings_menu' );

function speakers_settings_page() {
	?>
		<section class="speakers_settings">
			<h1>Speakers Settings</h1>
			<form method="post" action="options.php">
				<?php settings_fields( 'are_speakers_filters_settings' ); ?>
				<?php do_settings_sections( 'are_speakers_filters_settings' ); ?>
					<label for="are_speakers_filters">
						<input
							type="checkbox"
							name="are_speakers_filters"
							id="are_speakers_filters"
							<?= get_option( 'are_speakers_filters' ) === 'on' ? 'checked' : ''; ?>
						>
						<span>Show filters on Speakers page</span>
					</label>
				<?php submit_button(); ?>
			</form>
		</section>
	<?php
}

function update_are_speakers_filters() {
  register_setting( 'are_speakers_filters_settings', 'are_speakers_filters' );
}