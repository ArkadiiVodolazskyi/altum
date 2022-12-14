<?php
	$speaker = $args['speaker'];
	if (!$speaker) { return; }

	$speaker_countries = get_the_terms($speaker, 'countries');
	if ($speaker_countries) {
		$speaker_countries_list = array_reduce($speaker_countries, function($string, $country) {
			$string .= '<span class="country">' . $country->name . '</span>';
			return $string;
		});
	}

	$speaker_positions = get_the_terms($speaker, 'positions');
	if ($speaker_positions) {
		$speaker_positions_list = array_reduce($speaker_positions, function($string, $position) {
			$string .= '<span class="position">' . $position->name . '</span>';
			return $string;
		});
	}
?>

<a
	class="card speaker"
	href="<?= get_permalink( $speaker ); ?>"
>
	<div class="tumbnail_wrapper">
		<img
			class="thumbnail"
			src="<?= get_the_post_thumbnail_url($speaker); ?>"
			alt="<?= $speaker->post_title; ?>"
		>
	</div>
	<div class="info">
		<h4 class="name">
			<?= $speaker->post_title; ?>
		</h4>

		<div class="countries">
			<?= $speaker_countries_list; ?>
		</div>

		<div class="positions">
			<?= $speaker_positions_list; ?>
		</div>
	</div>
</a>