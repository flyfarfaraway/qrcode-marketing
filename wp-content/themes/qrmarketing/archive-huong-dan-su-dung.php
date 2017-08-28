<?php
/**
 * The template for displaying archive documents
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
		<?php if ( has_nav_menu( 'pricing-menu' ) ) : ?>
			<div class="navigation-qr-information">
					<?php get_template_part( 'template-parts/navigation/navigation', 'pricing' ); ?>
			</div><!-- .navigation-qr-information -->
		<?php endif; ?>
		</div>
		<div class="col-md-9 archive-blog-custom column-2">
			<?php custom_breadcrumbs(); ?>
			<header class="page-header">
				<h1 class="page-title">Hướng dẫn</h1>
				<div class="taxonomy-description">Giúp bạn tìm hiểu cách sử dụng phần mềm và các giải pháp QR Code</div>
			</header><!-- .page-header -->

			<div id="documents-content">

				<?php
				
				if ( have_posts() ) : ?>
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();
						$postID = get_the_ID();
						$youtube_video = get_post_meta($postID, 'wpcf-youtube-video');
						$pdf_file = get_post_meta($postID, 'wpcf-pdf-file');
						if (count($youtube_video) > 0) {
							get_template_part( 'template-parts/post/content', 'document-video' );
						} else {
							get_template_part( 'template-parts/post/content', 'document-doc' );
						}
						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */

					endwhile;

					qr_marketing_show_pagination();
					wp_reset_query();
		            wp_reset_postdata();

				else :

					get_template_part( 'template-parts/post/content', 'none' );

				endif; ?>

			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php get_footer();
