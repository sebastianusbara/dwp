<?php get_header(); ?>

	<div class="container" id="article">
		<?php if(have_posts()) : ?>
			<?php while( have_posts() ) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<h5>Ditulis pada: <time><?php echo get_the_date('d M Y'); ?></time></h5>
				<div class="col-md-8">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		<?php else : ?>
			<h2>404! Page Not Found.</h2>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>