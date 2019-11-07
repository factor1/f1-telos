<?php
/*
 * 3-Column Grid
 *
 * Template part used on the home template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// 3-Column Grid Custom Fields
$intro = get_field('3_col_grid_intro');
$btnText = get_field('3_col_grid_button_text');
$video = get_field('3_col_grid_video'); ?>

<section class="three-column-grid">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php echo $intro; ?>
      </div>

      <?php if( have_rows('3_col_grid') ) : while( have_rows('3_col_grid') ) : the_row();
        $icon = wp_get_attachment_image_src(get_sub_field('icon'), 'medium');
        $content = get_sub_field('content'); ?>

        <div class="col-4 md-col-6 text-center">
          <img src="<?php echo $icon[0]; ?>" class="three-column-grid__icon" alt="Community icon">

          <?php echo $content; ?>
        </div>

      <?php endwhile; endif;

      // Optional modal
      if( $video ) : ?>

        <div class="col-12 text-center">
          <button class="button button--clay" data-micromodal-trigger="3-col-grid"><i class="far fa-play-circle"></i> <?php echo $btnText; ?></button>
        </div>

      <?php endif; ?>

    </div>
  </div>
</section>
