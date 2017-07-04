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

<article id="post-<?php the_ID(); ?>" <?php post_class('text-center pdf_file col-md-4 col-sm-6 col-xs-12'); ?>>
	<?php
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<div class="pdf-icon">
	<img src="<?php echo get_theme_file_uri( '/assets/images/pdf-icon.jpg' ) ?>" alt="" />
	</div>
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
		$pdf_file = get_post_meta($post->ID, 'wpcf-pdf-file');
		if (count($pdf_file) == 0) {
			return;
		}
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title">', '</h2>' );
		}
		$file_path = explode('/', $pdf_file[0]);
		?>
	</header><!-- .entry-header -->
	<div>
		<a href="<?php echo $pdf_file[0] ?>" target="_blank">Xem </a> | 
		<a href="<?php echo $pdf_file[0] ?>" download="<?php echo $file_path[count($file_path) - 1] ?>" target="_blank">Tải xuống</a>
	</div>

</article><!-- #post-## -->
