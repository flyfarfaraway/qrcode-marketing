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
<div class="item">
	<div class="col-md-12 col-left">
		<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="customer-thumbnail">
			<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
		</div><!-- .post-thumbnail -->
		<?php endif; ?>
		<div class="customer-info">
			<?php the_title( '<h4 class="customer-name">', '</h4>' ); ?>
			<?php 
			$vi_tri = get_post_meta($post->ID, 'wpcf-vi-tri');
			$mo_ta = get_post_meta($post->ID, 'wpcf-mo-ta');
			?>
			<?php if (count($vi_tri) > 0) : ?>
			<p class="customer-address"><?php echo $vi_tri[0] ?></p>
			<?php endif; ?>
			<div class="horizontal-rule rule-small rule-65 rule-left"></div>
			<?php if (count($mo_ta) > 0) : ?>
			<p class="customer-description"><?php echo $mo_ta[0] ?></p>
			<?php endif; ?>
		</div>
	</div>
</div>