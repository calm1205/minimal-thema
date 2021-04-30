<?php
  switch (get_the_category()[0]->cat_name) :
    case "Uncategorized":
?>
  <?php include('icon/ruby.html'); ?>
  <?php break; ?>

  <?php case 'Ruby':?>
    <?php include('icon/ruby.html'); ?>
    <?php break; ?>

  <?php case 'Rails':?>
    <?php include('icon/rails.html'); ?>
    <?php break; ?>

  <?php case 'TypeScript':?>
    <?php include('icon/typescript.html'); ?>
    <?php break; ?>

  <?php case 'Vue':?>
    <?php include('icon/vue.html'); ?>
    <?php break; ?>

  <?php case 'Git':?>
    <?php include('icon/git.html'); ?>
    <?php break; ?>

  <?php case 'Docker':?>
    <?php include('icon/docker.html'); ?>
    <?php break; ?>

  <?php case 'Nginx':?>
    <?php include('icon/nginx.html'); ?>
    <?php break; ?>

  <?php case 'MySQL':?>
    <?php include('icon/mysql.html'); ?>
    <?php break; ?>

  <?php case 'Linux':?>
    <?php include('icon/linux.html'); ?>
    <?php break; ?>

  <?php case 'JavaScript':?>
    <?php include('icon/js.html'); ?>
    <?php break; ?>

  <?php case 'Heroku':?>
    <?php include('icon/heroku.html'); ?>
    <?php break; ?>

  <?php case 'Slack':?>
    <?php include('icon/slack.html'); ?>
    <?php break; ?>

  <?php case 'Wordpress':?>
    <?php include('icon/wordpress.html'); ?>
    <?php break; ?>

  <?php case 'React':?>
    <?php include('icon/react.html'); ?>
    <?php break; ?>

  <?php case 'Python':?>
    <?php include('icon/python.html'); ?>
    <?php break; ?>

  <?php case 'php':?>
    <?php include('icon/php.html'); ?>
    <?php break; ?>

  <?php case 'C':?>
    <?php include('icon/c.html'); ?>
    <?php break; ?>

  <?php case 'Apple':?>
    <?php include('icon/apple.html'); ?>
    <?php break; ?>

  <?php case 'Apache':?>
    <?php include('icon/apache.html'); ?>
    <?php break; ?>
<?php endswitch ?>