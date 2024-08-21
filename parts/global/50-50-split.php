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

$full_width_toggle =  get_sub_field('50_50_splits_full_width_toggle');
$row_class = $full_width_toggle ? ' row--full-width' : '';
$section_class = $full_width_toggle ? ' full-width' : '';

if( have_rows('50_50_splits') ) : ?>

  <section class="fifty-split <?php echo $section_class; ?>">
    <div class="container">
      <div class="row <?php echo $row_class; ?>">

        <?php while( have_rows('50_50_splits') ) : the_row();
          $content = get_sub_field('content');
          $btnToggle = get_sub_field('button_toggle');
          $btn = get_sub_field('button');
          $img = get_sub_field('background_image');
          $image = wp_get_attachment_image_src($img, 'large');
          ?>

          <div class="col-6 sm-col-11 sm-col-centered stretch" style="background: url(<?php echo $image[0]; ?>) center/cover;">
            <div>
              <?php echo $content; ?>
            </div>

            <?php if( $btnToggle && $btn ) : ?>

              <div class="text-center">
                <a href="<?php echo esc_url($btn['url']); ?>" class="button button--grass" role="link" title="<?php echo $btn['title']; ?>" target="<?php echo $btn['target']; ?>">
                  <?php echo $btn['title']; ?>
                </a>
              </div>


            <?php endif; ?>

          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; ?>
