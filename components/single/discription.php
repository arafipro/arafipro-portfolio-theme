<section class="discription-single">
	<?php	if(have_posts()): while(have_posts()): the_post(); ?>
		<h1 class="top-title">
			<?php the_title() ?>
		</h1>
		<div class="info">
			<p>投稿日：<?php the_date('Y年m月d日') ?></p>
			<p>更新日：<?php the_modified_date('Y年m月d日') ?></p>
		</div>
		<p class="author">投稿者：<?php the_author() ?></p>
		<?php the_content() ?>
	<?php endwhile; endif; ?>
</section>
