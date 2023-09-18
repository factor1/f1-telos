<?php
/*
 * Highlight Grid (home)
 *
 * Template part used on the home template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.5.0
 */

$intro = get_field('home_highlight_grid_intro');
$section_id = get_field('home_highlight_section_id');

if( have_rows('home_highlight_cards') ) : ?>

  <section class="highlight-grid" id="<?php echo $section_id; ?>">
    <div class="container">
      <div class="row row--justify-content-center">

        <div class="col-12 col-centered">
          <?php echo $intro; ?>
        </div>

        <?php $i=1; while( have_rows('home_highlight_cards') ) : the_row();
          // Highligh Grid Custom Subfields
          $image = wp_get_attachment_image_src(get_sub_field('image'), 'product_grid');
          $content = get_sub_field('content');
          $link = get_sub_field('link'); ?>

          <div class="col-4 md-col-6 sm-col-12 stretch text-center">

            <div class="highlight-grid__single">
              <div class="highlight-content">
                <div class="single-image" style="background: url('<?php echo $image[0]; ?>') center/cover no-repeat"></div>
                <div>
                  <?php echo $content; ?>
                </div>
              </div>
              <?php if($link): ?>
                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button button--clay" ><?php echo $link['title']; ?></a>           
              <?php endif; ?>
            </div>

          </div>

        <?php $i++; endwhile; ?>

      </div>
    </div>
  </section>

<?php endif; ?>
