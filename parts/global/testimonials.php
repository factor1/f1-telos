<?php
/*
 * Testimonials Section (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Testimonials Section Custom Fields
$headline = get_field('testimonials_section_headline');
$testimonials = get_field('section_testimonials');
$btnText = get_field('testimonials_section_button_text');

if( $testimonials ) : ?>

  <section class="testimonials-section">
    <div class="container">
      <div class="row">
        <div class="col-10 sm-col-10 col-centered text-center">
          <h1 class="script script--blue"><?php echo $headline; ?></h1>

          <div class="testimonials-section__slider">

            <?php foreach( $testimonials as $post ) :
              setup_postdata($post);

              // Testimonials Custom Fields
              $type = get_field('testimonial_type'); // T/F video testimonial
              $content = $type ? get_field('testimonial_video') : get_field('testimonial');
              $author = $type ? false : get_field('author');
              $stars = $type ? false : get_field('star_count');

              // Conditional classes
              $typeClass = $type ? '' : ' text'; ?>

              <div class="testimonial<?php echo $typeClass; ?>">

                <?php if( $type ) : ?>

                  <div>
                    <div class="flex-video">
                      <?php echo $content; ?>
                    </div>
                  </div>

                <?php else : ?>

                  <div>
                    <p class="testimonial--small"><?php echo $content; ?></p>

                    <?php if( $stars ) : ?>
                      <div>
                        <?php for( $i = 1; $i <= $stars; $i++ ) { ?>
                          <i class="fas fa-star"></i>
                        <?php } ?>
                      </div>
                    <?php endif; ?>

                    <p class="testimonial--small">&mdash; <?php echo $author; ?></p>
                  </div>

                <?php endif; ?>

              </div>

            <?php endforeach; wp_reset_postdata(); ?>

          </div>

          <a href="<?php echo esc_url(get_post_type_archive_link('testimonial')); ?>" class="button button--clay" role="link" title="<?php echo $btnText; ?>">
            <?php echo $btnText; ?>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
