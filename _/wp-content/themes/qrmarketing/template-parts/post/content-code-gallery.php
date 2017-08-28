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
				<a class="example-image-link" data-title="<?php the_title() ?>" title="<?php the_ID() ?>"  href="<?php the_post_thumbnail_url('qrmarketing-thumbnail-gallery-large') ?>" data-lightbox="example-set">
					<?php the_post_thumbnail( 'qrmarketing-thumbnail-gallery' ); ?>
				</a>
			</div><!-- .post-thumbnail -->
		<?php endif; ?>
	</div>
</article><!-- #post-## -->
