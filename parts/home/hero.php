<?php
/*
 * Hero (home)
 *
 * Template part used on the home template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Hero Custom Fields
$headline = get_field('home_hero_headline');
$support = get_field('home_hero_support');
$btn = get_field('home_hero_button');
$btnType = get_field('home_hero_button_type'); // T/F anchor link
$btnClass = $btnType ? ' anchor-scroll' : '';
$callout = get_field('home_hero_callout'); ?>

<section class="hero--home" style="background: url('<?php echo featuredURL('home_hero'); ?>') 10% center/cover no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1><?php echo $headline; ?></h1>

        <?php // Optional support
        if( $support) : ?>
          <h6 class="support"><?php echo $support; ?></h6>
        <?php endif;

        if( $btn ) : ?>

          <a href="<?php echo esc_url($btn['url']); ?>" class="button button--clay<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>">
            <?php echo $btn['title']; ?>
          </a>

        <?php endif; ?>
      </div>

      <?php // Optional callout
      if( $callout ) : ?>

        <div class="col-4 sm-col-3">
          <?php echo $callout; ?>
        </div>

      <?php endif; ?>

    </div>
  </div>
</section>
