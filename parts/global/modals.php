<?php
/*
 * Modals
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Modals Custom Fields
$homeHeroVideoToggle = get_field('home_hero_video_toggle');
$homeHeroVideo = get_field('home_hero_video');
$iPadVideo = get_field('ipad_video');

if( is_page_template('templates/home.php') ) :

  // Hero Modal
  if( $homeHeroVideoToggle ) : ?>

    <div class="modal micromodal-slide" id="home-hero" aria-hidden="true">
      <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-title">
          <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>

          <div id="home-hero-content">
            <div class="flex-video">
              <?php echo $homeHeroVideo; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php endif;

  // iPad Modal
  if( $iPadVideo ) : ?>

    <div class="modal micromodal-slide" id="ipad" aria-hidden="true">
      <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-title">
          <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>

          <div id="ipad-content">
            <div class="flex-video">
              <?php echo $iPadVideo; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php endif;

endif; ?>
