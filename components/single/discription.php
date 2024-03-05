<section class="discription">
	<?php	if(have_posts()): while(have_posts()): the_post(); ?>
		<h1>
			Discription - <?php the_title() ?>
		</h1>
		<?php the_content() ?>
		<div class="info">
			<p>投稿日：<?php the_date('Y年m月d日') ?></p>
			<p>更新日：<?php the_modified_date('Y年m月d日') ?></p>
			<p>投稿者：<?php the_author() ?></p>
			<p>カテゴリー：<?php the_category(",") ?></p>
			<p>タグ：<?php the_tags() ?></p>
		</div>
	<?php endwhile; endif; ?>
</section>
