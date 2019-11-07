<?php
/*
 * Testimonials CPT Archive
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

get_header();

$total = wp_count_posts('testimonial')->publish;

if( have_posts() ) : ?>

  <section class="testimonials-archive">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="script script--blue">Testimonials</h1>
        </div>

        <div class="col-10 col-centered">

          <?php while( have_posts() ) : the_post(); ?>

            <div class="col-6 text-center">

              <?php get_template_part('parts/global/testimonial'); ?>

            </div>

          <?php endwhile; ?>

        </div>

        <?php if( $total > 8 ) : ?>

          <div class="col-12 text-center" id="load-more">
            <button class="button button--clay">Load More Testimonials</button>
          </div>

        <?php endif; ?>

      </div>
    </div>
  </section>

<?php endif;

get_footer(); ?>
