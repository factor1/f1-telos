<?php
/*
 * Plans Grid (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Plans Grid Custom Fields
$intro = get_field('plans_grid_intro', 'option');

if( have_rows('plans', 'option') ) : ?>

  <section class="plans-grid" id="pricing">
    <div class="container">
      <div class="row">
        <div class="col-10 col-centered">
          <?php echo $intro; ?>
        </div>

        <div class="col-11 col-centered">
          <div class="block-grid-3 md-block-grid-2 sm-block-grid-1">

            <?php while( have_rows('plans', 'option') ) : the_row();
              $featured = get_sub_field('feature');
              $name = get_sub_field('plan_name');
              $price = get_sub_field('price');
              $desc = get_sub_field('price_description');
              $content = get_sub_field('content');
              $btn = get_sub_field('button');

              // Conditional classes
              $planClass = $featured ? ' featured' : '';
              $btnClass = $featured ? 'grass' : 'ghost'; ?>

              <div class="col stretch">
                <div class="plans-grid__plan<?php echo $planClass; ?>">
                  <div>
                    <p><?php echo $name; ?></p>

                    <div class="price-group">
                      <h5 class="price"><?php echo $price; ?></h5>

                      <?php if( $desc ) : ?>
                        <p><?php echo $desc; ?></p>
                      <?php endif; ?>
                    </div>
                  </div>

                  <?php echo $content; ?>

                  <div class="text-center">
                    <a href="<?php echo esc_url($btn['url']); ?>" class="button button--<?php echo $btnClass; ?>" role="link" title="<?php echo $btn['title']; ?>">
                      <?php echo $btn['title']; ?>
                    </a>
                  </div>

                </div>
              </div>

            <?php endwhile; ?>

          </div>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
