<?php
/**
 * The 404 Not Found template.
 *
 * Used when WordPress encounters an unknown URL.
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

get_header(); ?>

<section class="error-404">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="script script--green">404</h1>

        <h2>Page Not Found</h2>

        <p>Please head back to the <a href="<?php echo esc_url(home_url()); ?>">home page</a> and try again.</p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
