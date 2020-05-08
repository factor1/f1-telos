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

if( have_rows('grid_blocks') ) : ?>

  <section class="third-split" style="margin-bottom:50px;">
    <div class="container">
      <div class="row">

        <?php while( have_rows('grid_blocks') ) : the_row();
          $content = get_sub_field('grid_block_item');
          $btn = get_sub_field('cta_button'); ?>

          <div class="col-4 sm-col-11 sm-col-centered stretch">
            <div>
              <?php echo $content; ?>
            </div>


              <a href="<?php echo esc_url($btn['url']); ?>" class="button button--grass" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                <?php echo $btn['title']; ?>
              </a>


          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; ?>
