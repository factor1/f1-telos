<?php
/*
 * Form/Images Split
 *
 * Template part used on the home template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

$bg = wp_get_attachment_image_src(get_field('form_images_split_background'), 'form_images_split');
$intro = get_field('form_images_split_intro');
$form = get_field('form_images_split_form'); ?>

<section class="form-images-split" style="background: url('<?php echo $bg[0]; ?>') 10% center/cover no-repeat">
  <div class="container">
    <div class="row row--align-items-center">
      <div class="col-5">
        <?php echo $intro; ?>

        <?php gravity_form($form['id'], false, false, false, false, true); ?>
      </div>

      <?php if( have_rows('form_images_split_images') ) : ?>

        <div class="col-6">

          <?php while( have_rows('form_images_split_images') ) : the_row();
            $img = wp_get_attachment_image_src(get_sub_field('image'), 'form_images_split_grid');
            $caption = get_sub_field('caption'); ?>

            <div class="form-images-split__img text-center" style="background: url('<?php echo $img[0]; ?>') center/cover no-repeat">
              <h5 class="video-title"><?php echo $caption; ?></h5>
            </div>

          <?php endwhile; ?>

        </div>

      <?php endif; ?>

    </div>
  </div>
</section>
