<?php
function add_analytics_setting_page()
{
    add_menu_page('共通設定画面', 'Google Analytics設定', 'manage_options', 'analytics_setting_page', 'analytics_setting_page', 'dashicons-admin-generic', 40);
    add_action('admin_init', 'add_analytics_setting');
}

function analytics_setting_page()
{
    ?>
<div class="wrap">
  <h2>Google Analytics設定画面</h2>
  <form method="post" action="options.php" enctype="multipart/form-data" encoding="multipart/form-data">
		<?php
    settings_fields('analytics-setting-group');
    do_settings_sections('analytics-setting-group'); ?>
    <div class="metabox-holder">
      <div class="postbox">
				<div class="inside">
					<h3>Google Analytics設定</h3>
					<div class="main">
						<p class="setting_description">Google Analyticsの設定で取得したタグを入力してください。</p>
						<textarea id="analytics-tag" class="regular-text" name="analytics-tag" rows="10" cols="60" placeholder="<!-- Google tag (gtag.js) -->"><?php echo get_option('analytics-tag'); ?></textarea>
          </div>
        </div>
      </div>
    </div>
    <?php submit_button(); ?>
  </form>
</div>
<?php
}
function add_analytics_setting()
{
    register_setting('analytics-setting-group', 'analytics-tag');
}

add_action('admin_menu', 'add_analytics_setting_page');
