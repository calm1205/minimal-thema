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

// テキストエディタのタグを追加
function add_shortcode_quicktags() {
  if ( wp_script_is('quicktags') ) {
    echo "
      <script>
        QTags.addButton( 'p', 'p', '<p></p>' );
        QTags.addButton( 'code', 'code', '<code></code>' );
        QTags.addButton( 'power', 'power', '<span style=\"font-weight: bold;\"></span>' );
        QTags.addButton( 'h2', 'h2', '<h2>\\n</h2>' );
        QTags.addButton( 'h3', 'h3', '<h3>\\n</h3>' );
        QTags.addButton( 'h4', 'h4', '<h4>\\n</h4>' );
        QTags.addButton( 'prism_shortcode', 'prism', '<pre class=\"prism line-numbers\" data-line=\"\">\\n<div class=\"filename\"></div><br>\\n<code class=\"language-html\">\\n\\n</code>\\n</pre>' );
        QTags.addButton( 'prism_file_name', 'file_name', '<div class=\"filename\"></div><br>' );
        QTags.addButton( 'prism_simple_shortcode', 'prism-simple', '<pre class=\"prism\">\\n  <code class=\"language-html\">\\n\\n  </code>\\n</pre>' );
        QTags.addButton( 'prism_javascript_shortcode', 'prism-javascript', '<pre class=\"prism\">\\n<code class=\"language-javascript\">\\n\\n</code>\\n</pre>' );
        QTags.addButton( 'prism_typescript_shortcode', 'prism-typescritp', '<pre class=\"prism\">\\n<code class=\"language-typescript\">\\n\\n</code>\\n</pre>' );
        QTags.addButton( 'prism_react_shortcode', 'prism-react', '<pre class=\"prism\">\\n<code class=\"language-jsx\">\\n\\n</code>\\n</pre>' );
        QTags.addButton( 'prism_shell_shortcode', 'prism-shell', '<pre class=\"prism\">\\n<code class=\"language-shell\">\\n\\n</code>\\n</pre>' );
        QTags.addButton( 'left_arrow_shortcode', '<', '＆lt;' );
        QTags.addButton( 'right_arrow_shortcode', '>', '＆gt;' );
        QTags.addButton( 'two_arrow_shortcode', '<>', '＆lt;＆gt;' );
        QTags.addButton( 'triple_list_shortcode', 'list', '<ul>\\n  <li></li>\\n  <li></li>\\n  <li></li>\\n</ul>' );
        QTags.addButton( 'video', 'video', '<video src=\"\" autoplay muted loop />' );
        QTags.addButton( 'center', 'center', '<div class=\"center\">\\n</div>' );
        QTags.addButton( 'parallel', 'parallel', '<div class=\"parallel\">\\n</div>' );
      </script>
    ";
  }
}
add_action( 'admin_print_footer_scripts', 'add_shortcode_quicktags' );

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

// メインのページでのみcafeの投稿を除外
function exclude_category( $query ) {
  if ( $query->is_home() && $query->is_main_query() ) {
    $query->set( 'cat', '-16' ); // 12がcafeカテゴリーのID
  }
}
add_action( 'pre_get_posts', 'exclude_category' );

?>