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
<nav id="qr-information-navigation" class="qr-information-menu" role="navigation" aria-label="<?php esc_attr_e( 'Qr information Menu', 'qrmarketing' ); ?>">
	<?php wp_nav_menu( array(
		'theme_location' => 'qr-information-menu',
		'menu_id'        => 'qr-information-menu',
	) ); ?>
</nav><!-- #site-navigation -->
