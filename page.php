<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
		<!-- header.phpを読み込む -->
		<?php get_header(); ?>
  </head>
  <body>
	<?php get_template_part("components/nav/header-nav") ?>
    <main>
			<h1>
				<?php the_title() ?>
			</h1>
			<div style="height: 200vh;">
				<?php the_content() ?>
			</div>
    </main>
		<?php get_template_part("components/nav/footer-nav") ?>
		<!-- footer.phpを読み込む -->
		<?php get_footer(); ?>
  </body>
</html>
