<?php
/**
 * Displays pricing navigation
 *
 * @package WordPress
 * @subpackage Qr_Marketing
 * @since 1.0
 * @version 1.2
 */

?>
<nav id="qr-information-navigation" class="about-us-menu" role="navigation" aria-label="<?php esc_attr_e( 'Pricing Menu', 'qrmarketing' ); ?>">
	<?php wp_nav_menu( array(
		'theme_location' => 'pricing-menu',
		'menu_id'        => 'pricing-menu',
	) ); ?>
</nav><!-- #site-navigation -->
