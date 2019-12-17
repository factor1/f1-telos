<?php
/*
 * Form/Image Split (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Form/Image Split Custom Fields
$bg = wp_get_attachment_image_src(get_sub_field('form_image_split_background'), 'form_images_split');
$image = get_sub_field('form_image_split_image');
$img = wp_get_attachment_image_src($image, 'form_image_split_foreground');
$alt = get_post_meta($image, '_wp_attachment_image_alt', true);
$intro = get_sub_field('form_image_split_intro');
$form = get_sub_field('form_image_split_form'); ?>

<section class="form-image-split" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat">
  <div class="container">
    <div class="row">

      <?php // Image ?>
      <div class="col-5 stretch">
        <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
      </div>

      <?php // Text & Form ?>
      <div class="col-7 stretch">
        <?php echo $intro; ?>

        <?php gravity_form($form['id'], false, false, false, false, true); ?>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrow-white.svg" class="arrow sm-hide" alt="Arrow">
      </div>

    </div>
  </div>
</section>
