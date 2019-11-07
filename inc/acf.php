<?php
/*
 * ACF Options
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

if( function_exists('acf_add_options_page') ) {
  acf_add_options_page(
    array(
      'page_title' => 'Site Options',
      'position' => 4,
    )
  );
} ?>
