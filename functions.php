<?php

// プロダクト投稿タイプを追加
function cpt_register_product()
{
    $labels = [
        "singular_name" => "product",
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
        "supports" => ["title", "editor", "thumbnail", "custom-fields"],
        "taxonomies" => ["product-cat", "product-tag"],
    ];
    register_post_type("product", $args);
}

// プロダクト投稿タイプにカテゴリーを追加
function cpt_register_product_cat()
{
    $args =[
        "label" => "カテゴリー",
        "public" => true,
        "hierarchical" => true,
        "show_in_rest" => true,	];
    register_taxonomy("product-cat", ["product"], $args);
}

// プロダクト投稿タイプにタグを追加
function cpt_register_product_tag()
{
    $args = [
        "label" => "タグ",
        "public" => true,
        "show_in_rest" => true,
    ];
    register_taxonomy("product-tag", ["product"], $args);
}

// プロダクト投稿タイプのエディターを削除
function cpt_register_product_remove_edit()
{
    remove_post_type_support("product", "editor");
}

// 動画投稿タイプ
function cpt_register_movie()
{
    $labels = [
                "singular_name" => "動画",
                "edit_item" => "動画",
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


// 動画投稿タイプにカテゴリーを追加
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

// 動画投稿タイプにタグを追加
function cpt_register_movie_tag()
{
    $args = [
        "label" => "タグ",
        "public" => true,
        "show_in_rest" => true,
    ];
    register_taxonomy("movie-tag", ["movie"], $args);
};

// 動画投稿タイプのエディターを削除
function cpt_register_movie_remove_edit()
{
    remove_post_type_support("movie", "editor");
}

function post_has_archive($args, $post_type)
{
    if("post" == $post_type) {
        $args["rewrite"] = true;
        $args["has_archive"] = "discription";
        $args["label"] = "記事";
    }
    return $args;
}

add_action("init", "cpt_register_product");
add_action("init", "cpt_register_product_cat");
add_action("init", "cpt_register_product_tag");
add_action("init", "cpt_register_product_remove_edit");

add_action("init", "cpt_register_movie");
add_action("init", "cpt_register_movie_cat");
add_action("init", "cpt_register_movie_tag");
add_action("init", "cpt_register_movie_remove_edit");

add_filter("register_post_type_args", "post_has_archive", 10, 2);
