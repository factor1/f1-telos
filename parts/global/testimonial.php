<?php
/*
 * Testimonial Component
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Testimonials Custom Fields
$type = get_field('testimonial_type'); // T/F video testimonial
$content = $type ? get_field('testimonial_video') : get_field('testimonial');
$author = $type ? false : get_field('author');
$info = $type ? false : get_field('author_info');
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

      <p class="testimonial--small">
        <strong>&mdash; <?php echo $author; ?></strong><br>
        <?php echo $info; ?>
      </p>
    </div>

  <?php endif; ?>

</div>
