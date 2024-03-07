<section id="product" class="product jump_point">
	<h2 class="top-title">
	<?php if(get_option('product-txt')): echo strtoupper(get_option('product-txt'));
					else: echo "Product"; endif; ?>
	</h2>
	<div class="product-cards">
		<?php
            // トップページの場合は6件、それ以外はすべて表示
            if(is_front_page()) {
                $post_per_page = 6;
            } else {
                $post_per_page = -1;
            }
            $args = array(
                            'post_type' => 'product',
                            'posts_per_page' => $post_per_page
            );
		$the_query = new WP_Query($args);
		?>
		<?php	if($the_query->have_posts()): while($the_query->have_posts()): $the_query->the_post(); ?>
			<div class="product-card">
				<a href="<?php the_permalink(); ?>" target="_top">
					<div>
						<img src="<?php echo CFS()->get("p_thumbnail"); ?>" alt="" />
					</div>
					<h3><?php the_title(); ?></h3>
					<p class="stack">
						<?php $values = CFS()->get('p_stack');
		    if($values): ?>
							<?php foreach ($values as $key => $label): ?>
								<span><?php echo $label; ?></span><?php endforeach; ?>
						<?php endif; ?>
					</p>
					<p class="link">詳細を見る</p>
				</a>
			</div>
		<?php endwhile; endif;
		wp_reset_postdata(); ?>
	</div>
	<?php if(is_front_page()):	?>
		<a href="<?php esc_url(get_template_directory_uri()); ?>/product" class="more">
			<span>一覧を見る</span>
		</a>
	<?php endif; ?>
</section>
