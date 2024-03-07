<!-- CSSとJavaScriptを読み込む -->
<?php

function admin_theme_cssjs()
{
    wp_enqueue_style('admin_style', get_theme_file_uri('/css/admin.css'));
		wp_enqueue_script('admin_script', get_theme_file_uri('/js/admin.js'));
}

add_action('admin_enqueue_scripts', 'admin_theme_cssjs');
