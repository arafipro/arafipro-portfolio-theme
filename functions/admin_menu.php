<?php
function add_menu_setting_page()
{
    add_menu_page('共通設定画面', '項目名設定', 'manage_options', 'menu_setting_page', 'menu_setting_page', 'dashicons-admin-generic', 40);
		add_action('admin_init', 'add_menu_setting');
}
function menu_setting_page()
{
    ?>
<div class="wrap">
<h2>項目名設定画面</h2>
<form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
	<?php
    settings_fields('menu-settings-group');
    do_settings_sections('menu-settings-group'); ?>
	<div class="settings">
		<div class="setting">
			<h3 class="title">Home</h3>
			<input placeholder="Home" type="text" id="home-txt" name="home-txt" value="<?php echo get_option('home-txt'); ?>">
		</div>
		<div class="setting">
			<h3 class="title">Discription</h3>
			<input placeholder="Discription" type="text" id="disc-txt" name="disc-txt" value="<?php echo get_option('disc-txt'); ?>">
		</div>
		<div class="setting">
			<h3 class="title">Movie</h3>
			<input placeholder="Movie" type="text" id="mov-txt" name="mov-txt" value="<?php echo get_option('mov-txt'); ?>">
		</div>
		<div class="setting">
			<h3 class="title">Product</h3>
			<input placeholder="Product" type="text" id="product-txt" name="product-txt" value="<?php echo get_option('product-txt'); ?>">
		</div>
		<div class="setting">
			<h3 class="title">About</h3>
			<input placeholder="About" type="text" id="about-txt" name="about-txt" value="<?php echo get_option('about-txt'); ?>">
		</div>
		<div class="setting">
			<h3 class="title">Skill</h3>
			<input placeholder="Skill" type="text" id="skill-txt" name="skill-txt" value="<?php echo get_option('skill-txt'); ?>">
		</div>
		<div class="setting">
			<h3 class="title">Contact</h3>
			<input placeholder="Contact" type="text" id="contact-txt" name="contact-txt" value="<?php echo get_option('contact-txt'); ?>">
		</div>
	</div>
	<?php submit_button(); ?>
</form>
</div>
<?php
}
function add_menu_setting()
{
		register_setting('menu-settings-group', 'home-txt');
		register_setting('menu-settings-group', 'disc-txt');
		register_setting('menu-settings-group', 'mov-txt');
		register_setting('menu-settings-group', 'product-txt');
		register_setting('menu-settings-group', 'about-txt');
		register_setting('menu-settings-group', 'skill-txt');
		register_setting('menu-settings-group', 'contact-txt');
}

add_action('admin_menu', 'add_menu_setting_page');
