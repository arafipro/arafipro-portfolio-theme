<?php
add_action('admin_menu', 'custom_menu_page');
function custom_menu_page()
{
    add_menu_page('共通設定画面', 'Google Analytics設定', 'manage_options', 'custom_menu_page', 'add_custom_menu_page', '
  dashicons-admin-generic', 40);
    add_action('admin_init', 'register_custom_setting');
}

function add_custom_menu_page()
{
    ?>
<div class="wrap">
  <h2>Google Analytics設定画面</h2>
  <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
    <?php
    settings_fields('custom-menu-group');
    do_settings_sections('custom-menu-group'); ?>
    <div class="metabox-holder">
      <div class="postbox ">
        <h3 class='hndle'><span>Google Analytics設定</span></h3>
        <div class="inside">
          <div class="main">
            <p class="setting_description">Google Analyticsの設定で取得したタグを入力してください。</p>
						<textarea id="analytics-tag" class="regular-text" name="analytics-tag" rows="10" cols="60" placeholder="<!-- Google tag (gtag.js) -->
"><?php echo get_option('analytics-tag'); ?></textarea>
          </div>
        </div>
      </div>
    </div>
    <?php submit_button(); ?>
  </form>
</div>
<?php
}
function register_custom_setting()
{
    register_setting('custom-menu-group', 'analytics-tag');
}
