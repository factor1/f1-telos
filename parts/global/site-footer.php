<?php
/*
 * Site Footer
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

$menu = is_user_logged_in() ? 'footer-in' : 'footer'; ?>

<footer class="site-footer">
  <div class="site-footer__main">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">

          <?php // Social menu
          prelude_social_menu();

          // Footer nav
          wp_nav_menu(
            array(
              'theme_location' => $menu,
              'container' =>'nav',
              'container_class' => 'nav--footer',
              'depth' => 1,
            )
          ); ?>

        </div>
      </div>
    </div>
  </div>

  <div class="site-footer__credit">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>&copy; <?php echo date('Y') . ' ' . get_bloginfo('name'); ?></p>

          <p>Site by <a href="https://factor1studios.com" class="factor1">factor1</a></p>
        </div>
      </div>
    </div>
  </div>
</footer>
