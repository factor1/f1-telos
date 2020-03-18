<?php
/*
 * Product Grid (home)
 *
 * Template part used on the home template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.5.0
 */

$intro = get_field('product_grid_intro');

if( have_rows('product_grid') ) : ?>

  <section class="product-grid">
    <div class="container">
      <div class="row row--justify-content-center">

        <div class="col-10 col-centered">
          <?php echo $intro; ?>
        </div>

        <?php while( have_rows('product_grid') ) : the_row();
          // Product Grid Custom Subfields
          $bg = wp_get_attachment_image_src(get_sub_field('background'), 'product_grid');
          $title = get_sub_field('title');
          $link = get_sub_field('link'); ?>

          <div class="col-4 sm-col-6 stretch text-center">
            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" style="background: url('<?php echo $bg[0]; ?>') center/cover no-repeat">
              <h3><?php echo $title; ?></h3>
            </a>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; ?>
