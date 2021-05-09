<div class="side">
  <?php dynamic_sidebar( 'sidebar_widget' ); ?>

  <?php
    /* タグ付きの投稿
    <div class="recent">
      <div class="recent-title">Pickup Post</div>
      <?php $sub_query = new WP_Query( 'tag=subpickup' ); ?>
      <?php if ( $sub_query->have_posts() ) : ?>
        <?php while ( $sub_query->have_posts() ) : $sub_query->the_post(); ?>
          <a href="<?php the_permalink(); ?>">
            <div class="side-article">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( '', array('class' => 'side-article-image')); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/image/sauna.jpeg" class="article-image">
                <?php endif; ?>
                <div class="side-article-title"><?php the_title(); ?></div>
              </div>
            </a>
        <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
      <?php endif; ?>
    </div>
    */
  ?>
</div>