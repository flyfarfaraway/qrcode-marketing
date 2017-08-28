<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<?php custom_breadcrumbs(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
				if ( is_single() ) {
					twentyseventeen_posted_on();
				} else {
					echo twentyseventeen_time_link();
					twentyseventeen_edit_link();
				};
			echo '</div><!-- .entry-meta -->';
		};
		$youtube_video = get_post_meta($post->ID, 'wpcf-youtube-video');
		$url = '';
		if (count($youtube_video) > 0) {
			$url = $youtube_video[0];
		}
		require_once(ABSPATH.'wp-includes/class-oembed.php');
		$oembed= new WP_oEmbed;
		//As noted in the comments below, you can auto-detect the video provider with the following
		$provider = $oembed->discover($url);
		//$provider = 'http://www.youtube.com/oembed';
		$video = $oembed->fetch($provider, $url);
		$title = $video->title;
		$html = $video->html;
		$thumb = $video->thumbnail_url;		 
		?>
	</header><!-- .entry-header -->
		<?php if (!is_single()) { ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo $thumb ?>" alt="" />
			</a>
		</div><!-- .post-thumbnail -->
		<?php } ?>
	<?php if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		} ?>
	<div class="entry-content">
	<?php 
	if (is_single()) { 
		echo '<div class="videoWrapper">';
		echo $html;
		echo '</div>';
	} ?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-## -->
