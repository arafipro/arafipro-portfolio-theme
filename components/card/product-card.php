<section id="product" class="product jump_point">
	<h2>Products</h2>
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
					<h3><?php echo CFS()->get("p_title"); ?></h3>
					<h4><?php echo CFS()->get("p_subtitle"); ?></h4>
					<h5>
						<?php $values = CFS()->get('p_stack');
		    if($values): ?>
							<?php foreach ($values as $key => $label): ?>
								<span><?php echo $label; ?><?php endforeach; ?></span>
						<?php endif; ?>
					</h5>
				</a>
			</div>
		<?php endwhile; endif; ?>
	</div>
	<?php if(is_front_page()):	?>
		<a href="<?php get_template_directory_uri(); ?>/product" class="more">
			<span>一覧を見る</span>
		</a>
	<?php endif; ?>
</section>
