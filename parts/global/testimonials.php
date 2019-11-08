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

// Check if default template
$isDefault = is_page() && !is_page_template();

// Testimonials Section Custom Fields
$headline = $isDefault ? get_sub_field('testimonials_section_headline') : get_field('testimonials_section_headline');
$testimonials = $isDefault ? get_sub_field('section_testimonials') : get_field('section_testimonials');
$btnText = $isDefault ? get_sub_field('testimonials_section_button_text') : get_field('testimonials_section_button_text');

if( $testimonials ) : ?>

  <section class="testimonials-section">
    <div class="container">
      <div class="row">
        <div class="col-10 sm-col-10 col-centered text-center">
          <h1 class="script script--blue"><?php echo $headline; ?></h1>

          <div class="testimonials-section__slider">

            <?php foreach( $testimonials as $post ) :
              setup_postdata($post);

              get_template_part('parts/global/testimonial');

            endforeach; wp_reset_postdata(); ?>

          </div>

          <a href="<?php echo esc_url(get_post_type_archive_link('testimonial')); ?>" class="button button--clay" role="link" title="<?php echo $btnText; ?>">
            <?php echo $btnText; ?>
          </a>
        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
