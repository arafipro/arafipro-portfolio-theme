<?php
add_theme_support('post-thumbnails');
// 投稿タイプの引数を変更
function post_has_archive($args, $post_type)
{
    $labels = [
        "singular_name" => "技術記事",
        "edit_item" => "discription",
    ];
    if("post" == $post_type) {
        $args["rewrite"] = true;
        $args["has_archive"] = "discription";
        $args["label"] = "技術記事";
        $args["labels"] = $labels;
    }
    return $args;
}

add_filter("register_post_type_args", "post_has_archive", 10, 2);

// 本ページ用にCSSとJavaScriptを読み込む
function add_theme_cssjs()
{
    // css/theme.cssを読み込む
    wp_enqueue_style('theme-style', get_theme_file_uri('/css/theme.css'));
    // js/main.jsを読み込む
    wp_enqueue_script('javascript', get_theme_file_uri('/js/theme.js'), array(), null, true);
}

add_action('wp_enqueue_scripts', "add_theme_cssjs");

// 管理画面用にCSSとJavaScriptを読み込む
function admin_theme_cssjs()
{
    wp_enqueue_style('admin_style', get_theme_file_uri('/css/admin.css'));
    wp_enqueue_script('admin_script', get_theme_file_uri('/js/admin.js'));
}

add_action('admin_enqueue_scripts', 'admin_theme_cssjs');

// メニュー項目名設定
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


// GoogleアナリティクスID設定
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
    <div class="settings">
      <div class="ana-setting">
				<h3>Google Analytics設定</h3>
				<p class="setting_description">Google Analyticsの設定で取得したタグIDを入力してください。</p>
				<input placeholder="タグIDを入力してください" type="text" id="analytics-tag" name="analytics-tag" value="<?php echo get_option('analytics-tag'); ?>" />
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

// カスタム投稿タイプの投稿のパーマリンクを自動で設定する
function change_link()
{
    //無限ループ回避（一時的に外す）s
    remove_action('save_post', 'change_link');

    global $post;
    // $postがnullでないこと、そしてオブジェクトであることを確認
    if (!is_null($post) && is_object($post)) {
        if ($post->post_type == 'product' || $post->post_type == 'movie') {
            // 投稿日を Ymd 形式で取得し、IDの前に追加
            $post_date = get_the_date('Y/m/d', $post->ID);
            // 新しいスラッグを生成
            $new_slug = $post_date . '/' . $post->ID;
            $update_data = array(
                            'ID' => $post->ID,
                            'post_name' => $new_slug
            );
            wp_update_post($update_data);
        }
    }
    //無限ループ回避を解除
    add_action('save_post', 'change_link');
}

add_action('save_post', 'change_link');

// カスタム投稿タイプmovie
// 投稿タイプを追加
function cpt_register_movie()
{
    $labels = [
                "singular_name" => "動画",
                "edit_item" => "movie",
    ];
    $args = [
                "label" => "動画",
                "labels" => $labels,
                "public" => true,
                "has_archive" => true,
                "rewrite" => ["slug" => "movie"],
                "show_in_rest" => true,
                "menu_position" => 5,
                "supports" => ["title", "editor", "custom-fields"],
                "taxonomies" => ["movie-cat", "movie-tag"],
    ];
    register_post_type("movie", $args);
}

// 投稿タイプにカテゴリーを追加
function cpt_register_movie_cat()
{
    $args = [
                "label" => "カテゴリー",
                "public" => true,
                "hierarchical" => true,
                "show_in_rest" => true,
];
    register_taxonomy("movie-cat", ["movie"], $args);
}

// 投稿タイプのエディターを削除
function cpt_register_movie_remove_edit()
{
    remove_post_type_support("movie", "editor");
}

add_action("init", "cpt_register_movie");
add_action("init", "cpt_register_movie_cat");
add_action("init", "cpt_register_movie_remove_edit");

// カスタム投稿タイプproduct
// 投稿タイプを追加
function cpt_register_product()
{
    $labels = [
        "singular_name" => "プロダクト",
        "edit_item" => "product",
    ];
    $args = [
        "label" => "プロダクト",
        "labels" => $labels,
        "public" => true,
        "has_archive" => true,
        "rewrite" => ["slug" => "product"],
        "show_in_rest" => true,
        "menu_position" => 5,
        "supports" => ["title", "editor", "custom-fields"],
        "taxonomies" => ["product-cat", "product-tag"],
    ];
    register_post_type("product", $args);
}

// 投稿タイプにカテゴリーを追加
function cpt_register_product_cat()
{
    $args =[
        "label" => "カテゴリー",
        "public" => true,
        "hierarchical" => true,
        "show_in_rest" => true,	];
    register_taxonomy("product-cat", ["product"], $args);
}

// 投稿タイプのエディターを削除
function cpt_register_product_remove_edit()
{
    remove_post_type_support("product", "editor");
}

add_action("init", "cpt_register_product");
add_action("init", "cpt_register_product_cat");
add_action("init", "cpt_register_product_remove_edit");
