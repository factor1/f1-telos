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
$intro = get_field('home_testimonials_intro');

if( $testimonials ) : ?>

  <section class="home-testimonials">
    <div class="container">
      <div class="row">

        <?php if($intro) : ?>
          <div class="col-12">
            <?php echo $intro; ?>
          </div>
        <?php endif; ?>

        <div class="col-10 sm-col-10 col-centered text-center home-testimonials__slider">

          <?php foreach( $testimonials as $post ) :
            setup_postdata($post);

            // Testimonial Custom Fields
            $type = get_field('testimonial_type'); // T/F video testimonial
            $content = $type ? get_field('testimonial_video') : get_field('testimonial');
            $author = get_field('author');
            $info = get_field('author_info'); ?>

            <div class="home-testimonials__testimonial">

              <?php if( $type ) : ?>

                <div class="flex-video">
                  <?php echo $content; ?>
                </div>

                <?php if($author && $info): ?>
                  <div>
                    <p>
                      <h6 class="testimonial__author">&mdash; <?php echo $author . ', ' . $info; ?></h6>
                    </p>
                  </div>
                <?php endif; ?>

              <?php else : ?>

                <h5 class="testimonial__text"><?php echo $content; ?></h5>

                <h6 class="testimonial__author">&mdash; <?php echo $author . ', ' . $info; ?></h6>

              <?php endif; ?>

            </div>

          <?php endforeach; wp_reset_postdata(); ?>

        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
