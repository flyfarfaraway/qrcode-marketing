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
			<header class="page-header">
				<h1 class="page-title text-center">LÀM VIỆC TẠI MIRASCAN</h1>
			</header><!-- .page-header -->
			<div class="archive-description">
				<p>Mục tiêu của MiraScan là phát triển và cung cấp các giải pháp công nghệ ưu việt cho các tổ chức, doanh nghiệp dựa trên nền tảng công nghệ thông tin và tự động hoá. Nếu bạn chăm chỉ và có đam mê, hãy gia nhập gia đình MiraScan ngay.</p>
				<p class="text-center"><a href="javascript:void(0);" onclick="move_to('main_tuyen_dung');" class="qr-btn qr-btn-warning qr-btn-big qr-btn-540">Gia nhập gia đình MiraScan</a></p>
				<h3>CHÚNG TÔI LÀM GÌ?</h3>
				<p>Trong cơn bão sự phát triển của ngành công nghệ, chúng tôi phát hiện thấy rằng mã QR Code là một ứng dụng hỗ trợ cực kỳ hiệu quả và dễ sử dụng cho người dùng thiết bị di động. Chỉ bằng việc quét mã QR Code, người dùng có thể dễ dàng tiếp cận các tiện ích phù hợp với nhu cầu tại đúng thời điểm họ cần một cách chính xác và nhanh chóng. Vì vậy trong tương lai, chúng tôi muốn trở thành một chuyên gia hàng đầu về cung cấp giải pháp và dịch vụ mã QR Code.</p>
 				<p>Làm việc tại MiraScan bạn sẽ không bao giờ cảm thấy nhàm chán. Bởi vì bạn có thể nghĩ ra rất nhiều điều thú vị để làm với mã QR Code. VD như: QR Code Hòm thư góp ý, QR Code Chống giả; QR Code Gian hàng ảo; QR Code chia sẻ đồ dùng...</p>
 				<p>Chúng tôi rất cần bạn, những thành viên tương lai của MiraScan, sẽ giúp chúng tôi mang lại sự Tiện lợi và Trải nghiệm thú vị cho doanh nghiệp và người dùng smartphone.</p>
				<p class="text-center"><a href="javascript:void(0);" onclick="move_to('main_tuyen_dung');" class="qr-btn qr-btn-warning qr-btn-big qr-btn-540">Gia nhập gia đình MiraScan</a></p>
 				<h3>MÔI TRƯỜNG LÀM VIỆC TẠI MIRASCAN</h3>
 				<p>Trong cơn bão sự phát triển của ngành công nghệ, chúng tôi phát hiện thấy rằng mã QR Code là một ứng dụng hỗ trợ cực kỳ hiệu quả và dễ sử dụng cho người dùng thiết bị di động. Chỉ bằng việc quét mã QR Code, người dùng có thể dễ dàng tiếp cận các tiện ích phù hợp với nhu cầu tại đúng thời điểm họ cần một cách chính xác và nhanh chóng. Vì vậy trong tương lai, chúng tôi muốn trở thành một chuyên gia hàng đầu về cung cấp giải pháp và dịch vụ mã QR Code.</p>
 				<p>Làm việc tại MiraScan bạn sẽ không bao giờ cảm thấy nhàm chán. Bởi vì bạn có thể nghĩ ra rất nhiều điều thú vị để làm với mã QR Code. VD như: QR Code Hòm thư góp ý, QR Code Chống giả; QR Code Gian hàng ảo; QR Code chia sẻ đồ dùng...</p>
 				<p>Chúng tôi rất cần bạn, những thành viên tương lai của MiraScan, sẽ giúp chúng tôi mang lại sự Tiện lợi và Trải nghiệm thú vị cho doanh nghiệp và người dùng smartphone.</p>
 				<p class="text-center"><a href="javascript:void(0);" onclick="move_to('main_tuyen_dung');" class="qr-btn qr-btn-warning qr-btn-big qr-btn-540">Gia nhập gia đình MiraScan</a></p>
 				<h3>VỊ TRÍ CHÚNG TÔI ĐANG CẦN</h3>
			</div>
			<div id="customer-content">
				<main role="main" id="main_tuyen_dung" class="row">
					<?php
					
					if ( have_posts() ) : ?>
						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/content', 'list-tuyen-dung' );
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

						// get_template_part( 'template-parts/post/content', 'none' );

					endif; ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php get_footer();
