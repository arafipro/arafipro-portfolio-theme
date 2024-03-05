<?php wp_body_open(); ?>
<!-- Navigation -->
<div id="scroll"></div>
<!-- 固定ヘッダー -->
<header id="header" class=<?php if(is_front_page()): echo "header_top";
else: echo "header_sub"; endif;?>>
	<div id="header_main">
		<h1>
			<a href="<?php get_template_directory_uri(); ?>/">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_black.png" alt="" />
			</a>
		</h1>
		<nav>
			<ul id="nav_menu">
				<?php if(is_front_page()): ?>
					<li><a href="#" class="nav_link">Home</a></li>
					<li><a href="#about" class="nav_link">About</a></li>
					<li><a href="#skill" class="nav_link">Skill</a></li>
					<li><a href="#discription" class="nav_link">Discription</a></li>
					<li><a href="#product" class="nav_link">Product</a></li>
					<li><a href="#movie" class="nav_link">Movie</a></li>
					<li><a href="#contact" class="nav_link">Contact</a></li>
				<?php else: ?>
					<li><a href="<?php get_template_directory_uri(); ?>/" class="nav_link">Home</a></li>
					<li><a href="<?php get_template_directory_uri(); ?>/about" class="nav_link">About</a></li>
					<li><a href="<?php get_template_directory_uri(); ?>/#skill" class="nav_link">Skill</a></li>
					<li><a href="<?php get_template_directory_uri(); ?>/discription" class="nav_link">Discription</a></li>
					<li><a href="<?php get_template_directory_uri(); ?>/product" class="nav_link">Product</a></li>
					<li><a href="<?php get_template_directory_uri(); ?>/movie" class="nav_link">Movie</a></li>
					<li><a href="<?php get_template_directory_uri(); ?>/#contact" class="nav_link">Contact</a></li>
				<?php endif; ?>
			</ul>
		</nav>
		<div class="nav_icon">
			<i class="ri-menu-line" id="menu_icon"></i>
			<i class="ri-close-line" id="close_icon"></i>
		</div>
	</div>
	<?php get_template_part("components/hero-sec") ?>
</header>
