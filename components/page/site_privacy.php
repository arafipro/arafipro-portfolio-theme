<section class="site-privacy">
	<?php	if(have_posts()): while(have_posts()): the_post(); ?>
		<h1>
			<?php the_title() ?>
		</h1>
		<?php the_content() ?>
		<div class="info">
			<p><?php the_date('Y年m月d日') ?> 策定</p>
			<p><?php the_modified_date('Y年m月d日') ?> 改定</p>
		</div>
	<?php endwhile; endif; ?>
</section>
