<?php
/*
 * Headline/Text Split (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Headline/Text Split Custom Fields
$headline = get_field('headline_text_split_headline');
$content = get_field('headline_text_split_content'); ?>

<section class="headline-text-split">
  <div class="container">
    <div class="row">
      <div class="col-6 sm-text-center">
        <?php echo $headline; ?>
      </div>

      <div class="col-5 sm-text-center">
        <?php echo $content; ?>
      </div>
    </div>
  </div>
</section>
