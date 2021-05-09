<!-- ページネーション -->
<?php 
  $last_page = $wp_query->max_num_pages;
  $current_page = get_query_var('paged');
  $current_page = $current_page == 0 ? '1' : $current_page;
  $next_page  = $current_page != $last_page ? $current_page + 1 : null;
  $previous_page = $current_page > 1 ? $current_page - 1 : null;
?>

<div class="pagination">
    <?php if($previous_page):?>
      <a href="<?php echo get_pagenum_link(1); ?>">top</a>
    <?php endif; ?>

    <div class="pagination-number">
      <?php if($previous_page):?>
        <a href="<?php echo get_pagenum_link($previous_page); ?>" class='number'>
          <?php echo $previous_page; ?>
        </a>
      <?php endif; ?>
      <a href="<?php echo get_pagenum_link($current_page); ?>" class="number current">
        <?php echo $current_page; ?>
      </a>
  
      <?php if($next_page): ?>
        <a href="<?php echo get_pagenum_link($next_page); ?>" class='number'>
          <?php echo $next_page ?>
        </a>
        
        <?php if($last_page > 4): ?>
          <span>...</span>
        <?php endif;?>
          
        <a href="<?php echo get_pagenum_link($last_page); ?>" class='number'>
          <?php echo $last_page ?>
        </a>
      <?php endif;?>
    </div>

    <?php if($next_page): ?>
      <a href="<?php echo get_pagenum_link($next_page); ?>">next</a>
    <?php endif;?>
</div>