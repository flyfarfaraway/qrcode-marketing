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
				<!--GOOGLE ADWORD-->
				<script type="text/javascript">
				/* <![CDATA[ */
				var google_conversion_id = 840862678;
				var google_custom_params = window.google_tag_params;
				var google_remarketing_only = true;
				/* ]]> */
				</script>
				<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
				</script>
				<noscript>
				<div style="display:inline;">
				<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/840862678/?guid=ON&amp;script=0"/>
				</div>
				</noscript>
				<!--end GOOGLE ADWORD-->
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<div style="position:fixed;z-index:1000000;font-size:20px;bottom:5px;left:10px;padding:10px;background:orange;color:white;font-weight:bold;-moz-border-radius:10px;border-radius:10px;-webkit-border-radius:10px;"><a href="tel:0969059786" style="color:white;text-decoration:none;background: url('http://qrcode-marketing.com/wp-content/themes/qrmarketing/assets/images/phone-icon.jpg') no-repeat left center; padding-left: 30px;height: 20px;display: block;line-height: 20px;"><span>0969.059.786</span></a></div>
<!-- SUBIZ-->
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
    <!-- GOOGLE ANALYTIC-->
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
