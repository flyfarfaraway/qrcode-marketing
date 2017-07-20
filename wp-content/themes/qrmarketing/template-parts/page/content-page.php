<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twentyseventeen_edit_link( get_the_ID() ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="post-footer">
		<div class="button-like">
			<div class="fb-like" data-href="<?php echo esc_url( get_permalink() ) ?>" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
		</div>
		<div class="comment-box">
			<div class="fb-comments" data-href="<?php echo esc_url( get_permalink() ) ?>" data-numposts="5"></div>
		</div>
	</div>
</article><!-- #post-## -->
