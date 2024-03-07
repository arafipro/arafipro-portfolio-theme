<!-- カスタム投稿タイプmovie -->
<?php

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
                "supports" => ["title", "editor", "thumbnail", "custom-fields"],
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
