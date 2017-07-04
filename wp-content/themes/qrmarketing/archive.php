<?php
/**
 * The template for displaying archive blogs
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Qr_Marketing
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container content-2-column">
	<div class="row">
		<div class="col-md-3 column-1">
		<?php if ( has_nav_menu( 'qr-information-menu' ) ) : ?>
			<div class="navigation-qr-information">
					<?php get_template_part( 'template-parts/navigation/navigation', 'qr-information' ); ?>
			</div><!-- .navigation-qr-information -->
		<?php endif; ?>
		</div>
		<div class="col-md-9 archive-blog-custom column-2">
			<?php custom_breadcrumbs(); ?>
			<header class="page-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
				<?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
			</header><!-- .page-header -->
			<div class="archive-content">
				<?php
				if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', get_post_format() );

					endwhile;
						qr_marketing_show_pagination();
						wp_reset_query();
			            wp_reset_postdata();
					else :

						// get_template_part( 'template-parts/post/content', 'none' );

				endif; 
					?>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
