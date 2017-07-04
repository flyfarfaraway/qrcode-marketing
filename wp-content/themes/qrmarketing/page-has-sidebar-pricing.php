<?php 
/* Template Name: Sidebar Pricing */ 

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
<div class="container content-2-column">
	<div class="row">
		<div class="col-md-3 column-1">
		<?php if ( has_nav_menu( 'pricing-menu' ) ) : ?>
			<div class="navigation-qr-information">
					<?php get_template_part( 'template-parts/navigation/navigation', 'pricing' ); ?>
			</div><!-- .navigation-qr-information -->
		<?php endif; ?>
		</div>
		<div class="col-md-9 archive-blog-custom contact-page column-2">
			<?php custom_breadcrumbs(); ?>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
		</div>
	</div>
</div>

<?php get_footer();
