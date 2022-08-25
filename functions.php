<?php

function theme_files(){
  wp_enqueue_style('main-style', get_theme_file_uri('/dist/css/style.css'),[],1,'all');
  wp_enqueue_script('main-js', get_theme_file_uri('/dist/js/main.js'), NULL, '1.0', true);
}
add_action('wp_enqueue_scripts', 'theme_files');


// 不要な出力を制御
// remove emoji support
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
//rel="next" rel="prev" を非表示にする
remove_action('wp_head','adjacent_posts_rel_link_wp_head');
// WP REST APIを非表示にする
remove_action('wp_head','rest_output_link_wp_head');
// oEmbedを非表示にする
remove_action('wp_head','wp_oembed_add_discovery_links');
// 投稿の RSS フィードリンクを非表示にする
remove_action('wp_head', 'feed_links', 2);
// コメントフィードを非表示にする
remove_action('wp_head', 'feed_links_extra', 3);
// 短縮URLを非表示にする
remove_action('wp_head', 'wp_shortlink_wp_head');
// remove wp-embed
add_action( 'wp_footer', function(){
    wp_dequeue_script( 'wp-embed' );
});

add_action( 'wp_enqueue_scripts', function(){
    // remove block library css and js
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_script( 'comment-reply' );
} );

/** コメント機能オフ */
add_filter( 'comments_open', '__return_false' );


// 基本機能
function theme_features(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_features');