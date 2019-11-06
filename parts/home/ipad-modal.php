<?php
/*
 * iPad Modal
 *
 * Template part used on the home template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// iPad Modal Custom Fields
$img = wp_get_attachment_image_src(get_field('ipad_image'), 'ipad');
$video = get_field('ipad_video');
$callout = get_field('ipad_callout_text'); ?>

<section class="ipad-modal">
  <div class="container">
    <div class="row">
      <div class="col-10 col-centered text-center">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ipad-in-hands.png" alt="iPad in hands">

        <div class="ipad-modal__img" data-micromodal-trigger="ipad">
          <div style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat"></div>
        </div>

        <?php if( $callout ) : ?>
          <p class="callout--small"><?php echo $callout; ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
