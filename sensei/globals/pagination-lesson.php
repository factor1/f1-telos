<?php
if ( ! defined( 'ABSPATH' ) ) exit;
/**
 * Pagination - Lesson
 *
 * @author 		Automattic
 * @package 	Sensei
 * @category    Templates
 * @version     1.9.0
 */

global $post;

$nav_links = sensei_get_prev_next_lessons( $post->ID );

// Output HTML
if ( isset( $nav_links['previous'] ) || isset( $nav_links['next'] ) ) { ?>
	<nav id="post-entries" class="post-entries fix">
        <?php if ( isset( $nav_links['previous'] ) ) { ?>
	        <div class="nav-prev fl">
	        	<a href="<?php echo esc_url( $nav_links['previous']['url'] ); ?>" class="button button--grass" rel="prev">
	        		<span class="meta-nav"></span>
	        		Previous
	        	</a>
	        </div>
        <?php } ?>

		<?php if ( isset( $nav_links['next'] ) ) { ?>
			<div class="nav-next fr">
				<a href="<?php echo esc_url( $nav_links['next']['url'] ); ?>" class="button button--grass" rel="next">
					Next
					<span class="meta-nav"></span>
				</a>
			</div>
		<?php } ?>
    </nav><!-- #post-entries -->
<?php } ?>
