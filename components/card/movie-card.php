<section id="movie" class="movie jump_point">
	<h2 class="top-title">Movies</h2>
	<div class="movie-cards">
		<?php
            // トップページの場合は6件、それ以外はすべて表示
            if(is_front_page()) {
                $post_per_page = 6;
            } else {
                $post_per_page = -1;
            }
            $args = array(
                    'post_type' => 'movie',
                    'posts_per_page' => $post_per_page
            );
		$the_query = new WP_Query($args);
		?>
		<?php	if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
			<div class="movie-card">
				<a href="<?php echo CFS()->get("m_url"); ?>" target="_blank">
					<div>
						<img src="<?php echo CFS()->get("m_thumbnail"); ?>" alt="" />
					</div>
					<?php $values = CFS()->get('m_stack');
		    if($values): ?>
						<?php foreach ($values as $key => $label): ?>
							<span>【<?php echo $label; ?>】</span><?php endforeach; ?>
					<?php endif; ?>
					<h3><?php the_title(); ?></h3>
				</a>
			</div>
		<?php endwhile; endif; ?>
	</div>
	<?php if(is_front_page()):	?>
		<a href="<?php get_template_directory_uri(); ?>/movie" class="more">
			<span>一覧を見る</span>
		</a>
	<?php endif; ?>
</section>
