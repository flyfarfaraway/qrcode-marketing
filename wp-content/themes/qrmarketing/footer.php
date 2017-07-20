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
<?php
	$hotline = get_option('hotline'); ?>
<div style="position:fixed;z-index:1000000;font-size:20px;bottom:5px;left:10px;padding:10px;background:orange;color:white;font-weight:bold;-moz-border-radius:10px;border-radius:10px;-webkit-border-radius:10px;"><a href="tel:<?php echo $hotline ?>" style="color:white;text-decoration:none;background: url('<?php echo get_theme_file_uri( '/assets/images/phone-icon.jpg' ) ?>') no-repeat left center; padding-left: 30px;height: 20px;display: block;line-height: 20px;"><span><?php echo sprintf("%s.%s.%s",substr($hotline,0,4),substr($hotline,4,3),substr($hotline,7,3)); ?></span></a></div>
<?php wp_footer(); ?>
<script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",67830]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102505977-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
