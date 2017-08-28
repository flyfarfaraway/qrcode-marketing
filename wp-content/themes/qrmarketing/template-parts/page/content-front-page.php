<?php
/**
 * Displays content for front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="homepage">
	<?php
		/* translators: %s: Name of current post */
		the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );
	?>
	
	<div class="customer-feedback">
		<div class="container">
			<h2>KHÁCH HÀNG ĐÁNG GIÁ VỀ CHÚNG TÔI</h2>
			<div class="customer-feedback-content clearfix">
				<div class="owl-carousel owl-theme" id="owl-customer-feedback">
					<?php
					wp_reset_query();
				    	$args = array(
					        'posts_per_page' => -1,
					        'post_type' => 'khach-hang-danh-gia',
					        'lang' => pll_current_language(),
					        'orderby' => 'date',
							'order' => 'ASC'
					    );
						$query1 = new WP_Query( $args );
						if ( $query1->have_posts() ) {
							// The Loop
							while ( $query1->have_posts() ) {
								$query1->the_post();
								get_template_part( 'template-parts/post/content', 'customer-feedback' );
							}
						}
					?>
				</div>
			</div>
			<div class="text-center">
				<a href="/bang-gia" class="qr-btn qr-btn-info qr-btn-big qr-btn-block">BẢNG GIÁ DỊCH VỤ</a>
			</div>
		</div>
	</div>
</div>
