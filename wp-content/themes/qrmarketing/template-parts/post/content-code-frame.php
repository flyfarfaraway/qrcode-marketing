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

<article id="post-<?php the_ID(); ?>" <?php post_class('code-frame text-center col-md-4 col-sm-6 col-xs-12'); ?>>
	<div class="code-frame-area">
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

			
			?>
		</header><!-- .entry-header -->

		<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
			<div class="post-thumbnail">
				<?php the_post_thumbnail( 'qrmarketing-thumbnail-avatar' ); ?>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>
		<?php if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} elseif ( is_front_page() && is_home() ) {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			} else {
				the_title( '<h2 class="entry-title text-center">', '</h2>' );
			} 
			$attach_file = get_post_meta($post->ID, 'wpcf-file-download');
			$mo_ta = get_post_meta($post->ID, 'wpcf-mo-ta-qr-code');
			if (count($attach_file) == 0) {
				return;
			}
			$file_path = explode('/', $attach_file[0]);
			?>
		<div class="entry-content">
			<div class="qr-code-description">
			<?php if (count($mo_ta) > 0) : ?>
				<?php echo $mo_ta[0] ?>
			<?php endif; ?>
			</div>
			<a class="qr-btn qr-btn-warning" href="<?php echo $attach_file[0] ?>" download="<?php echo $file_path[count($file_path) - 1] ?>" target="_blank">Tải về</a>
		</div><!-- .entry-content -->

		<?php
		if ( is_single() ) {
			twentyseventeen_entry_footer();
		}
		?>
	</div>
</article><!-- #post-## -->
