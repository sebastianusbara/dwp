<?php get_header(); ?>

<section class="home-event">
	<div class="container">
		<h2 class="section-title">Event</h2>
		<div class="row">
			<?php $args = array(
					'posts_per_page'   => 3,
					'orderby'          => 'date',
					'order'            => 'DESC',
					'post_type'        => 'post',
					'post_status'      => 'publish',
					'suppress_filters' => true
				  );
			?>

			<?php $insane = get_posts($args);
				foreach ($insane as $post) : ?>
					<div class="col-md-4">
						<article class="preview-event">
							<img src="/dwp/wp-content/themes/dwp/assets/img/dwp.jpg">
							<time>Jumat, 26 Februari 2016</time>
							<h3 class="preview-event__title"><?php echo $post->post_title; ?></h3>
							<p class="preview-event__desc">
								<?php echo substr($post->post_content, 0, 100); ?>
							</p>
						</article>
					</div>
			<?php endforeach; ?>
		</div>
		<!-- <div class="row">
			<div class="col-md-4">
				<article class="preview-event">
					<img src="/dwp/wp-content/themes/dwp/assets/img/dwp.jpg">
					<time>Jumat, 26 Februari 2016</time>
					<h3 class="preview-event__title">Ditjen Laut</h3>
					<p class="preview-event__desc">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, quidem aliquid. Atque, nisi assumenda. Accusantium vel accusamus, facere! Voluptatibus, iste, saepe! Eveniet dolorem, voluptatibus vitae rem dignissimos mollitia molestiae odio?
					</p>
				</article>
			</div>
			<div class="col-md-4">
				<article class="preview-event">
					<img src="/dwp/wp-content/themes/dwp/assets/img/dwp.jpg">
					<time>Jumat, 26 Februari 2016</time>
					<h3 class="preview-event__title">Ditjen Laut</h3>
					<p class="preview-event__desc">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, quidem aliquid. Atque, nisi assumenda. Accusantium vel accusamus, facere! Voluptatibus, iste, saepe! Eveniet dolorem, voluptatibus vitae rem dignissimos mollitia molestiae odio?
					</p>
				</article>
			</div>
			<div class="col-md-4">
				<article class="preview-event">
					<img src="/dwp/wp-content/themes/dwp/assets/img/dwp.jpg">
					<time>Jumat, 26 Februari 2016</time>
					<h3 class="preview-event__title">Ditjen Laut</h3>
					<p class="preview-event__desc">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, quidem aliquid. Atque, nisi assumenda. Accusantium vel accusamus, facere! Voluptatibus, iste, saepe! Eveniet dolorem, voluptatibus vitae rem dignissimos mollitia molestiae odio?
					</p>
				</article>
			</div>
		</div> -->
	</div>
</section>
<section class="home-gallery">
	<div class="container">
		<h2 class="section-title">Gallery</h2>
	</div>
</section>

<?php get_footer(); ?>