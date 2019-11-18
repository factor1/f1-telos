<?php
/*
 * Site Header
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

$menu = is_user_logged_in() ? 'primary-in' : 'primary'; ?>

<header class="site-header">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <?php // Logo ?>
        <a href="<?php echo esc_url(home_url()); ?>" class="site-header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="<?php echo get_bloginfo('name'); ?>">
        </a>

        <?php // Primary nav
        wp_nav_menu(
          array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => 'nav--primary md-hide-down',
          )
        ); ?>

      </div>
    </div>
  </div>
</header>

<?php // Menu icon ?>
<button class="menu-icon"><span></span></button>

<?php // Mobile menu
wp_nav_menu(
  array(
    'theme_location' => $menu,
    'container' => 'nav',
    'container_class' => 'nav--mobile',
  )
); ?>
