<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
	<!-- header.phpを読み込む -->
	<?php get_header(); ?>
  </head>
  <body>
	<?php get_template_part("components/nav/header-nav") ?>
    <main>
			<?php get_template_part("components/about-sec") ?>
			<?php get_template_part("components/skill-sec") ?>
			<?php get_template_part("components/top/discription-top") ?>
			<?php get_template_part("components/top/product-top") ?>
			<?php get_template_part("components/top/movie-top") ?>
			<?php get_template_part("components/contact-sec") ?>
    </main>
		<?php get_template_part("components/nav/footer-nav") ?>
		<!-- footer.phpを読み込む -->
		<?php get_footer(); ?>
  </body>
</html>
