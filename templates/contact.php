<?php
/*
 * Template Name: Contact
 *
 * Template used on the contact page
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Contact Custom Fields
$intro = get_field('contact_intro');
$form = get_field('contact_form');

get_header(); ?>

<section class="contact-section">
  <div class="container">
    <div class="row">
      <div class="col-10 col-centered">
        <?php echo $intro; ?>

        <?php gravity_form($form['id'], false, false, false, false, true); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
