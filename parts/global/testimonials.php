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
$btn = $isDefault ? get_sub_field('testimonials_section_button') : get_field('testimonials_section_button');
$padding_toggle = get_sub_field('testimonials_section_padding_toggle');
$padding_class = $padding_toggle ? ' no-padding' : '';

if( $testimonials ) : ?>

  <section class="testimonials-section <?php echo $padding_class; ?>">
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

          <?php if( $btn ) : ?>

            <a href="<?php echo $btn['url']; ?>" class="button button--clay" role="link" title="<?php echo $btn['title']; ?>">
              <?php echo $btn['title']; ?>
            </a>

          <?php endif; ?>

        </div>
      </div>
    </div>
  </section>

<?php endif; ?>
