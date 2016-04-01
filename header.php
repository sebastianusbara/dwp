<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>
		<?php 
			if(is_front_page()){
				bloginfo('name');
			} else {
				echo wp_title('DWP - ');
			}
		?>
	</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="<?=dwp_theme_dir?>/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>
<body>
	<?php if(is_front_page()) :?>
		
		<header class="main-header">
			<nav class="main-nav">
				<div class="row">
					<div class="col-md-3">
						<div class="site-logo">
							LPPK - DWP
						</div>
						<button class="nav-btn">
							<span class="fa fa-bars"></span>
						</button>
					</div>
					<div class="col-md-9">
						<?php wp_nav_menu(array('menu' => 'Header Menu', 'menu_class' => 'site-menu', 'container' => '')); ?>
					</div>
				</div>
			</nav>
			<img class="header-bg" src="/dwp/wp-content/themes/dwp/assets/img/dwp.jpg" alt="dharma wanita persatuan">
			<div class="header-overlay"></div>
		</header>

	<?php else : ?>

		<header class="main-header main-header--70">
			<nav class="main-nav">
				<div class="row">
					<div class="col-md-3">
						<div class="site-logo">
							LPPK - DWP
						</div>
						<button class="nav-btn">
							<span class="fa fa-bars"></span>
						</button>
					</div>
					<div class="col-md-9">
						<?php wp_nav_menu(array('menu' => 'Header Menu', 'menu_class' => 'site-menu', 'container' => '')); ?>
					</div>
				</div>
			</nav>
			<img class="header-bg" src="/dwp/wp-content/themes/dwp/assets/img/dwp.jpg" alt="dharma wanita persatuan">
			<div class="header-overlay">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</div>
		</header>
	
	<?php endif; ?>
	
	<main>