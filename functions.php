<?php

require_once('functions/change_link.php');
require_once('functions/cpt_register_movie.php');
require_once('functions/cpt_register_product.php');
require_once('functions/link_enqueue.php');

function post_has_archive($args, $post_type)
{
	$labels = [
		"singular_name" => "技術記事",
		"edit_item" => "product",
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
