<!-- CSSとJavaScriptを読み込む -->
<?php

function add_theme_cssjs()
{
	// css/theme.cssを読み込む
	wp_enqueue_style('theme-style', get_theme_file_uri('/css/theme.css'));
	// js/main.jsを読み込む
	wp_enqueue_script('javascript', get_theme_file_uri('/js/theme.js'), array(), null, true);
}

add_action('wp_enqueue_scripts', "add_theme_cssjs");
