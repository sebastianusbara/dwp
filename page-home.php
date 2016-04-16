<?php get_header(); ?>

<section class="home-event">
	<div class="container">
		<h2 class="section-title">
			<span>Featured Event</span>
		</h2>
		
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
					<article class="preview-event">
						<div class="row">
							<div class="col-md-4">
								<figure class="preview-event__figure"> 
									<?php the_post_thumbnail(); ?>
								</figure>
							</div>
							<div class="col-md-8">
								<time><?php echo get_the_date('l, d F Y'); ?></time>
								<h3 class="preview-event__title"><a href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></h3>
								<p class="preview-event__desc">
									<?php echo substr($post->post_content, 0, 400) . ' (...)'; ?>
									<br>
									<a class="preview-event__more" href="<?php echo get_permalink(); ?>">Read More</a>
								</p>
							</div>
						</div>
					</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<section class="home-gallery">
	<div class="container">
		<h2 class="section-title">
			<span>Gallery</span>
		</h2>
		<div class="home-gallery__slider">
		  <div>
		  	<img src="/dwp/wp-content/themes/dwp/assets/img/image001.jpg">
		  </div>
		  <div>
		  	<img src="/dwp/wp-content/themes/dwp/assets/img/image002.jpg">
		  </div>
		  <div>
		  	<img src="/dwp/wp-content/themes/dwp/assets/img/image003.jpg">
		  </div>
		  <div>
		  	<img src="/dwp/wp-content/themes/dwp/assets/img/image004.jpg">
		  </div>
		  <div>
		  	<img src="/dwp/wp-content/themes/dwp/assets/img/image005.jpg">
		  </div>
		</div>
	</div>
</section>

<?php get_footer(); ?>