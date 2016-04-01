<?php get_header(); ?>

<div class="container" id="article">
	<?php if(have_posts()) : ?>
		<?php while( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	<?php else : ?>
		<h2>404! Page Not Found.</h2>
	<?php endif; ?>
</div>

<?php get_footer(); ?>