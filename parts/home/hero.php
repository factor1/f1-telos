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
$videoToggle = get_field('home_hero_modal_video_toggle'); // T/F whether there's a modal video)
$modalBtnText = get_field('home_hero_modal_button_text');
$btn = get_field('home_hero_button');
$btnType = get_field('home_hero_button_type'); // T/F anchor link
$btnClass = $btnType ? ' anchor-scroll' : '';
$callout = get_field('home_hero_callout'); ?>

<section class="hero--home" style="background: url('<?php echo featuredURL('home_hero'); ?>') 10% center/cover no-repeat">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
	      <div class="sm-only"><div style="display: block; height: 135px; width:100%;"></div></div>
	      
        <h1><?php echo $headline; ?></h1>

        <?php // Optional support
        if( $support) : ?>
          <h6 class="support-slim"><?php echo $support; ?></h6>
        <?php endif;

        // Optional modal button
        if( $videoToggle && $modalBtnText ) : ?>

          <button class="button button--clay" data-micromodal-trigger="home-hero"><?php echo $modalBtnText; ?></button>

        <?php endif;

        // Optional button
        if( $btn ) : ?>

          <a href="<?php echo esc_url($btn['url']); ?>" class="button button--clay<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>">
            <?php echo $btn['title']; ?>
          </a>

        <?php endif; ?>
      </div>

      <?php // Optional callout
      if( $callout ) : ?>

        <div class="col-6 sm-col-12 hero-callout">
          <?php echo $callout; ?>
        </div>

      <?php endif; ?>

    </div>
  </div>
</section>
