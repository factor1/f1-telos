<?php
/*
 * Text/Image Split (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Text/Image Split Custom Fields
$layout = get_sub_field('text_image_split_layout_option'); // Image on left or right
$media = get_sub_field('text_image_split_media_toggle'); // Image or video
$image = get_sub_field('text_image_split_image');
$img = wp_get_attachment_image_src($image, 'form_images_split_grid');
$alt = get_post_meta($image, '_wp_attachment_image_alt', true);
$video = get_sub_field('text_image_split_video');
$content = get_sub_field('text_image_split_content');
$btnToggle = get_sub_field('text_image_split_button_toggle');
$btnAlign = get_sub_field('text_image_split_button_alignment');
$btn = get_sub_field('text_image_split_button');
$btnColor = get_sub_field('text_image_split_button_color');

// Conditional classes
$rowClass = $layout == 'right' ? ' row--reverse' : ''; ?>

<section class="text-image-split">
  <div class="container">
    <div class="row<?php echo $rowClass; ?>">

      <?php // Image or video ?>
      <div class="col-6 text-center">
        <?php if( $media == 'image' ) : ?>
          <img src="<?php echo $img[0]; ?>" alt="<?php echo $alt; ?>">
        <?php else : ?>
          <div class="flex-video">
            <?php echo $video; ?>
          </div>
        <?php endif; ?>
      </div>

      <?php // Text ?>
      <div class="col-6">
        <?php echo $content;

        // Optional button
        if( $btnToggle && $btn ) : ?>
          <div class="text-<?php echo $btnAlign; ?>">
            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnColor; ?>" role="link" title="<?php echo $btn['title']; ?>">
              <?php echo $btn['title']; ?>
            </a>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>
