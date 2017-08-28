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
				<div class="taxonomy-description">Giúp bạn tìm hiểu và sử dụng mã QR. Để tạo ra nhiều nhiều sự Tiện Lợi và Trải Nghiệm Thú Vị cho khách hàng của bạn.</div>
			</header><!-- .page-header -->
			<?php 
			global $wp;
			// get current url with query string.
			$current_url =  home_url( $wp->request ); 

			// get the position where '/page.. ' text start.
			$pos = strpos($current_url , '/page');

			// remove string from the specific postion
			$finalurl = substr($current_url,0,$pos);
			$order_type = isset($_GET['order_type']) ? $_GET['order_type'] : 'date-desc';
			?>
			<form action="<?php echo $finalurl ?>" class="form-blog-custom-order">
				<div class="styled-select">
					<select name="order_type" onchange="this.form.submit()">
						<option value="date-desc" <?php echo ($order_type == 'date-desc' ? 'selected' : '') ?>>Mới nhất</option>
						<option value="date-asc" <?php echo ($order_type == 'date-asc' ? 'selected' : '') ?>>Cũ nhất</option>
					</select>
				</div>
			</form>
			
			<div class="archive-content">
				<div class="row">
					<div class="col-md-8">
						<?php			
						// wp_reset_query();
						$order_type_parse = explode('-', $order_type);
				        $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
						$myquery = array(
				                'paged'         => $paged, 
				                'post_type' 	=> 'blog',
				                'lang' => pll_current_language(),
				                'order'         => $order_type_parse[1],
				                'orderby'       => $order_type_parse[0],
				                'post_type'     => 'blog',
				                'post_status'   => 'publish',
				            );
				        $wp_query = new WP_Query($myquery);
							if ( $wp_query ->have_posts() ) : ?>
								<?php
								/* Start the Loop */
								while ( $wp_query ->have_posts() ) : $wp_query ->the_post();

									/*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/post/content', 'list-blog' );

								endwhile;
								qr_marketing_show_pagination();
								wp_reset_query();
					            wp_reset_postdata();
							else :

								// get_template_part( 'template-parts/post/content', 'none' );

							endif; 
							?>
					</div>
					<div class="col-md-4 blog-rightbar">
						<div class="subscriber rightbar-module">
							<h3>Theo dõi QR Code Blog</h3>
							<?php echo do_shortcode('[email-subscribers namefield="NO" desc="" group="Public"]') ?>
						</div>
						<div class="social rightbar-module">
							<h3>Học viện QR Code</h3>
							<div>
								<?php
									$youtube_channel = get_option('youtube_url');
									$facebook_page_url = get_option('facebook_url');
								?>
								<script src="https://apis.google.com/js/platform.js"></script>
								<script>
								  function onYtEvent(payload) {
								    if (payload.eventType == 'subscribe') {
								      // Add code to handle subscribe event.
								    } else if (payload.eventType == 'unsubscribe') {
								      // Add code to handle unsubscribe event.
								    }
								    if (window.console) { // for debugging only
								      window.console.log('YT event: ', payload);
								    }
								  }
								</script>
								<div class="g-ytsubscribe" data-channel="<?php echo $youtube_channel ?>" data-layout="full" data-count="default" data-onytevent="onYtEvent"></div>
							</div>
							<div>
								<div class="fb-page" data-href="<?php echo $facebook_page_url ?>" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="<?php echo $facebook_page_url ?>" class="fb-xfbml-parse-ignore"><a href="<?php echo $facebook_page_url ?>">Facebook1</a></blockquote></div>
							</div>
						</div>
						<div class="blog-categories rightbar-module">
							<h3>CHỦ ĐỀ QUAN TÂM</h3>
							<?php 
							$terms = get_terms( array(
							    'taxonomy' => 'category',
							    'hide_empty' => false,
							    'lang' => pll_current_language(),
							    'orderby' => 'id',
								'order' => 'ASC'
							)); ?>
							<ul class="" role="">
								<?php if (count($terms) > 0) {
									$i = 0;
									foreach ($terms as $term) { 
										if ($term->name == 'Uncategorized') {
										continue;
									} ?>
									<li>
								    	<a href="<?php echo get_term_link($term->term_id) ?>"><?php echo $term->name ?></a>
								    	<span class="count_item"><?php echo $term->count ?></span>
							    	</li>
									<?php }
								} ?>
							</ul>
						</div>
						<div class="create-qr-code rightbar-module">
							<h3 class="text-center">Tạo và sử dụng QR Code nào</h3>
							<a href="<?php echo esc_url( home_url( '/tao-qr-code' ) ); ?>" class="qr-btn qr-btn-warning qr-btn-big qr-btn-block">bắt đầu</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
