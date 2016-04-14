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
							<!-- <img src="/dwp/wp-content/themes/dwp/assets/img/dwp.jpg"> -->
							<figure class="preview-event__figure"> 
								<?php the_post_thumbnail(); ?>
							</figure>
							<time>Ditulis pada :  <?php echo get_the_date('d M Y'); ?></time>
							<h3 class="preview-event__title"><a href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></h3>
							<p class="preview-event__desc">
								<?php echo substr($post->post_content, 0, 150) . '...'; ?>
								<a href="<?php echo get_permalink(); ?>">Read More</a>
							</p>
						</article>
					</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<section class="home-gallery">
	<div class="container">
		<h2 class="section-title">Gallery</h2>
	</div>
</section>

<?php get_footer(); ?>