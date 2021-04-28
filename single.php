<?php get_header(); ?>

  <div class="top">
    <div class="top-title"><a href="<?php bloginfo('url') ?>">Ginnan blog</a></div>
    <div class="top-sub-title">
      銀杏ブログへようこそ。<br>
      主にプログラミングの学習アウトプットです。
    </div>
  </div>
  
  <content>
    <div class="articles">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="article">
          <div class="article-top">
            <div class="article-top-date"><?php the_time('Y/n/j'); ?></div>
            <h1 class="article-top-title"><?php the_title(); ?></h1>
            <div class="article-top-category"><?php the_category( ' ' ); ?></div>
          </div>

          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( '', array('class' => 'article-image')); ?>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/image/sauna.jpeg" class="article-image">
          <?php endif; ?>
          <div class="article-detail">
            <div class="article-detail-text left-text"><?php the_content(); ?></div>
          </div>
        </article>
      <?php endwhile; else : ?>
        <p>記事がありません。</p>
      <?php endif; ?>

    </div>

    <?php get_sidebar(); ?>

  </content>

  <?php get_footer(); ?>

</body>
</html>