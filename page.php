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

<div class="article-table-side"></div>
  
<content class="single-article">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article class="article">
      <!-- サムネイル -->
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( '', array('class' => 'article-image')); ?>
      <?php else : ?>
        <a href="<?php the_permalink(); ?>" class="article-thumbnail">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( '', array('class' => 'article-image')); ?>
          <?php else : ?>
            <?php include('module/logo_judge.php')?>
          <?php endif; ?>
        </a>
      <?php endif; ?>

      <div class="article-top">
        <h1 class="article-top-title"><?php the_title(); ?></h1>
      </div>

      <!-- 目次 -->
      <div class="article-table">
        <p>目次</p>
      </div>
      
      <div class="article-detail">
        <?php the_content(); ?>
        <div class="article-detail-date">
          written at <?php the_time('Y/n/j'); ?>.
        </div>
      </div>
    </article>
  <?php endwhile; else : ?>
    <p>記事がありません。</p>
  <?php endif; ?>
</content>
  
  <?php get_sidebar(); ?>
  <?php get_footer(); ?>

</body>
</html>