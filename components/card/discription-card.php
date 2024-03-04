<section id="discription" class="discription jump_point">
	<h2 class="top-title">Discriptions</h2>
	<div class="discription-cards">
		<?php
            // トップページの場合は6件、それ以外はすべて表示
            if(is_front_page()) {
                $post_per_page = 6;
            } else {
                $post_per_page = -1;
            }
            $args = array(
                    'posts_per_page' => $post_per_page
            );
		$the_query = new WP_Query($args);
		?>
		<?php	if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
			<div class="discription-card">
				<a href="<?php the_permalink(); ?>" target="_top">
					<h3><?php the_title(); ?></h3>
					<h4>当ポートフォリオサイト</h4>
					<h5>HTML CSS SASS JavaScript</h5>
					<div class="img">
						<img src="<?php echo get_template_directory_uri(); ?>/images/ss-portfolio.jpg" alt="" />
					</div>
				</a>
			</div>
		<?php endwhile; endif; ?>
	</div>
	<?php if(is_front_page()):	?>
		<a href="<?php get_template_directory_uri(); ?>/discription" class="more">
			<span>一覧を見る</span>
		</a>
	<?php endif; ?>
</section>
