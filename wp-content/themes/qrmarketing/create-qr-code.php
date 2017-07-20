<?php 
/* Template Name: Create Qr Code */ 

/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<!-- <div class="container content-2-column"> -->
	<!-- <div class="row"> -->
		<!-- <div class="col-md-12 archive-blog-custom column-2"> -->
			
			<div class="entry-content">
				<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->
		<!-- </div> -->
	<!-- </div> -->
<!-- </div> -->

<?php get_footer();
