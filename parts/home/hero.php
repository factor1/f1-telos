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
$videoToggle = get_field('home_hero_video_toggle');
$btnText = get_field('home_hero_button_text');
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

        // Optional video modal
        if( $videoToggle ) : ?>
          <button class="button button--clay" data-micromodal-trigger="home-hero"><i class="far fa-play-circle"></i> <?php echo $btnText; ?></button>
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
