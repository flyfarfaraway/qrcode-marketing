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
<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-6 col-xs-12'); ?>>
	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'qrmarketing-thumbnail-tuyen-dung' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>
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

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		
	</div><!-- .entry-content -->
	<div class="post-footer clearfix">
		<?php
		$qr_code_tuyen_dung = get_post_meta($post->ID, 'wpcf-qr-code-tuyen-dung');
		if (count($qr_code_tuyen_dung) > 0) { ?>
		<div>
			<img src="<?php echo $qr_code_tuyen_dung[0] ?>" width="48" class="pull-left" style="margin-right: 15px;" />
			Scan QR Code để đăng ký ứng tuyển
		</div>
		<?php } ?>
	</div>

</article><!-- #post-## -->
