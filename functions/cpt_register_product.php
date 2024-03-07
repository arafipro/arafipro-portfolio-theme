<!-- カスタム投稿タイプproduct -->
<?php
// 投稿タイプを追加
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
