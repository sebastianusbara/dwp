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

<section class="contact-info">
	<div class="container container--medium">
		<div class="row">
			<div class="col-md-6">
				<h2 class="contact-info__title">Dharma Wanita Persatuan</h2>
				<h3 class="contact-info__subtitle">Kementerian Perhubungan Republik Indonesia</h3>
				<p class="contact-info__desc">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque ipsam, pariatur doloremque enim in magni eligendi rerum debitis reprehenderit quo animi magnam adipisci quisquam tempore velit dignissimos iure, dolore ad. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate sit placeat est quod ipsa, dolore incidunt. Praesentium, provident alias consequatur voluptatibus, ducimus aut veritatis voluptatem dolor commodi aspernatur dolore, cumque!
				</p>
				<ul class="contact-info__list">
					<li>
						<span class="fa fa-envelope"></span>
						dwp@kemenhub.com
					</li>
					<li>
						<span class="fa fa-phone"></span>
						(021) 7382 9123
					</li>
				</ul>
			</div>
			<div class="col-md-6">
				<div class="map-responsive">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.34729218404!2d106.95914891436666!3d-6.848906568904944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e684bb563e128c7%3A0xeba3a711d22591d9!2sTaman+Rekreasi+Selabintana!5e0!3m2!1sid!2sid!4v1457808683546" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-form">
	<div class="container container--medium">
		<?php 
			if(!$is_form_valid){
				echo '<h4 class="error-block">' . $msg . '</h4>';
			}

			if($success_msg != ''){
				echo $success_msg;
			}
		?>
		<h2 class="contact-title align-center">
			Tuliskan Pesan Anda
		</h2>
		<form action="" method="post" class="contact-form__form">
			<div class="row">
				<div class="col-md-6">
					<div class="form__row">
						<label for="">Nama depan*</label>
						<input type="text" name="cu_first_name" id="cu_first_name">
					</div>
				</div>
				<div class="col-md-6">		
					<div class="form__row">
						<label for="">Nama belakang*</label>
						<input type="text" name="cu_last_name" id="cu_last_name">
					</div>
				</div>	
			</div>
			<div class="form__row">
				<label for="">Alamat e-mail*</label>
				<input type="text" name="cu_email" id="cu_email">
			</div>
			<div class="form__row">
				<label for="">Subjek*</label>
				<input type="text" name="cu_subject" id="cu_subject">
			</div>
			<div class="form__row">
				<label for="">Isi pesan*</label>
				<textarea name="cu_message" id="cu_message" cols="30" rows="10"></textarea>
			</div>
			<div class="align-center">
				<button class="btn btn--large btn--black btn--round" name="cu_submit">
					Kirim
				</button>
			</div>
		</form>
	</div>
</section>

<?php get_footer(); ?>