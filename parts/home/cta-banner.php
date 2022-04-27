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
 $discount = get_field('home_cta_discount_price');
 $message = get_field('home_cta_small_message');
 $link = get_field('home_cta_link');
 $padding_class = $message ? 'msg-padding' : '';
 ?>

<?php if($section_toggle): ?>
  <section class="cta-banner" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat">
    <div class="container <?php echo $padding_class; ?>">
      <div class="row">
        <div class="col-8 col-centered">
          <?php if($link): ?>
            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>">
          <?php endif; ?>

            <div class="cta-banner__container">
              <?php echo  $content; ?>
              <?php if($discount): ?>
                <p class="banner-discount">& SAVE <span><?php echo '$'.$discount; ?></span></p>
              <?php endif; ?>
            </div> 
            
          <?php if($link): ?>
            </a>
          <?php endif; ?>
        </div>
        <?php if($message): ?>
          <div class="col-8 col-centered cta-banner__message">
            <?php echo $message; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>