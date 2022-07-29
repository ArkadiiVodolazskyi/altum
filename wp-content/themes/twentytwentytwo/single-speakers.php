<?php
	get_header();
	$speaker = get_post();
?>

<section class="single speaker">
	<div class="wrapper">
		<h3 class="title">
			<?= $speaker->post_title; ?>
		</h3>
		<div class="image">
			<img src="<?= get_the_post_thumbnail_url($speaker); ?>" alt="<?= $speaker->post_title; ?>">
		</div>
		<div class="content">
			<?= $speaker->post_content; ?>
		</div>
	</div>
</section>

<?php
	get_footer();
?>