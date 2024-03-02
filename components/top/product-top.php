<section id="product" class="product jump_point">
	<h2>TOP - Products</h2>
	<div class="categories">
		<?php
			$args = array(
					'post_type' => 'product',
					'posts_per_page' => 6
			);
			$the_query = new WP_Query($args);
		?>
		<?php	if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
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
