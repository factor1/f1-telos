<?php
/*
 * CTA Banner (home)
 *
 * Template part used on the home template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.5.0
 */

 //Custom fields
 $section_toggle = get_field('home_cta_banner_toggle');
 $bg = wp_get_attachment_image_src(get_field('home_cta_banner_background_image'), 'hero');
 $content = get_field('home_cta_content');
 $discount = get_field('home_cta_discount_price'); ?>

<?php if($section_toggle): ?>
  <section class="cta-banner" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat">
    <div class="container">
      <div class="row">
        <div class="col-8 col-centered">
          <div class="cta-banner__container">
            <?php echo  $content; ?>
            <?php if($discount): ?>
              <p class="banner-discount">& SAVE <span><?php echo $discount; ?></span></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>