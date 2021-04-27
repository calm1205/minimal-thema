<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>銀杏ブログ</title>
  <script src="https://kit.fontawesome.com/5e5ceae3ab.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
</head>
<body>

  <!-- 展開されるメニュー -->
  <div class="menu hidden">
    <div class="menu-title">MENU</div>

    <?php
      $defaults = array(
        'menu_class'      => 'header-menu',
        'container'       => false,
        'link_before'     => '',
        'link_after'      => '',
        'theme_location'  => 'gloval-navigation',
      );
      wp_nav_menu( $defaults );
    ?>
    <div class="close">CLOSE</div>
  </div>

  <!-- 検索フォーム -->
  <div class="search-view hidden">
    <i class="fas fa-times"></i>
    <div class="search-view-box">
      <?php get_template_part( 'searchform2' ); ?>
    </div>
  </div>

  <header class="header">
    <div class="header-box">
      <i class="fas fa-bars"></i>
      <?php
        $defaults = array(
          'menu_class'      => 'header-menu',
          'container'       => false,
          'link_before'     => '',
          'link_after'      => '',
          'theme_location'  => 'gloval-navigation',
        );
        wp_nav_menu( $defaults );
        ?>
      <div class="header-search">
        <i class="fas fa-search"></i>
      </div>
    </div>
  </header>