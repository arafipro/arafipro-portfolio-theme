<?php wp_body_open(); ?>
<!-- Navigation -->
<div id="scroll"></div>
<!-- 固定ヘッダー -->
<header id="header" class="header_top">
	<div id="header_main">
		<h1>
			<a href="<?php bloginfo("url"); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/images/logo_black.png" alt="" />
			</a>
		</h1>
		<nav>
			<ul id="nav_menu">
				<li><a href="<?php bloginfo("url"); ?>" class="nav_link">Home</a></li>
				<li><a href="<?php bloginfo("url"); ?>/about" class="nav_link">About</a></li>
				<li><a href="<?php bloginfo("url"); ?>/discription" class="nav_link">Discription</a></li>
				<li><a href="<?php bloginfo("url"); ?>/product" class="nav_link">Product</a></li>
				<li><a href="<?php bloginfo("url"); ?>/movie" class="nav_link">Movie</a></li>
				<li><a href="<?php bloginfo("url"); ?>/skill" class="nav_link">Skill</a></li>
				<li><a href="#news" class="nav_link">News</a></li>
				<li><a href="#contact" class="nav_link">Contact</a></li>
			</ul>
		</nav>
		<div class="nav_icon">
			<i class="ri-menu-line" id="menu_icon"></i>
			<i class="ri-close-line" id="close_icon"></i>
		</div>
	</div>
	<!-- <?php get_template_part("components/hero-sec") ?> -->
</header>
