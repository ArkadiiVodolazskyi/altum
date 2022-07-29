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
?>

<a
	class="card speaker"
	href="<?= get_permalink( $speaker ); ?>"
>
	<img
		class="thumbnail"
		src="<?= get_the_post_thumbnail_url($speaker); ?>"
		alt="<?= $speaker->post_title; ?>"
	>
	<h4 class="name">
		<?= $speaker->post_title; ?>
	</h4>

	<div class="countries">
		<?= $speaker_countries_list; ?>
	</div>
</a>