<?php
	/* Template Name: Speakers */
	get_header();
	$speakers = get_speakers();
?>

<section class="archive speakers">
	<div class="wrapper">
		<?php if (count($speakers) > 0) { ?>

			<?php get_template_part('parts/speaker-filters'); ?>

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