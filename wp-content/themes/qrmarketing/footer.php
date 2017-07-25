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
