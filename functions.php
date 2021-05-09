<?php
// サムネイル
add_theme_support('post-thumbnails');

// css jsの読み込み
function myportfolio_scripts() {
  wp_enqueue_style('style',   get_template_directory_uri().'/style.css');
  wp_enqueue_style('reset',   get_template_directory_uri().'/css/_reset.css');
  wp_enqueue_style('module',   get_template_directory_uri().'/css/module.css');
  wp_enqueue_style('header',  get_template_directory_uri().'/css/header.css');
  wp_enqueue_style('content', get_template_directory_uri().'/css/content.css');
  wp_enqueue_style('footer',  get_template_directory_uri().'/css/footer.css');
  wp_enqueue_style('prism',   get_template_directory_uri().'/css/prism.css');
  wp_enqueue_script('header', get_template_directory_uri().'/js/header.js');
  wp_enqueue_script('article', get_template_directory_uri().'/js/article.js');
  wp_enqueue_script('prism',  get_template_directory_uri().'/js/prism.js');
}
add_action( 'wp_enqueue_scripts', 'myportfolio_scripts' );

// メニュー機能
register_nav_menus(
  array(
  'gloval-navigation' => 'グローバル', 
  'footer-navigation' => 'フッター',
  )
);

// ウィジェット登録
function my_widgets_init() {

	register_sidebar( array(
		'name' => 'サイドバー',
    'id' => 'sidebar_widget',
    'before_widget' => '',
		'after_widget' => ''
  ));

  register_sidebar( array(
		'name' => 'フッターAbout',
    'id' => 'about_widget',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<div class="footer-content-title">',
		'after_title' => '</div>',
  ));
  
}
add_action( 'widgets_init', 'my_widgets_init' );

?>