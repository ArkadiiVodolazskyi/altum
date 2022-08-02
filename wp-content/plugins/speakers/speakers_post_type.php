<?php

// Register custom post types

function register_post_types() {
	register_post_type( 'speakers',
		[
			'labels' => [
				'name' => __( 'Speakers' ),
				'singular_name' => __( 'Speaker' )
			],
			'has_archive' => true,
			'public' => true,
			'supports' => [
				'title',
				'editor',
				'thumbnail'
			]
		]
	);
	register_post_type( 'sessions',
		[
			'labels' => [
				'name' => __( 'Sessions' ),
				'singular_name' => __( 'Session' )
			],
			'has_archive' => false,
			'public' => true,
			'supports' => [
				'title'
			]
		]
	);
}

// Register custom taxonomies

function register_taxonomies() {
	register_taxonomy( 'positions', [ 'speakers' ],
		[
			'labels' => [
				'name' => __( 'Positions' ),
				'singular_name' => __( 'Position' )
			],
		]
	);
	register_taxonomy( 'countries', [ 'speakers' ],
		[
			'labels' => [
				'name' => __( 'Countries' ),
				'singular_name' => __( 'Country' )
			],
		]
	);
}

add_action( 'init', 'register_post_types' );
add_action( 'init', 'register_taxonomies' );
add_theme_support( 'post-thumbnails', ['speakers'] );

// Get speakers

function get_speakers($term_params = []) {

	$tax_query = [];
	if (count($term_params)) {
		foreach ($term_params as $taxonomy => $terms) {
			if ($terms && $terms !== 'all') {
				$tax_query[] = [
					'taxonomy' => $taxonomy,
					'field' => 'slug',
					'terms' => $terms
				];
			}
		}
	}

  $speakers = get_posts([
		'post_type' => 'speakers',
		'posts_per_page' => -1,
    'order_by' => 'date',
    'order' => 'desc',
		'tax_query' => $tax_query
	]);

	return $speakers;
}

// Filter speakers

function filter_speakers() {
	$term_params = [
		'positions' => $_POST['positions'],
		'countries' => $_POST['countries']
	];
	$speakers = get_speakers($term_params);

	if (count($speakers) > 0) {
		foreach ($speakers as $speaker) {
			load_template(dirname( __FILE__ ) . '/pages/parts/speaker-card.php', false, ['speaker' => $speaker]);
		}
	} else { ?>
		<div class="no_posts">No speakers</div>
	<?php }

	wp_reset_postdata();
	die();
}
add_action('wp_ajax_filter_speakers', 'filter_speakers');
add_action('wp_ajax_nopriv_filter_speakers', 'filter_speakers');