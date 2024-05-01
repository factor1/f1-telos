<?php
/*
 * Centered Text Block (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Check if single
$isSingle = is_single();

// Check if single video
$isVideo = is_singular('community-video');

// Centered Text Block Custom Fields
$colSpan = $isSingle || $isVideo ? '10' : get_sub_field('centered_text_block_column_span');
$content = get_sub_field('centered_text_block_content');
$btnToggle = $isSingle || $isVideo ? false : get_sub_field('centered_text_block_button_toggle');
$btnAlign = get_sub_field('centered_text_block_button_alignment');
$btn = get_sub_field('centered_text_block_button');
$btnColor = get_sub_field('centered_text_block_button_color');
$padding_toggle = get_sub_field('centered_text_block_padding_toggle');
$padding_class = $padding_toggle ? ' no-padding' : '';
?>

<section class="centered-text-block <?php echo $padding_class; ?>">
  <div class="container">
    <div class="row">
      <div class="col-<?php echo $colSpan; ?> col-centered">
        <?php if( $isSingle || $isVideo ) :
          the_content();
        else :
          echo $content;
        endif;

        // Video section
        if( $isVideo ) :
          // Video CPT Custom Fields
          $link = get_field('video_link'); ?>

          <div class="flex-video">
            <iframe src="<?php echo $link; ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
          </div>

        <?php endif;

        // Optional button
        if( $btnToggle && $btn ) : ?>

          <div class="text-<?php echo $btnAlign; ?>">
            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnColor; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
              <?php echo $btn['title']; ?>
            </a>
          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
