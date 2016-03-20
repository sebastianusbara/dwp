<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
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
	<?php wp_head(); ?>
</head>
<body>
	<?php if(is_front_page()) :?>
		
		<header class="main-header">
			<nav class="main-nav">
				<div class="row">
					<div class="col-md-5">
						<div class="site-logo">
							LPPK - DWP
						</div>
					</div>
					<div class="col-md-7">
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
					<div class="col-md-5">
						<div class="site-logo">
							LPPK - DWP
						</div>
					</div>
					<div class="col-md-7">
						<?php wp_nav_menu(array('menu' => 'Header Menu', 'menu_class' => 'site-menu', 'container' => '')); ?>
					</div>
				</div>
			</nav>
			
			<?php if( has_post_thumbnail() ) :?>
				<?php the_post_thumbnail(); ?>
			<?php else :?>
				<img class="header-bg" src="/dwp/wp-content/themes/dwp/assets/img/dwp.jpg" alt="dharma wanita persatuan">
			<?php endif; ?>

			<div class="header-overlay"></div>
		</header>
	
	<?php endif; ?>
	
	<main>