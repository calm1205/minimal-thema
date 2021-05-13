<?php get_header(); ?>

  <div class="top">
    <div class="top-title">
      <h1>
        <a href="<?php bloginfo('url') ?>">Ginnan blog</a>
      </h1>
      <div class="top-title-sub">
        銀杏ブログへようこそ。<br>
        主にプログラミングの学習アウトプットです。
      </div>
    </div>
  </div>
  
  <?php if (have_posts()):?>
    <div class="greet">
      <div class="greet-box">
        <div class="line"></div>
        <div class="title">blogs</div>
        <div class="detail">
          2年間メーカーSEとして勤務した後、プログラミング教育事業へ転職。<br>
          タイトルの由来は居酒屋でたまたま銀杏串を食べてる時にブログやろうと思い立ったから。<br>
          無駄なく”シンプルなブログ”を目指したい。
        </div>
        <div class="logs"></div>
      </div>
    </div>
  <?php endif;?>

  <content>
    <?php if ( have_posts() ) : ?>
      <div class="articles">
        <?php while ( have_posts() ) : the_post(); ?>
          <article class="article">
            <a href="<?php the_permalink(); ?>" class="article-thumbnail">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( '', array('class' => 'article-image')); ?>
              <?php else : ?>
                <!-- サムネイル未設定はカテゴリーからアイコン表示 -->
                <?php include('module/logo_judge.php')?>
              <?php endif; ?>
            </a>

            <div class="article-top">
              <div class="article-top-category"><?php the_category( ' ' ); ?></div>
              <div class="article-top-date"><?php the_time('Y/n/j'); ?></div>
            </div>
            <a href="<?php the_permalink(); ?>">
              <div class="article-title"><?php the_title(); ?></div>
            </a>
          </article>
          <?php $index++; ?>
        <?php endwhile; ?>

        <?php include('module/pagination.php');?>
      </div>

    <?php else : ?>
      <div class="articles" style="width: 100%;">
        <img src="<?php echo get_template_directory_uri(); ?>/image/sitdown.png" class="no-search-hit">
        <p class="no-search-text">その検索にヒットするタイトルの記事はありません。。。</p>
      </div>
    <?php endif; ?>
  </content>
  <?php get_sidebar(); ?>

  <?php get_footer(); ?>
  <?php wp_footer(); ?>

</body>
</html>