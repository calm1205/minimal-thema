<?php
// サムネイル
add_theme_support('post-thumbnails');

// css jsの読み込み
function myportfolio_scripts() {
  wp_enqueue_style('style',   get_template_directory_uri().'/css/style.css');
  wp_enqueue_style('reset',   get_template_directory_uri().'/css/_reset.css');
  wp_enqueue_style('header',  get_template_directory_uri().'/css/header.css');
  wp_enqueue_style('content', get_template_directory_uri().'/css/content.css');
  wp_enqueue_style('footer',  get_template_directory_uri().'/css/footer.css');
  wp_enqueue_script('header', get_template_directory_uri().'/js/header.js');
}
add_action( 'wp_enqueue_scripts', 'myportfolio_scripts' );

// メニュー機能
register_nav_menus(
  array(
  'gloval-navigation' => 'グローバル', 
  'footer-navigation' => 'フッター',
  )
); ?>