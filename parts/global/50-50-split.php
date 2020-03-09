<?php
/*
 * 50/50 Split (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.4.0
 */

if( have_rows('50_50_splits') ) : ?>

  <section class="fifty-split">
    <div class="container">
      <div class="row">

        <?php while( have_rows('50_50_splits') ) : the_row();
          $content = get_sub_field('content');
          $btnToggle = get_sub_field('button_toggle');
          $btn = get_sub_field('button'); ?>

          <div class="col-6 sm-col-11 sm-col-centered stretch">
            <div>
              <?php echo $content; ?>
            </div>

            <?php if( $btnToggle && $btn ) : ?>

              <a href="<?php echo esc_url($btn['url']); ?>" class="button button--grass" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                <?php echo $btn['title']; ?>
              </a>

            <?php endif; ?>

          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; ?>
