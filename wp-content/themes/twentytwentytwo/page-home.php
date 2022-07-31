<?php
	/* Template Name: Home */
	get_header();
?>

<section class="banner">
	<div class="wrapper">
		<img class="desktop" src="<?= IMG_DIR; ?>/banner.png" alt="city, bridge">
		<img class="mobile" src="<?= IMG_DIR; ?>/banner_mobile.png" alt="city, bridge">
		<div class="info">
			<span class="upcoming_event">Annual Congress 2021 <b class="accent">10-11 Juni</b></span>
			<h1 class="title">Pediatric Integrative Medicine</h1>
			<p class="moto">Building bridges between conventional and complementary medicine</p>
			<button class="button dark" data-action="register">Register</button>
		</div>
	</div>
</section>

<section class="address_of_welcome">
	<div class="wrapper">
		<div class="image_wrapper">
			<img class="desktop" src="<?= IMG_DIR; ?>/address_of_welcome.png" alt="doctor, mother and daughter">
			<img class="mobile" src="<?= IMG_DIR; ?>/address_of_welcome_mobile.png" alt="doctor, mother and daughter">
		</div>
		<div class="info">
			<h3 class="title">Address of <b class="accent">Welcome</b></h3>
			<div class="text">
				<p>On behalf of pédiatrie suisse, the Swiss Society of Paediatrics (SSP), and the Swiss Academy for Psychosomatic and Psychosocial Medicine (SAPPM), we kindly welcome you to the virtual annual conference on June 10-11, 2021. Special circumstances require special measures – and so we are pleased that, due to the ongoing COVID-19 pandemic, we can now hold the congress carefully prepared for June 2020 at least as a virtual meeting.</p>
			</div>
			<a class="outer_link" href="#">
				<svg width="36" height="36">
					<use xlink:href="<?= IMG_DIR; ?>/icons.svg#arrow_outer"></use>
				</svg>
				<span>Learn more</span>
			</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>