<section class="discription">
	<?php	if(have_posts()): while(have_posts()): the_post(); ?>
		<h1>
			Discription - <?php the_title() ?>
		</h1>
		<?php the_content() ?>
		<ul>
			<li>投稿日：<?php the_date('Y年m月d日') ?></li>
			<li>更新日：<?php the_modified_date('Y年m月d日') ?></li>
			<li>投稿者：<?php the_author() ?></li>
			<li>カテゴリー：<?php the_category(",") ?></li>
			<li>タグ：<?php the_tags() ?></li>
		</ul>
	<?php endwhile; endif; ?>
</section>
