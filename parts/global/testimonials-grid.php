<?php
/*
 * Testimonials Grid (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.2.0
 */

// Check if default template
$isDefault = is_page() && !is_page_template();

// Testimonials Section Custom Fields
$headline = $isDefault ? get_sub_field('testimonials_grid_section_headline') : get_field('testimonials_grid_section_headline');
$testimonials = $isDefault ? get_sub_field('grid_section_testimonials') : get_field('grid_section_testimonials');
$btn = $isDefault ? get_sub_field('testimonials_grid_button') : get_field('testimonials_grid_button');

if( $testimonials ) : ?>

  <section class="testimonials-archive">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="script script--blue"><?php echo $headline; ?></h1>
        </div>

        <div class="col-10 col-centered">

          <?php foreach( $testimonials as $post ) :
            setup_postdata($post); ?>

            <div class="col-6 text-center">

              <?php get_template_part('parts/global/testimonial'); ?>

            </div>

          <?php endforeach; wp_reset_postdata(); ?>

        </div>

        <?php if( $btn ) : ?>

          <div class="col-12 text-center">
            <a href="<?php echo $btn['url']; ?>" class="button button--clay" role="link" title="<?php echo $btn['title']; ?>">
              <?php echo $btn['title']; ?>
            </a>
          </div>

        <?php endif; ?>

        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
