<?php
	/* Template Name: Home */
	get_header();
?>

<?php
	$banner_section = get_field('banner_section');
	if ($banner_section['display_section']) {
?>
	<section class="banner">
		<div class="wrapper">

			<img
				class="desktop"
				src="<?= $banner_section['image_desktop']['url']; ?>"
				alt="<?= $banner_section['image_desktop']['alt']; ?>"
			>
			<img
				class="mobile"
				src="<?= $banner_section['image_mobile']['url']; ?>"
				alt="<?= $banner_section['image_mobile']['alt']; ?>"
			>

			<div class="info">

				<?php if ($banner_section['text_before_title']) { ?>
					<span class="upcoming_event">
						<?= $banner_section['text_before_title']; ?>
					</span>
				<?php } ?>

				<?php if ($banner_section['title']) { ?>
					<h1 class="title">
						<?= $banner_section['title']; ?>
					</h1>
				<?php } ?>

				<?php if ($banner_section['moto']) { ?>
					<p class="moto">
						<?= $banner_section['moto']; ?>
					</p>
				<?php } ?>

				<?php if ($banner_section['button_text']) { ?>
					<button
						class="button dark"
						data-action="register"
					>
							<?= $banner_section['button_text']; ?>
					</button>
				<?php } ?>

			</div>
		</div>
	</section>
<?php } ?>

<?php
	$welcome_section = get_field('address_of_welcome_section');
	if ($welcome_section['display_section']) {
?>
	<section class="address_of_welcome">
		<div class="wrapper">
			<div class="image_wrapper">
				<img
					class="desktop"
					src="<?= $welcome_section['image_desktop']['url']; ?>"
					alt="<?= $welcome_section['image_desktop']['alt']; ?>"
				>
				<img
					class="mobile"
					src="<?= $welcome_section['image_mobile']['url']; ?>"
					alt="<?= $welcome_section['image_mobile']['alt']; ?>"
				>
			</div>
			<div class="info">

				<?php if ($welcome_section['title']) { ?>
					<h3 class="title">
						<?= $welcome_section['title']; ?>
					</h3>
				<?php } ?>

				<?php if ($welcome_section['info_text']) { ?>
					<div class="text">
						<?= $welcome_section['info_text']; ?>
					</div>
				<?php } ?>

				<?php if ($welcome_section['outer_link']['url']) { ?>
					<a class="outer_link" href="<?= $welcome_section['outer_link']['url']; ?>">
						<svg width="36" height="36">
							<use xlink:href="<?= IMG_DIR; ?>/icons.svg#arrow_outer"></use>
						</svg>
						<span>
							<?= $welcome_section['outer_link']['title']; ?>
						</span>
					</a>
				<?php } ?>

			</div>
		</div>
	</section>
<?php } ?>

<?php get_footer(); ?>