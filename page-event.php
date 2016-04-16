<?php get_header(); ?>

<section class="event-page">
	<div class="container container--medium">
		<?php 
			$btpgid=get_queried_object_id();
			$btmetanm=get_post_meta( $btpgid, 'WP_Catid','true' );
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$args = array( 'posts_per_page' => 5, 'category_name' => $btmetanm,
			'paged' => $paged,'post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC', );
			    $postslist = new WP_Query( $args );
			if ( $postslist->have_posts() ) :
		        while ( $postslist->have_posts() ) : $postslist->the_post(); 
		?>
				<ul class="event-list">
		    		<li>
						<div class="row">
							<div class="col-md-4">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="col-md-8">
								<h2 class="event-list__title">
									<?php the_title(); ?>
								</h2>
								<time class="event-list__time">
									Tanggal Acara : <?php echo get_the_date('d F Y'); ?>
								</time>
								<p>
									<?php echo substr(get_the_content(), 0, 250) . '...'; ?>
									<a href="<?php echo get_permalink(); ?>">(Baca Selengkapnya)</a>
								</p>
							</div>
						</div>
					</li>
				</ul>
		<?php
		         endwhile;  

		        // next_posts_link( 'Older Entries', $postslist->max_num_pages );
		        // previous_posts_link( 'Next Entries &raquo;' ); 
		        // wp_reset_postdata();
		        $i = 1;
		?>
				<ul class="pagination-list">
					<?php if($paged > $i) :?>
						<li>
							<a href="<?php echo get_pagenum_link($paged-1); ?>">
								Sebelumnya
							</a>
						</li>
					<?php endif; ?>
		<?php
		        for($i; $i<=$postslist->max_num_pages; $i++) :
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
					<?php if($paged != $postslist->max_num_pages) :?>
						<li>
							<a href="<?php echo get_pagenum_link($paged+1); ?>">
								Selanjutnya
							</a>
						</li>
					<?php endif; ?>
				</ul>
		<?php
		    endif;
		?>
		<!-- <a href="<?php echo get_pagenum_link($postslist->max_num_pages); ?>">hai gantengs</a> -->
		<!-- <ul class="pagination-list">
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
		</ul> -->
	</div>
</section>

<?php get_footer(); ?>