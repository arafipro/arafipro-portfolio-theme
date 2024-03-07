<!-- CSSとJavaScriptを読み込む -->
<?php

function link_enqueue()
{
    // js/main.jsを読み込む
    wp_enqueue_script('javascript', get_theme_file_uri('/js/main.js'), array(), null, true);
    // css/theme.cssを読み込む
    wp_enqueue_style('theme-style', get_theme_file_uri('/css/theme.css'));
}

add_action('wp_enqueue_scripts', "link_enqueue");
