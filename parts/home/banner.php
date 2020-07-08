<?php
/*
 * Banner
 *
 * Template part used on the home template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.5.0
 */

// Banner Custom Fields
$bg = wp_get_attachment_image_src(get_field('home_banner_background'), 'hero');
$content = get_field('home_banner_content');
$btn = get_field('home_banner_button');
$ribbon = get_field('home_banner_ribbon'); ?>

<section class="home-banner" style="background: url('<?php echo $bg[0]; ?>') 90% top/cover no-repeat">

  <?php // Optional ribbon
  if( $ribbon ) : ?>

    <div class="home-banner__ribbon">
      <h5 class="testimonial__text"><?php echo $ribbon; ?></h5>
    </div>

  <?php endif; ?>

  <div class="container">
    <div class="row">
      <div class="col-9 text-center">
        <?php echo $content;

        // Optional button
        if( $btn ) : ?>

          <a href="<?php echo esc_url($btn['url']); ?>" class="button button--court" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
            <?php echo $btn['title']; ?>
          </a>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
