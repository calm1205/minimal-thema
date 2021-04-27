<footer>
  <div class="footer-content">
    <div class="footer-content-box">
      <?php dynamic_sidebar( 'about_widget' ); ?>
    </div>

    <div class="footer-content-box">
      <div class="footer-content-title">Portfolio</div>
        <?php
          $defaults = array(
            'menu_class'      => 'portfolio-list',
            'container'       => false,
            'link_before'     => '',
            'link_after'      => '',
            'theme_location'  => 'footer-navigation',
          );
          wp_nav_menu( $defaults );
        ?>
        <li class="last-list"></li>
    </div>

    <div class="footer-content-box">
      <div class="footer-content-title">Blank</div>
    </div>
  </div>

  <div class="copyright">
    Copyright - Nagi Moriyama, 2020 All Rights Reserved.
  </div>

</footer>