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
		<?php if ( has_nav_menu( 'about-us-menu' ) ) : ?>
				<div class="navigation-qr-information">
						<?php get_template_part( 'template-parts/navigation/navigation', 'about-us' ); ?>
				</div><!-- .navigation-qr-information -->
			<?php endif; ?>
		</div>
		<div class="col-md-9 archive-blog-custom column-2">
			<?php custom_breadcrumbs(); ?>
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title">Đối tác - khách hàng</h1>
				</header><!-- .page-header -->
			<?php endif; ?>

			<div id="customer-content">
				<main role="main">
				<!-- <h2>Khách hàng</h2> -->
					<?php
					
					// if ( have_posts() ) : 
					// 	while ( have_posts() ) : the_post();
					// 		get_template_part( 'template-parts/post/content', 'customer' );

					// 	endwhile;

					// 	qr_marketing_show_pagination();
					// 	wp_reset_query();
			  //           wp_reset_postdata();
					// else :


					// endif; 
				?>
					<h2>Đối tác</h2>
					<?php
				    	$args = array(
					        'posts_per_page' => -1,
					        'post_type' => 'partner',
					        'lang' => pll_current_language(),
					        'orderby' => 'date',
							'order' => 'ASC'
					    );
						$query1 = new WP_Query( $args );
						if ( $query1->have_posts() ) {
							// The Loop
							while ( $query1->have_posts() ) {
								$query1->the_post();
								get_template_part( 'template-parts/post/content', 'customer' );
							}
						}
					?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php get_footer();
