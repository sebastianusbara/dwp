<?php get_header(); ?>

<?php if(have_posts()) : ?>
	<section class="ukm-about">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h2 class="ukm-about__title">
						Mengapa UKM ?
					</h2>
					<?php while( have_posts() ) : the_post(); ?>
						<p class="ukm-about__desc">
							<?php the_content(); ?>
						</p>
					<?php endwhile; ?>
				</div>
				<div class="col-md-4">
					<img src="<?=dwp_theme_dir?>/assets/img/dwp.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="ukm-stats">
		<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="ukm-stats__value">
					<span>15</span>
					UKM Tercipta
				</div>
			</div>
			<div class="col-md-4">
				<div class="ukm-stats__value">
					<span>15</span>
					UKM Tercipta
				</div>
			</div>
			<div class="col-md-4">
				<div class="ukm-stats__value">
					<span>15</span>
					UKM Tercipta
				</div>
			</div>
		</div>
		</div>
	</section>
	<section class="ukm-galeri">
		<div class="container">
			<h3 class="ukm-galeri__subtitle">Galeri</h3>
			<h2 class="ukm-galeri__title">UKM Oleh DWP Kemenhub</h2>
			<div class="ukm-galeri__content">
				<div class="row">
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array( 'post_type' => 'gallery', 'posts_per_page' => 6, 'paged' => $paged );
						$loop = new WP_Query( $args );
					?>
					<?php 

						echo get_the_category_list(); 
						print_r(wp_list_categories());

					?>
					<?php if($loop->have_posts()) :
							while ( $loop->have_posts() ) : $loop->the_post(); ?>
								<div class="col-md-4">
									<article class="ukm-galeri__post">
										<!-- <img src="<?=dwp_theme_dir?>/assets/img/dwp.jpg" alt=""> -->
										<?php the_post_thumbnail(); ?>
										<div class="ukm-galeri__post-title">
											<?php the_title(); ?>
										</div>
										<p>
											<?php the_content(); ?>
										</p>
										<?php $post_id = get_the_ID(); ?>
										<div class="ukm-category"><?php echo get_post_meta($post_id, 'ukm-category', true);; ?></div>
									</article>
								</div>
					<?php endwhile; 
						  $i=1; 
					?>
				</div>
					<?php endif; ?>
				<ul class="pagination-list">
					<?php if($paged > $i) :?>
						<li>
							<a href="<?php echo get_pagenum_link($paged-1); ?>">
								Sebelumnya
							</a>
						</li>
					<?php endif; ?>
		<?php
		        for($i; $i<=$loop->max_num_pages; $i++) :
		        	if($i == $paged) :
		?>
						<li class="active">
							<a href="#">
								<?php echo $i; ?>
							</a>
						</li>
		<?php 			else : ?>
						<li>
							<a href="<?php echo get_pagenum_link($i); ?>">
								<?php echo $i; ?>
							</a>
						</li>
		<?php
		        	endif;
		        endfor;
		?>
					<?php if($paged != $loop->max_num_pages) :?>
						<li>
							<a href="<?php echo get_pagenum_link($paged+1); ?>">
								Selanjutnya
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</section>
	<!-- <section class="ukm-footer">
		<h2 class="ukm-footer__desc">
			Wanita bersama, <br>
			berkarya untuk Indonesia <br>
			melalui UKM
		</h2>
		<img src="<?=dwp_theme_dir?>/assets/img/dwp.jpg" alt="">
		<div class="ukm-footer__overlay"></div>
	</section> -->

<?php else : ?>
	<h2>404! Page Not Found.</h2>
<?php endif; ?>

<?php get_footer(); ?>