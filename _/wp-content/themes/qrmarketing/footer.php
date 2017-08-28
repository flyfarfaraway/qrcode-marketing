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

				// get_template_part( 'template-parts/footer/site', 'info' );
				?>

			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<div style="position:fixed;z-index:1000000;font-size:20px;bottom:5px;left:10px;padding:10px;background:orange;color:white;font-weight:bold;-moz-border-radius:10px;border-radius:10px;-webkit-border-radius:10px;"><a href="tel:0969059786" style="color:white;text-decoration:none;background: url('http://qrcode-marketing.com/wp-content/themes/qrmarketing/assets/images/phone-icon.jpg') no-repeat left center; padding-left: 30px;height: 20px;display: block;line-height: 20px;"><span>0969.059.786</span></a></div>
<script type='text/javascript'>
        window._sbzq || function(e) {
            e._sbzq = [];
            var t = e._sbzq;
            t.push(["_setAccount", 67830]);
            var n = e.location.protocol == "https:" ? "https:" : "http:";
            var r = document.createElement("script");
            r.type = "text/javascript";
            r.async = true;
            r.src = n + "//static.subiz.com/public/js/loader.js";
            var i = document.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(r, i)
        }(window);
    </script>

</body>
</html>
