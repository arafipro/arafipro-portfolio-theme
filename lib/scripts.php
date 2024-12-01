<?php

// 本ページ用にCSSとJavaScriptを読み込む
function add_styles()
{
    // 本ページ用
    wp_enqueue_style('theme-style', get_theme_file_uri('/css/theme.css'));
    // 管理画面用
    wp_enqueue_style('admin_style', get_theme_file_uri('/css/admin.css'));
}

add_action('wp_enqueue_scripts', "add_styles");

function add_scripts()
{
    // 本ページ用
    wp_enqueue_script('javascript', get_theme_file_uri('/js/theme.js'), array(), null, true);
    // 管理画面用
    wp_enqueue_script('admin_script', get_theme_file_uri('/js/admin.js'), array(), null, true);
}

add_action('wp_enqueue_scripts', "add_scripts");
