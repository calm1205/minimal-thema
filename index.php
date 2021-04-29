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
  
  <content>
    <?php if ( have_posts() ) : ?>
      <div class="articles">
        <?php  while ( have_posts() ) : the_post(); ?>
          <article class="article">
            <div class="article-top">
              <div class="article-top-date"><?php the_time('Y/n/j'); ?></div>
              <a href="<?php the_permalink(); ?>">
                <div class="article-top-title"><?php the_title(); ?></div>
              </a>
              <div class="article-top-category"><?php the_category( ' ' ); ?></div>
            </div>

            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( '', array('class' => 'article-image')); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/image/sauna.jpeg" class="article-image">
            <?php endif; ?>
            <div class="article-detail">
              <div class="article-detail-text"><?php the_excerpt(); ?></div>
              <a href="<?php the_permalink(); ?>">
                <div class="read-more">READ MORE</div>
              </a>
            </div>
          </article>
        <?php endwhile; ?>

        <div class="pagination">
          <div class="previous">
            <?php previous_posts_link('previous'); ?>
          </div>
          <div class="next">
            <?php next_posts_link('next'); ?>
          </div>
        </div>
      </div>

      <?php get_sidebar(); ?>
    <?php else : ?>
      <div class="articles" style="width: 100%;">
        <img src="<?php echo get_template_directory_uri(); ?>/image/sitdown.png" class="no-search-hit">
        <p class="no-search-text">その検索にヒットするタイトルの記事はありません。。。</p>
      </div>
    <?php endif; ?>
        
  </content>

  <?php get_footer(); ?>
  <?php wp_footer(); ?>

</body>
</html>