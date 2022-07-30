<?php
	/* Template Name: Speakers */
	get_header();
	$speakers = get_speakers();
	$are_speakers_filters = get_option( 'are_speakers_filters' );
?>

<section class="archive speakers">
	<div class="wrapper">
		<?php if (count($speakers) > 0) { ?>

			<?php if ($are_speakers_filters === 'on') { ?>
				<?php get_template_part('parts/speaker-filters'); ?>
			<?php } ?>

			<div class="cards">
				<?php foreach ($speakers as $speaker) {
					get_template_part('parts/speaker-card', null, ['speaker' => $speaker]);
				} ?>
			</div>

		<?php } else { ?>
			<div class="no_posts">No speakers</div>
		<?php } ?>
	</div>
</section>

<?php get_footer(); ?>