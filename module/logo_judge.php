<?php
  $absolute_path = get_template_directory();
  $category = get_the_category()[0]->cat_name;
  $category = ($category == 'PROGRAMING' || $category == 'INFRA')? get_the_category()[1]->cat_name : $category;
  switch ($category) :
    case "Uncategorized":
?>
  <?php include( "{$absolute_path}/icon/ruby.html"); ?>
  <?php break; ?>

  <?php case "Ruby":?>
    <?php include( "{$absolute_path}/icon/ruby-wordmark.html"); ?>
    <?php break; ?>

  <?php case "Rails":?>
    <?php include( "{$absolute_path}/icon/rails-wordmark.html"); ?>
    <?php break; ?>

  <?php case "TypeScript":?>
    <?php include( "{$absolute_path}/icon/typescript.html"); ?>
    <?php break; ?>

  <?php case "Vue":?>
    <?php include( "{$absolute_path}/icon/vue-wordmark.html"); ?>
    <?php break; ?>

  <?php case "Git":?>
    <?php include( "{$absolute_path}/icon/git-wordmark.html"); ?>
    <?php break; ?>

  <?php case "Docker":?>
    <?php include( "{$absolute_path}/icon/docker-wordmark.html"); ?>
    <?php break; ?>

  <?php case "Nginx":?>
    <?php include( "{$absolute_path}/icon/nginx.html"); ?>
    <?php break; ?>

  <?php case "MySQL":?>
    <?php include( "{$absolute_path}/icon/mysql.html"); ?>
    <?php break; ?>

  <?php case "Linux":?>
    <?php include( "{$absolute_path}/icon/linux.html"); ?>
    <?php break; ?>

  <?php case "JavaScript":?>
    <?php include( "{$absolute_path}/icon/javascript.html"); ?>
    <?php break; ?>

  <?php case "Heroku":?>
    <?php include( "{$absolute_path}/icon/heroku.html"); ?>
    <?php break; ?>

  <?php case "Slack":?>
    <?php include( "{$absolute_path}/icon/slack-wordmark.html"); ?>
    <?php break; ?>

  <?php case "Wordpress":?>
    <?php include( "{$absolute_path}/icon/wordpress.html"); ?>
    <?php break; ?>

  <?php case "React":?>
    <?php include( "{$absolute_path}/icon/react.html"); ?>
    <?php break; ?>

  <?php case "Python":?>
    <?php include( "{$absolute_path}/icon/python.html"); ?>
    <?php break; ?>

  <?php case "php":?>
    <?php include( "{$absolute_path}/icon/php.html"); ?>
    <?php break; ?>

  <?php case "C":?>
    <?php include( "{$absolute_path}/icon/c.html"); ?>
    <?php break; ?>

  <?php case "Apple":?>
    <?php include( "{$absolute_path}/icon/apple.html"); ?>
    <?php break; ?>

  <?php case "Apache":?>
    <?php include( "{$absolute_path}/icon/apache.html"); ?>
    <?php break; ?>
<?php endswitch ?>