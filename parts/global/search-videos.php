<?php
/*
 * Serach Videos Section (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */
?>

<section class="search-videos">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="/" method="get" action="<?php echo home_url( '/' ); ?>" autocomplete="off">
          <i class="fal fa-search"></i>
          <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search videos ..." />
          <input type="submit" class="button button--ghost" value="SEARCH" />
          <input type="hidden" value="community-video" name="post_type" />
        </form>
      </div>
    </div>
  </div>
</section>
