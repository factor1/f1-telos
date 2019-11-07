<?php
/*
 * Hero (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Hero Custom Fields
$height = get_field('hero_height');
$videoToggle = get_field('hero_video_toggle');
$video = get_field('hero_video');
$content = get_field('hero_content');

// Conditional classes
$sectionClass = $height ? ' tall' : ''; ?>

<section class="hero<?php echo $sectionClass; ?>" style="background: url('<?php echo featuredURL('hero'); ?>') center/cover no-repeat">

  <?php // Optional video
  if( $videoToggle && $video ) : ?>

  <div class="hero__video sm-hide">
    <video autoplay loop muted class="sm-hide">
      <source src="<?php echo $video; ?>" type="video/mp4">
    </video>
  </div>

  <?php endif; ?>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php echo $content; ?>
      </div>
    </div>
  </div>
</section>
