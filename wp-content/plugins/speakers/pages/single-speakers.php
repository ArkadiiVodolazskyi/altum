<?php
	get_header();
	$speaker = get_post();
?>

<section class="single speaker">
	<div class="wrapper">

		<a class="all_speakers" href="<?= get_site_url(); ?>/speakers">
			<svg width="31" height="8">
				<use xlink:href="<?= IMG_DIR; ?>/icons.svg#arrow_left"></use>
			</svg>
			<span>All speakers</span>
		</a>

		<h3 class="title">
			<?= $speaker->post_title; ?>
		</h3>

		<div class="image_wrapper">
			<img src="<?= get_the_post_thumbnail_url($speaker); ?>" alt="<?= $speaker->post_title; ?>">
		</div>

		<div class="info">
			<?= $speaker->post_content; ?>
		</div>

		<?php
			$sessions = get_field('sessions');
			if (count($sessions) > 0) {
		?>
			<div class="sessions">
				<h4>Sessions</h4>
				<ul>
					<?php
						foreach ($sessions as $session) {
					?>
						<li><a href="<?= $session->guid; ?>">
							<?= $session->post_title; ?>
						</a></li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>

	</div>
</section>

<?php
	get_footer();
?>