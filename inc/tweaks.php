<?php
  /*-----------------------------------------------------------------------------
    Custom Theme Tweaks and Features
  -----------------------------------------------------------------------------*/
  if ( !function_exists( 'prelude_features' ) ) {

    // Register Theme Features
    function prelude_features() {
      // Add theme support for Automatic Feed Links
      add_theme_support( 'automatic-feed-links' );

      // Add theme support for Post Formats
      add_theme_support('post-formats', array('status', 'quote', 'gallery', 'image', 'video', 'audio', 'link', 'aside') );

      // Add theme support for Featured Images
      add_theme_support( 'post-thumbnails' );

      // Add theme support for HTML5 Semantic Markup
      add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption') );

      // Add theme support for document Title tag
      add_theme_support( 'title-tag' );

      // Clean up the default WordPress head section
      remove_action( 'wp_head', 'rsd_link' );
      remove_action( 'wp_head', 'wlwmanifest_link' );
      remove_action( 'wp_head', 'wp_generator' );
      remove_action( 'wp_head', 'start_post_rel_link' );
      remove_action( 'wp_head', 'index_rel_link' );
      remove_action( 'wp_head', 'adjacent_posts_rel_link' );
    }
    add_action( 'after_setup_theme', 'prelude_features' );
  }

  // Set the maximum content width for the theme
  function prelude_content_width() {
    $GLOBALS[ 'content_width' ] = apply_filters( 'prelude_content_width', 1200 );
  }
  add_action( 'after_setup_theme', 'prelude_content_width', 0 );

  // Add page excerpts
  function prelude_page_excerpt() {
    add_post_type_support( 'page', array('excerpt') );
  }
  add_action( 'init', 'prelude_page_excerpt' );

  // Customize the default read more link
  function prelude_continue_reading_link() {
    return ' <a href="' . get_permalink() . '">' .
     __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'theme-slug' ) .
     '</a>';
  }

  // Customize the default ellipsis (...)
  function prelude_auto_excerpt_more( $more ) {
    return '&hellip;' . prelude_continue_reading_link();
  }
  add_filter( 'excerpt_more', 'prelude_auto_excerpt_more' );

  // Remove the default gallery styling
  function prelude_remove_gallery_css( $css ) {
    return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
  }
  add_filter( 'gallery_style', 'prelude_remove_gallery_css' );

  // Customize which dashboard widgets show
  function prelude_remove_dashboard_boxes() {
    remove_meta_box('dashboard_right_now', 'dashboard', 'core' ); // Right Now Overview Box
    remove_meta_box('dashboard_incoming_links', 'dashboard', 'core' ); // Incoming Links Box
    remove_meta_box('dashboard_quick_press', 'dashboard', 'core' ); // Quick Press Box
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'core' ); // Plugins Box
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core' ); // Recent Drafts Box
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'core' ); // Recent Comments
    remove_meta_box('dashboard_primary', 'dashboard', 'core' ); // WordPress Development Blog
    remove_meta_box('dashboard_secondary', 'dashboard', 'core' ); // Other WordPress News
  }
  add_action( 'admin_menu', 'prelude_remove_dashboard_boxes' );

  // Remove meta boxes from default posts screen
  function prelude_remove_default_post_metaboxes() {
    remove_meta_box( 'postcustom', 'post', 'normal' ); // Custom Fields Metabox
    //remove_meta_box( 'postexcerpt', 'post', 'normal' ); // Excerpt Metabox
    //remove_meta_box( 'commentstatusdiv', 'post', 'normal' ); // Comments Metabox
    remove_meta_box( 'trackbacksdiv', 'post', 'normal' ); // Talkback Metabox
    //remove_meta_box( 'authordiv', 'post', 'normal' ); // Author Metabox
  }
  add_action( 'admin_menu', 'prelude_remove_default_post_metaboxes' );

  // Remove meta boxes from default pages screen
  function prelude_remove_default_page_metaboxes() {
    remove_meta_box( 'postcustom', 'page', 'normal' ); // Custom Fields Metabox
    //remove_meta_box('commentstatusdiv', 'page', 'normal' ); // Discussion Metabox
    remove_meta_box( 'authordiv', 'page', 'normal' ); // Author Metabox
  }
  add_action( 'admin_menu', 'prelude_remove_default_page_metaboxes' );

  // Stop automatically hyper-linking images to themselves
  $image_set = get_option( 'image_default_link_type' );

  if ( !$image_set == 'none' ) {
    update_option( 'image_default_link_type', 'none' );
  }

  // Customize the Yoast SEO columns
  add_filter( 'wpseo_use_page_analysis', '__return_false' );

  // Add touch detection class to body
  function be_body_classes( $classes ) {
    $classes[] = 'no-touch';
    return $classes;
  }
  add_filter( 'body_class', 'be_body_classes' );

  // Keep the WordPress Kitchen Sink Toolkit open for all users.
  function enable_more_buttons($buttons) {
    $buttons[] = 'fontselect';
    $buttons[] = 'fontsizeselect';
    $buttons[] = 'styleselect';
    $buttons[] = 'backcolor';
    $buttons[] = 'newdocument';
    $buttons[] = 'cut';
    $buttons[] = 'copy';
    $buttons[] = 'charmap';
    $buttons[] = 'hr';
    $buttons[] = 'visualaid';

    return $buttons;
  }
  add_filter("mce_buttons_3", "enable_more_buttons");

  // Add async defer to font awesome script
  function add_async_attribute($tag, $handle) {
    if ( 'font-awesome' !== $handle )
      return $tag;
    return str_replace( ' src', ' async="async" src', $tag );
  }
  add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

  // Add custom classes to WYSIWYGs
  function custom_wysiwyg_options( $init_array ) {
    $style_formats = array(
      array(
        'title' => 'Responsive iFrame',
  			'block' => 'div',
        'classes' => 'flex-video',
  			'wrapper' => false,
      ),
      array(
        'title' => 'Support Copy',
        'block' => 'h6',
        'classes' => 'support',
        'wrapper' => false,
      ),
      array(
        'title' => 'Callout Text',
        'block' => 'h6',
        'classes' => 'callout',
        'wrapper' => false,
      ),
      array(
        'title' => 'Callout Small Text',
        'block' => 'p',
        'classes' => 'callout--small',
        'wrapper' => false,
      ),
      array(
        'title' => 'Script Text',
        'block' => 'h1',
        'classes' => 'script',
        'wrapper' => false,
      ),
      array(
        'title' => 'Big script Text',
        'block' => 'h1',
        'classes' => 'script big',
        'wrapper' => false,
      ),
      array(
        'title' => 'Script Text Green',
        'block' => 'h1',
        'classes' => 'script script--green',
        'wrapper' => false,
      ),
      array(
        'title' => 'Big script Text Green',
        'block' => 'h1',
        'classes' => 'script script--green big',
        'wrapper' => false,
      ),
      array(
        'title' => 'Script Text Blue',
        'block' => 'h1',
        'classes' => 'script script--blue',
        'wrapper' => false,
      ),
      array(
        'title' => 'Big script Text Blue',
        'block' => 'h1',
        'classes' => 'script script--blue big',
        'wrapper' => false,
      ),
      array(
        'title' => 'Testimonial Text',
        'block' => 'h5',
        'classes' => 'testimonial',
        'wrapper' => false,
      ),
      array(
        'title' => 'Testimonial Text Small',
        'block' => 'p',
        'classes' => 'testimonial--small',
        'wrapper' => false,
      ),
      array(
        'title' => 'Author',
        'block' => 'h6',
        'classes' => 'testimonial__author',
        'wrapper' => false,
      ),
      array(
        'title' => 'Video Title',
        'block' => 'h5',
        'classes' => 'video-title',
        'wrapper' => false,
      ),
      array(
        'title' => 'Price Text',
        'block' => 'h5',
        'classes' => 'price',
        'wrapper' => false,
      ),
      array(
        'title' => 'Checklist',
        'block' => 'ul',
        'classes' => 'checklist',
        'wrapper' => false,
      ),
      array(
        'title' => 'Checklist Item',
        'block' => 'li',
        'wrapper' => false,
      )
    );
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats_merge'] = true;
    $init_array['style_formats'] = wp_json_encode( $style_formats );
    return $init_array;
  }
  add_filter( 'tiny_mce_before_init', 'custom_wysiwyg_options' );

  // Add editor styles from custom wysiwyg options
  function custom_editor_styles() {
    add_editor_style('/assets/css/editor-styles.css');
  }
  add_action('init', 'custom_editor_styles');

  // Hide ACF from everyone except factor1admin
  $us = get_user_by('login', 'factor1admin');

  // If the current logged-in user is not us, hide ACF
  if(wp_get_current_user()->user_login !== $us->user_login) :
    add_filter('acf/settings/show_admin', '__return_false');
  endif;

  // Adjust query settings on testimonials archive
  function adjust_queries( $query ) {
    if( !is_admin() && is_post_type_archive('testimonial') && $query->is_main_query() ) :
      $query->set('posts_per_page', 8);
    endif;
  }
  add_action('pre_get_posts', 'adjust_queries');

  // Customize Wordpress Admin
  // add login logo
  function custom_loginlogo() {
  	echo '<style type="text/css">
      .login {
        background: #e9f1dc url(' . get_template_directory_uri() . '/assets/img/join-now.png) center bottom/100% auto no-repeat;
      }
      .login .message,
      .login #login_error {
        margin-top: 30px;
        border-color: #aa4127;
      }
      .login p a {
        color: #414042 !important;
        transition: all .4s ease;
      }
      .login p a:hover {
        color: #589dd5 !important;
      }
      .login input[type="text"]:active,
      .login input[type="text"]:focus,
      .login input[type="password"]:active,
      .login input[type="password"]:focus,
      input[type=text]:focus,
      input[type=search]:focus,
      input[type=radio]:focus,
      input[type=tel]:focus,
      input[type=time]:focus,
      input[type=url]:focus,
      input[type=week]:focus,
      input[type=password]:focus,
      input[type=checkbox]:focus,
      input[type=color]:focus,
      input[type=date]:focus,
      input[type=datetime]:focus,
      input[type=datetime-local]:focus,
      input[type=email]:focus,
      input[type=month]:focus,
      input[type=number]:focus,
      select:focus,
      textarea:focus {
        border-color: #589dd5;
        box-shadow: 0 0 2px rgba(0, 147, 201, .6);
      }
      .login input[type="submit"] {
        background-color: #589dd5;
        border-color: #589dd5;
        box-shadow: 0 1px 0 #589dd5;
        text-shadow: none;
      }
      .login input[type="submit"]:hover {
        background-color: #589dd5;
      }
    	h1 a {
    		height: 100% !important;
    		width:100% !important;
    		background-image: url(' . get_template_directory_uri() . '/assets/img/logo.png) !important;
    		background-postion-x: center !important;
    		background-size:contain !important;
    		margin-bottom:10px !important;
      }
    	h1 {
    		width: 320px !important;
    		Height: 120px !important
      }
  	</style>';
  }
  add_action('login_head', 'custom_loginlogo');

  // add custom footer text
  function modify_footer_admin () {
  	echo 'Created by <a href="https://factor1studios.com">factor1</a>. ';
  	echo 'Powered by<a href="https://WordPress.org">WordPress</a>.';
  }
  add_filter('admin_footer_text', 'modify_footer_admin');
