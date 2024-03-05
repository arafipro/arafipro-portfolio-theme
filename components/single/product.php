<section class="product-single">
	<?php	if(have_posts()): while(have_posts()): the_post(); ?>
		<img src="<?php echo CFS()->get("p_thumbnail"); ?>" alt="" />
		<div>
			<h2><?php the_title(); ?></h2>
			<h3><?php echo CFS()->get("p_subtitle"); ?></h3>
			<p class="stacks">
				<?php $values = CFS()->get('p_stack');
	    if($values): ?>
					<?php foreach ($values as $key => $label): ?>
						<span>【<?php echo $label; ?>】</span><?php endforeach; ?>
						<?php endif; ?>
			</p>
			<div class="links">
				<a href="<?php CFS()->get("p_github"); ?>">GitHubリポジトリ</a>
				<a href="<?php CFS()->get("p_url"); ?>">デモサイト</a>
			</div>
		</div>
	<?php endwhile; endif; ?>
</section>
