<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

get_header(); ?>

<div class="container content-2-column">
	<div class="row">
		<div class="col-md-3 column-1">
		<?php if ( has_nav_menu( 'about-us-menu' ) ) : ?>
				<div class="navigation-qr-information">
						<?php get_template_part( 'template-parts/navigation/navigation', 'about-us' ); ?>
				</div><!-- .navigation-qr-information -->
			<?php endif; ?>
		</div>
		<div class="col-md-9 archive-blog-custom column-2">
			<?php
				/* Start the Loop */
				while ( have_posts() ) : 
					wp_reset_query();
					the_post();

					get_template_part( 'template-parts/post/content', 'tuyen-dung' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					the_post_navigation( array(
						'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'qrmarketing' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'qrmarketing' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
						'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'qrmarketing' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'qrmarketing' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
					) );

				endwhile; // End of the loop.
				?>
		</div>
	</div>
</div>
<?php get_footer();