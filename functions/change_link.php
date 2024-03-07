<!-- カスタム投稿タイプの投稿のパーマリンクを自動で設定する -->
<?php

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
