<?php

add_action("init", function () {
    // プロダクト投稿タイプ
    register_post_type("product", [
        "label" => "プロダクト",
        "public" => true,
        "menu_position" => 5,
        "supports" => ["title", "editor", "thumbnail", "custom-fields"],
        "has_archive" => true,
        "show_in_rest" => true,
    ]);
    // プロダクト投稿タイプにカテゴリーを追加
    register_taxonomy(
        "product-cat",
        "product",
        [
                "label" => "カテゴリー",
                "public" => true,
                "hierarchical" => true,
                "show_in_rest" => true,
    ]
    );
    // プロダクト投稿タイプにタグを追加
    register_taxonomy(
        "product-tag",
        "product",
        [
                "label" => "タグ",
                "public" => true,
                "show_in_rest" => true,
    ]
    );

    // 動画投稿タイプ
    register_post_type("movie", [
            "label" => "動画",
            "public" => true,
            "menu_position" => 5,
            "supports" => ["title", "editor", "thumbnail", "custom-fields"],
            "has_archive" => true,
            "show_in_rest" => true
    ]);
    // 動画投稿タイプにカテゴリーを追加
    register_taxonomy(
        "movie-cat",
        "movie",
        [
        "label" => "カテゴリー",
        "public" => true,
        "hierarchical" => true,
        "show_in_rest" => true,
            ]
    );
    // 動画投稿タイプにタグを追加
    register_taxonomy(
        "movie-tag",
        "movie",
        [
            "label" => "タグ",
            "public" => true,
            "show_in_rest" => true,
            ]
    );
});

function post_has_archive($args, $post_type)
{
    if("post" == $post_type) {
        $args["rewrite"] = true;
        $args["has_archive"] = "discription";
        $args["label"] = "記事";
    }
    return $args;
}

add_filter("register_post_type_args", "post_has_archive", 10, 2);
