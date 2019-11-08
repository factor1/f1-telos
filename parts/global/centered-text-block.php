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

// Centered Text Block Custom Fields
$colSpan = $isSingle ? '10' : get_sub_field('centered_text_block_column_span');
$content = get_sub_field('centered_text_block_content'); ?>

<section class="centered-text-block">
  <div class="container">
    <div class="row">
      <div class="col-<?php echo $colSpan; ?> col-centered">
        <?php if( $isSingle ) :
          the_content();
        else :
          echo $content;
        endif; ?>
      </div>
    </div>
  </div>
</section>
