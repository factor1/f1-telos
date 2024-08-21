<?php
/*
 * Extra Hero 2
 *
 * Template part used on the home template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.5.0
 */

// Extra Hero Custom Fields
$bg = wp_get_attachment_image_src(get_field('extra_hero_2_background_image'), 'hero');
$topText = get_field('extra_hero_2_top_text');
$content = get_field('extra_hero_2_content');
?>

<section class="extra-hero" style="background: url('<?php echo $bg[0]; ?>') 90% top/cover no-repeat">

  <?php
  if( $topText ) : ?>

    <div class="extra-hero__top-text">
      <h3><?php echo $topText; ?></h3>
    </div>

  <?php endif; ?>

  <div class="container">
    <div class="row">
      <div class="col-12 text-center">

        <?php echo $content;

        if( have_rows('extra_hero_2_buttons') ): ?>
          <div class="buttons">
            <?php while( have_rows('extra_hero_2_buttons') ): the_row(); 
              $btnColor = get_sub_field('button_color');
              $btn = get_sub_field('button_link');
              ?>
                <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnColor; ?>" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                  <?php echo $btn['title']; ?>
                </a>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>
