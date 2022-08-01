<footer>
	<div class="wrapper">
		<a class="logo" href="<?= get_site_url(); ?>">
			<svg class="interactive" width="129" height="60">
				<use xlink:href="<?= IMG_DIR; ?>/icons.svg#logo_pediatre"></use>
			</svg>
		</a>

		<nav>
			<?php
				wp_nav_menu( [
					'theme_location'  => 'main',
					'menu'            => 'Main',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'links',
					'menu_id'         => '',
					'echo'            => true,
					'depth'           => 1,
				]);
			?>
		</nav>

		<a class="outer_link" href="#">
			<svg width="36" height="36">
				<use xlink:href="<?= IMG_DIR; ?>/icons.svg#arrow_outer"></use>
			</svg>
			<span>Register</span>
		</a>

		<div class="bbs">
			<a class="logo_bbs" href="#">
				<svg width="165" height="30">
					<use xlink:href="<?= IMG_DIR; ?>/icons.svg#logo_bbs"></use>
				</svg>
			</a>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>