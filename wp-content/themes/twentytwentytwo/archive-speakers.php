<?php
	get_header();

	$speakers = get_posts([
		'post_type' => 'speakers'
	]);
?>

<section class="archive speakers">
	<div class="wrapper">
		<?php  if (count($speakers) > 0) { ?>

			<?php foreach ($speakers as $speaker) {
				$speaker_countries_arr = get_the_terms($speaker, 'countries');
				$speaker_countries = array_reduce($speaker_countries_arr, function($string, $country) {
					$string .= '<span class="country">' . $country->name . '</span>';
					return $string;
				});
			?>
				<a
					class="card speaker"
					href="<?= get_permalink( $speaker ); ?>"
				>
					<img
						class="thumbnail"
						src="<?= get_the_post_thumbnail_url(); ?>"
						alt="<?= $speaker->post_title; ?>"
					>
					<h4 class="name">
						<?= $speaker->post_title; ?>
					</h4>
					<div class="countries">
						<?= $speaker_countries; ?>
					</div>
				</a>
			<?php } ?>

		<?php } else { ?>
			<div class="no_posts">No speakers</div>
		<?php } ?>
	</div>
</section>

<?php
	get_footer();
?>