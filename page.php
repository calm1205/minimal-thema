<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <title>Minimal thema</title>
  <script src="https://kit.fontawesome.com/5e5ceae3ab.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="_reset.css">
  <link rel="stylesheet" href="header.css">
  <link rel="stylesheet" href="content.css">
  <link rel="stylesheet" href="footer.css">

  <script type="text/javascript" src="header.js"></script>
</head>
<body>

  <!-- 展開されるメニュー -->
  <div class="menu hidden">
    <div class="menu-title">MENU</div>
    <ul class="menu-list">
      <a href="#">
        <li class="category-btn">
          <div class="menu-list-title menu-list-top">HOME</div>
        </li>
      </a>
      <li>
        <div class="menu-list-title">CATEGORIES</div>
        <ul class="second-list">
          <a href="#"><li class="category-btn">Rails</li></a>
          <a href="#"><li class="category-btn">Linux</li></a>
          <a href="#"><li class="category-btn">Jave Script</li></a>
          <a href="#"><li class="category-btn">Git</li></a>
        </ul>
      </li>
      <li>
        <div class="menu-list-title">LIFE</div>
        <ul class="second-list">
          <a href="#"><li class="category-btn">Life Hack</li></a>
          <a href="#"><li class="category-btn">Mind</li></a>
        </ul>
      </li>
      <a href="#">
        <li class="category-btn">
          <div class="menu-list-title">ABOUT ME</div>
        </li>
      </a>
    </ul>
    <div class="close">CLOSE</div>
  </div>

  <!-- 検索フォーム -->
  <div class="search-view hidden">
    <i class="fas fa-times"></i>
    <div class="search-view-box">
      <input type="text" class="search-view-box-input" placeholder="Start Typing Here ...">
      <div class="search-view-box-detail">
        Input your search keywords and Enter.
      </div>
    </div>
  </div>

  <header class="header">
    <i class="fas fa-bars"></i>
    <ul class="header-menu">
      <a href=""><li class="home">HOME</li></a>
      <a href=""><li class="categories">CATEGORIES</li></a>
      <a href=""><li class="mind">LIFE</li></a>
      <a href=""><li class="about-me">ABOUT ME</li></a>
    </ul>
    <div class="header-search">
      <i class="fas fa-search"></i>
    </div>
  </header>

  <div class="top">
    <div class="top-title">銀杏ブログ</div>
    <div class="top-sub-title">プログラミングとかマインドの発信です。</div>
  </div>
  
  <content>
    <div class="articles">
      <article class="article">
        <div class="article-top">
          <div class="article-top-date">2020/01/01</div>
          <h1 class="article-top-title">payjpでのサブスクリプション決済payjpでのサブスクリプション決済</h1>
          <div class="article-top-category">rails</div>
        </div>
        <img src="image/sauna.jpeg" class="article-image">
        <div class="article-detail">
          <div class="article-detail-text">
            payjpでのサブスクリプション決済payjpでのサスクリプション決済payjpでのサスクリプション決済payjpでのサスクリプション決済payjpでのサブスクョン決済payjpでのサブスクリプション決済payjpでのサブスクリプション決済
          </div>
        </div>
      </article>
    </div>

  </content>

  <footer>
    <div class="footer-content">
      <div class="footer-content-box">
        <div class="footer-content-title">About me</div>
        <div class="about-me-content">
          payjpでのサブスクリプション決済payjpでのサブスクリプション決済
          payjpでのサブスクリプション決済payjpでのサブスクリプション決済
        </div>
      </div>
      <div class="footer-content-box">
        <div class="footer-content-title">Portfolio</div>
        <ul class="portfolio-list">
          <li class="first">Google</li>
          <li class="seconde">facebook</li>
          <li class="third">Amazon</li>
          <li></li>
        </ul>
      </div>
      <div class="footer-content-box">
        <div class="footer-content-title">Blank</div>
      </div>
    </div>
    <div class="copyright">
      Copyright - Nagi Moriyama, 2020 All Rights Reserved.
    </div>
  </footer>
</body>
</html>