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
		<?php if ( has_nav_menu( 'qr-information-menu' ) ) : ?>
			<div class="navigation-qr-information">
					<?php get_template_part( 'template-parts/navigation/navigation', 'qr-information' ); ?>
			</div><!-- .navigation-qr-information -->
		<?php endif; ?>
		</div>
		<div class="col-md-9 archive-blog-custom column-2">
			<?php custom_breadcrumbs(); ?>
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
					?>
					<p>Mã QR của bạn không thu hút được nhiều lượt quét? Hãy thêm một khung viền ấn tượng và để khách hàng biết được nội dung của QR Code trước khi quét. Chúng tôi tin là điều này sẽ làm mã QR của bạn thu hút được nhiều lượt quét hơn.</p>
				</header><!-- .page-header -->
			<?php endif; ?>

			<div id="code-frame-content">
				<main role="main">

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
						get_template_part( 'template-parts/post/content', 'code-frame' );

					endwhile;

					qr_marketing_show_pagination();
					wp_reset_query();
		            wp_reset_postdata();

				else :

					// get_template_part( 'template-parts/post/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php get_footer();
