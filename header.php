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
</head>
<body>
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
					<!-- <ul class="site-menu">
					<li class="site-menu__li">
						Divisi
						<ul class="site-submenu">
							<li>
								<a href="#">Bid. Pendidikan</a>
							</li>
							<li>
								<a href="#">Bid. Ekonomi</a>
							</li>
							<li>
								<a href="#">Bid. Sosial Budaya</a>
							</li>
						</ul>
					</li>
					<li class="site-menu__li">
						Kegiatan
						<ul class="site-submenu">
							<li>
								<a href="#">Event</a>
							</li>
							<li>
								<a href="#">Galeri UKM</a>
							</li>
						</ul>
					</li>
					<li class="site-menu__li">
						Tentang Kami
						<ul class="site-submenu">
							<li>
								<a href="#">Sekretariat</a>
							</li>
							<li>
								<a href="#">Kepengurusan</a>
							</li>
							<li>
								<a href="#">DWP Pusat</a>
							</li>
						</ul>
					</li>
					<li class="site-menu__li">
						<a href="kontak">Kontak</a>
					</li>
					</ul> -->
				</div>
			</div>
		</nav>
		<img class="header-bg" src="/dwp/wp-content/themes/dwp/assets/img/dwp.jpg" alt="dharma wanita persatuan">
		<div class="header-overlay"></div>
	</header>
	<main>