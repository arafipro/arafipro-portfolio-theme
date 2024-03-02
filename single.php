<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
		<!-- header.phpを読み込む -->
		<?php get_header(); ?>
  </head>
  <body>
		<?php get_template_part("components/nav/header-nav") ?>
    <main>
		<?php	if(have_posts()): while(have_posts()): the_post(); ?>
			<h1>
				<?php the_title() ?>あああああ
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
    </main>
		<?php get_template_part("components/nav/footer-nav") ?>
		<!-- footer.phpを読み込む -->
		<?php get_footer(); ?>
  </body>
</html>
