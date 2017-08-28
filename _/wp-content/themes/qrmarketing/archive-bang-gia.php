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
		<div class="col-md-9 archive-blog-custom archive-bang-gia column-2">
			<?php custom_breadcrumbs(); ?>
			<?php
				$create_qr_code = get_option('create_qr_code');
				$trial_url = get_option('trial_url');
			?>
			<div class="registration-area">
				<div class="registration-frame">
					<div class="registration-border">
						<p class="clearfix">
							<span>Tạo mã QR tĩnh miễn phí, không cần đăng ký</span>
							<a class="pull-right qr-btn qr-btn-info" href="<?php echo $create_qr_code ?>">Tạo QR Code</a>
						</p>
						<p class="clearfix">
							<span>Tạo mã QR code động miễn phí 14 ngày với tài khoản dùng thử</span>
							<a class="pull-right qr-btn qr-btn-success" href="<?php echo $trial_url ?>">Đăng ký</a>
						</p>
					</div>
				</div>
			</div>
			<header class="">
				<h1 class="entry-header text-center">Bảng giá niêm yết</h1>
				<p class="text-center">(Các đại lý của MiraScan chỉ cung cấp dịch vụ QR Code bằng hoặc thấp hơn giá này)</p>
			</header><!-- .entry-header -->
			<div id="pricing-content">
				<main role="main">
					<?php
				    	$posts_array = get_posts(
						    array(
						        'posts_per_page' => -1,
						        'post_type' => 'bang-gia',
						        'orderby' => 'date',
								'order' => 'ASC'
						    )
						);
					?>
					<div class="pricing-tab">
						<ul class="nav nav-tabs" role="tablist">
							<?php if (count($posts_array) > 0) : ?>
								<?php foreach ($posts_array as $key => $value) : ?>
						 	<li class="<?php echo ($key == 0 ? 'active' : '') ?>" role="presentation">
						 		<a class="qr-btn" role="tab" href="#bang_gia_<?php echo $key ?>" aria-controls="bang_gia_<?php echo $key ?>" data-toggle="tab"><?php echo $value->post_title ?></a>
					 		</li>
						 		<?php endforeach; ?>
						 	<?php endif; ?>
						</ul>
						<div class="tab-content">
							<?php if (count($posts_array) > 0) : ?>
								<?php foreach ($posts_array as $key => $value) : ?>
							<div id="bang_gia_<?php echo $key ?>" class="tab-pane <?php echo ($key == 0 ? 'active' : '') ?>" role="tabpanel">
							<?php echo $value->post_content ?>
							</div>
								<?php endforeach; ?>
						 	<?php endif; ?>
						</div>
					</div>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php get_footer();
