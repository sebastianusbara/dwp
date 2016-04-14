<?php get_header(); ?>

<?php

$is_form_valid = true;
$msg = '';
$success_msg = '';

if(isset($_POST['cu_submit'])) :
	
	$cu_f_name 	= isset($_POST['cu_first_name']) ? sanitize_text_field($_POST['cu_first_name']) : false;
	$cu_l_name 	= isset($_POST['cu_last_name']) ? sanitize_text_field($_POST['cu_last_name']) : false;
	$cu_email 	= isset($_POST['cu_email']) ? sanitize_text_field($_POST['cu_email']) : false;
	$cu_subject = isset($_POST['cu_subject']) ? sanitize_text_field($_POST['cu_subject']) : false;
	$cu_message = isset($_POST['cu_message']) ? esc_textarea($_POST['cu_message']) : false;

	if(!$cu_f_name){
		$is_form_valid = false;
		$msg .= 'Isikan Nama Depan Anda <br/>';
	}

	if(!$cu_l_name){
		$is_form_valid = false;
		$msg .= 'Isikan Nama Belakang Anda <br/>';
	}

	if(!$cu_email){
		$is_form_valid = false;
		$msg .= 'Isikan Email Anda <br/>';
	}

	if(!$cu_subject){
		$is_form_valid = false;
		$msg .= 'Isikan Subjek Pesan Anda <br/>';
	}

	if(!$cu_message){
		$is_form_valid = false;
		$msg .= 'Isikan Pesan Anda <br/>';
	}

	if($is_form_valid){
		$admin_email = get_option('admin_email');
		$header = 'Pesan Dari: ' . $cu_f_name;

		if(mail($admin_email, $cu_subject, $cu_message, $header)) {
			$success_msg = '<h4 class="success">Pesan Terkirim. Terima Kasih Telah Mengontak Kami</h4>';
		}
	}

endif;

?>

<section class="event-page">
	<div class="container container--medium">
		<ul class="event-list">
			<li>
				<div class="row">
					<div class="col-md-4">
						<img src="../wp-content/themes/dwp/assets/img/dwp.jpg">
					</div>
					<div class="col-md-8">
						<h2 class="event-list__title">
							Kongres Dharma Wanita Persatuan Nasional 2016
						</h2>
						<time class="event-list__time">
							Tanggal Acara : 21 April 2016
						</time>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur impedit quam beatae saepe iure tempore dolores eos. Nihil sequi, sit ipsum magnam error deleniti voluptate natus explicabo, temporibus velit? Ducimus?
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum adipisci odio et perspiciatis officiis reprehenderit maiores sunt sit ducimus dolores, veniam, culpa nesciunt. Voluptatum ratione tempore quas provident, a magnam.
						</p>
						<a href="#">Baca Selengkapnya...</a>
					</div>
			</li>
			<li>
				<div class="row">
					<div class="col-md-4">
						<img src="../wp-content/themes/dwp/assets/img/dwp.jpg">
					</div>
					<div class="col-md-8">
						<h2 class="event-list__title">
							Kongres Dharma Wanita Persatuan Nasional 2016
						</h2>
						<time class="event-list__time">
							Tanggal Acara : 21 April 2016
						</time>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur impedit quam beatae saepe iure tempore dolores eos. Nihil sequi, sit ipsum magnam error deleniti voluptate natus explicabo, temporibus velit? Ducimus?
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum adipisci odio et perspiciatis officiis reprehenderit maiores sunt sit ducimus dolores, veniam, culpa nesciunt. Voluptatum ratione tempore quas provident, a magnam.
						</p>
						<a href="#">Baca Selengkapnya...</a>
					</div>
			</li>
			<li>
				<div class="row">
					<div class="col-md-4">
						<img src="../wp-content/themes/dwp/assets/img/dwp.jpg">
					</div>
					<div class="col-md-8">
						<h2 class="event-list__title">
							Kongres Dharma Wanita Persatuan Nasional 2016
						</h2>
						<time class="event-list__time">
							Tanggal Acara : 21 April 2016
						</time>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur impedit quam beatae saepe iure tempore dolores eos. Nihil sequi, sit ipsum magnam error deleniti voluptate natus explicabo, temporibus velit? Ducimus?
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum adipisci odio et perspiciatis officiis reprehenderit maiores sunt sit ducimus dolores, veniam, culpa nesciunt. Voluptatum ratione tempore quas provident, a magnam.
						</p>
						<a href="#">Baca Selengkapnya...</a>
					</div>
			</li>
		</ul>
		<ul class="pagination-list">
			<li>
				<a href="#">
					Sebelumnya
				</a>
			</li>
			<li class="active">
				<a href="#">
					1
				</a>
			</li>
			<li>
				<a href="#">
					2
				</a>
			</li>
			<li>
				<a href="#">
					3
				</a>
			</li>
			<li>
				<a href="#">
					4
				</a>
			</li>
			<li>
				<a href="#">
					5
				</a>
			</li>
			<li>
				<a href="#">
					Selanjutnya
				</a>
			</li>
		</ul>
	</div>
</section>

<?php get_footer(); ?>