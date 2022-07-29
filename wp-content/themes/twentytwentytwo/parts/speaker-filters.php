<?php
	$speaker_countries = get_terms(['taxonomy' => 'countries']);
	$speaker_positions = get_terms(['taxonomy' => 'positions']);
?>

<form class="filters" name="filters" data-form="filters">

	<?php if (count($speaker_countries) > 0) { ?>
		<select data-select="countries" name="countries">

			<option value="" disabled selected>Country</option>
			<option value="all">All</option>
			<?php foreach ($speaker_countries as $country) { ?>
				<option value="<?= $country->slug; ?>">
					<?= $country->name; ?>
				</option>
			<?php } ?>

		</select>
	<?php } ?>

	<?php if (count($speaker_positions) > 0) { ?>
		<select data-select="positions" name="positions">

			<option value="" disabled selected>Position</option>
			<option value="all">All</option>
			<?php foreach ($speaker_positions as $position) { ?>
				<option value="<?= $position->slug; ?>">
					<?= $position->name; ?>
				</option>
			<?php } ?>

		</select>
	<?php } ?>

</form>