<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Qr_Marketing
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'qrmarketing' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				// get_template_part( 'template-parts/footer/site', 'info' );
				?>
				<div class="social-links-menu col-xs-12">
					<?php
						$facebook_url = get_option('facebook_url');
						$twitter_url = get_option('twitter_url');
						$instagram_url = get_option('instagram_url');
					?>
					<ul>
						<li>
							<a href="<?php echo $facebook_url ?>" class="facebook-link">
								<img src="<?php echo get_theme_file_uri( '/assets/images/facebook-icon.png' ) ?>" alt="" />
							</a>
						</li>
						<li>
							<a href="<?php echo $twitter_url ?>" class="twitter-link">
								<img src="<?php echo get_theme_file_uri( '/assets/images/twitter-icon.png' ) ?>" alt="" />
							</a>
						</li>
						<li>
							<a href="<?php echo $instagram_url ?>" class="instagram-link">
								<img src="<?php echo get_theme_file_uri( '/assets/images/instagram-icon.png' ) ?>" alt="" />
							</a>
						</li>
					</ul>
				</div>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
