<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<!-- header.phpを読み込む -->
	<?php get_header(); ?>
  </head>
  <body>
	<?php get_template_part("components/nav/header-nav") ?>
    <main>
			<?php get_template_part("components/card/discription-card") ?>
    </main>
  </body>
	<!-- footer.phpを読み込む -->
	<?php get_footer(); ?>
</html>
