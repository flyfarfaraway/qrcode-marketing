<?php
/**
 * Displays qr information navigation
 *
 * @package WordPress
 * @subpackage Qr_Marketing
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="qr-information-navigation" class="about-us-menu" role="navigation" aria-label="<?php esc_attr_e( 'About Us Menu', 'qrmarketing' ); ?>">
	<?php wp_nav_menu( array(
		'theme_location' => 'about-us-menu',
		'menu_id'        => 'about-us-menu',
	) ); ?>
</nav><!-- #site-navigation -->
