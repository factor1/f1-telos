<?php
/*
 * Modals
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Modals Custom Fields
$iPadVideo = get_field('ipad_video');
$gridVideo = get_field('3_col_grid_video');

if( is_page_template('templates/home.php') ) :

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

  // 3-Col Grid Modal
  if( $gridVideo ) : ?>

    <div class="modal micromodal-slide" id="3-col-grid" aria-hidden="true">
      <div class="modal__overlay" tabindex="-1" data-micromodal-close>
        <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-title">
          <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>

          <div id="3-col-grid-content">
            <div class="flex-video">
              <?php echo $gridVideo; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php endif;

endif; ?>
