<?php // CSS & JavaScript Enqueues

/**
 * Defer jQuery Parsing using the HTML5 defer property
 */

if (!(is_admin() )) {
  function defer_parsing_of_js ( $url ) {
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) || strpos( $url, 'jquery.min.js' ) ) return $url;
    // return "$url' defer ";
    return "$url' defer onload='";
  }
  add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}

/**
 * Link to all theme CSS files.
 */
function prelude_theme_scripts() {
  // Font Awesome
  wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/44d1f7d674.js', array(), THEME_VERSION );

  // Fonts
  wp_enqueue_style('typekit', 'https://use.typekit.net/bdt2vwc.css', array(), THEME_VERSION );

  // CSS
  wp_enqueue_style('prelude-css', get_template_directory_uri() . '/assets/css/theme.min.css', array(), THEME_VERSION );

  // JS
  wp_enqueue_script('prelude-js', get_template_directory_uri() . '/assets/js/theme.min.js', array('jquery'), THEME_VERSION, true );

  //Add ACF vars to script
  wp_localize_script('prelude-js', 'script_vars', array(
      'slides_to_show' => get_field('home_testimonials_slides_to_show', get_option('page_on_front')),
    )
  );
}
add_action( 'wp_enqueue_scripts', 'prelude_theme_scripts' );
