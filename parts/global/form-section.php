<?php
/*
 * Form Section (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Form Section Custom Fields
$colSpan = get_sub_field('form_section_column_span');
$intro = get_sub_field('form_section_intro');
$form = get_sub_field('form_section_form'); ?>

<section class="form-section">
  <div class="container">
    <div class="row">
      <div class="col-<?php echo $colSpan; ?> col-centered">
        <?php echo $intro; ?>

        <?php gravity_form($form['id'], false, false, false, false, true); ?>
      </div>
    </div>
  </div>
</section>
