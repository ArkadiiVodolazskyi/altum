<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

<header>
	<div class="wrapper">

		<nav>
			<a class="logo" href="#">
				<svg class="interactive" width="98" height="46">
					<use xlink:href="<?= IMG_DIR; ?>/icons.svg#logo_pediatre"></use>
				</svg>
			</a>

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

		<div class="right">
			<button class="button light" data-action="register">Register</button>

			<div class="language_switcher">
				<div class="current">
					<span>EN</span>
					<svg width="10" height="7">
						<use xlink:href="<?= IMG_DIR; ?>/icons.svg#arrow_down"></use>
					</svg>
				</div>
				<ul class="other">
					<li><a href="#">UA</a></li>
					<li><a href="#">RU</a></li>
				</ul>
			</div>

			<button class="hamburger" data-event="open_mobile_menu">
				<svg class="interactive" width="30" height="22">
					<use xlink:href="<?= IMG_DIR; ?>/icons.svg#hamburger"></use>
				</svg>
			</button>
		</div>

	</div>
</header>