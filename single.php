<?php get_header(); ?>

	<div class="container container--post" id="article">
		<?php if(have_posts()) : ?>
			<?php while( have_posts() ) : the_post(); ?>
				<div class="post__title">
					<?php the_title(); ?>
				</div>
				<h3 class="align-center post__time">
					Ditulis pada: <time><?php echo get_the_date('d M Y'); ?></time>
				</h3>
				<div class="post__content">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		<?php else : ?>
			<h2>404! Page Not Found.</h2>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>