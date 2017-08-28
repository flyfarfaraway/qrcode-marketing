<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Qr_Marketing
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<title>Công Cụ Tạo Mã Qr Code Trực Tuyến Miễn Phí Hàng Đầu - Mirascan</title>
<meta name="description" content="Tự tạo các mẫu QR code được cá nhân hóa với giao diện đơn giản, dễ sử dụng, thống kê được số lượng quét theo ngày, tháng. Tạo Mã QR Code Ngay!">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" type="image/x-icon" href="http://qrcode-marketing.vn/wp-content/themes/qrmarketing/assets/images/favicon.ico">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="fb-root"></div>
<?php $facebook_app_id = get_option('facebook_app_id'); ?>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=<?php echo $facebook_app_id ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="header-frame">
				<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
				</a>
				<?php if ( has_nav_menu( 'top' ) ) : ?>

				<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				<?php endif; ?>
				<?php if (is_user_logged_in()) : 
				$current_user = wp_get_current_user();
				?>

				<?php else : ?>
				<?php
					$login_url = get_option('login_url');
					$trial_url = get_option('trial_url');
				?>
				<div class="qr-btn-group">
					<a href="<?php echo $login_url ?>" class="qr-btn qr-btn-login">đăng nhập</a>
					<a href="<?php echo $trial_url ?>" class="qr-btn qr-btn-free-trial">dùng thử</a>
				</div>
				<?php endif; ?>
			</div>
		</div>
		<?php //get_template_part( 'template-parts/header/header', 'image' ); ?>

		

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	// if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
	// 	echo '<div class="single-featured-image-header">';
	// 	echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
	// 	echo '</div><!-- .single-featured-image-header -->';
	// endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
