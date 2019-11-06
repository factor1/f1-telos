<?php
/*
 * Testimonial Slider 1
 *
 * Template part used on the home template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Testimonial Slider 1 Custom Fields
$testimonials = get_field('home_testimonials_1');

if( $testimonials ) : ?>

  <section class="home-testimonials">
    <div class="container">
      <div class="row">
        <div class="col-10 sm-col-10 col-centered text-center home-testimonials__slider">

          <?php foreach( $testimonials as $post ) :
            setup_postdata($post);

            // Testimonial Custom Fields
            $type = get_field('testimonial_type'); // T/F video testimonial
            $content = $type ? get_field('testimonial_video') : get_field('testimonial');
            $author = $type ? false : get_field('author'); ?>

            <div class="home-testimonials__testimonial">

              <?php if( $type ) : ?>

                <div class="flex-video">
                  <?php echo $content; ?>
                </div>

              <?php else : ?>

                <h5 class="testimonial__text"><?php echo $content; ?></h5>

                <h6 class="testimonial__author">&mdash; <?php echo $author; ?></h6>

              <?php endif; ?>

            </div>

          <?php endforeach; wp_reset_postdata(); ?>

        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
