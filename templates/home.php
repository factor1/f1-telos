<?php
/*
 * Template Name: Home
 *
 * Template used on the home page
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

$plansToggle = get_field('home_plans_section_toggle');
$bannerToggle = get_field('home_banner_toggle');

get_header();

get_template_part('parts/home/hero');

get_template_part('parts/global/headline-text-split');

get_template_part('parts/home/ipad-modal');

get_template_part('parts/home/testimonial-slider-1');

// get_template_part('parts/home/product-grid');

get_template_part('parts/home/form-images-split');

get_template_part('parts/global/testimonials');

if( $bannerToggle ) :

  get_template_part('parts/home/banner');

endif;

get_template_part('parts/home/3-column-grid');

if( $plansToggle ) :

  get_template_part('parts/global/plans-grid');

endif;

get_footer(); ?>
