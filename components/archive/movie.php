<section id="movie" class="product jump_point">
	<h2>Movies</h2>
	<div class="categories">
		<?php	if(have_posts()): while(have_posts()): the_post(); ?>
			<div>
				<a href="<?php the_permalink(); ?>" target="_top">
					<h3><?php the_title(); ?></h3>
					<!-- <h4>当ポートフォリオサイト</h4>
					<h5>HTML CSS SASS JavaScript</h5> -->
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ss-portfolio.jpg" alt="" />
					</div>
				</a>
			</div>
		<?php endwhile; endif; ?>
	</div>
</section>
