<div class="search">
  <div class="search-box">
    <form method="get" action="<?php home_url(); ?>">
      <input type="text" class="search-form" name="s" placeholder="Search for...">
      <i class="fas fa-search search-icon"></i>
    </form>
    <div class="icon">
      <?php $categories = get_categories(); ?>
      <?php foreach($categories as $category): ?>
        <?php $category_name = strtolower($category->name); ?>
        <?php $category_link = get_category_link($category->term_id); ?>
        <?php $template_directory = get_template_directory_uri(); ?>
        <?php if($category_name != 'programing' && $category_name != 'infra' && $category_name != 'life'): ?>
          <a href="<?php echo $category_link; ?>">
            <?php include("icon/{$category_name}.html");?>
            <span><?php echo $category_name;?></span>
          </a>
        <?php endif; ?>
      <?php endforeach;?>
    </div>
  </div>
</div>