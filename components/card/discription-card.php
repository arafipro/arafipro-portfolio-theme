<section id="discription" class="discription jump_point">
	<h2 class="top-title">
	<?php if(get_option('disc-txt')): echo strtoupper(get_option('disc-txt'));
						else: echo "Discription"; endif; ?>
	</h2>
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
					<h4><?php the_excerpt(); ?></h4>
					<div class="info">
						<p>投稿日：<?php the_date('Y年m月d日') ?></p>
						<p>更新日：<?php the_modified_date('Y年m月d日') ?></p>
					</div>
					<p class="link">記事を読む</p>
				</a>
			</div>
		<?php endwhile; endif;
		wp_reset_postdata(); ?>
	</div>
	<?php if(is_front_page()):	?>
		<a href="<?php esc_url(get_template_directory_uri()); ?>/discription" class="more">
			<span>一覧を見る</span>
		</a>
	<?php endif; ?>
</section>
