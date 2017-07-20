<?php
/**
 * The template for displaying archive documents
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Qr_Marketing
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="container content-2-column">
	<div class="row">
		<div class="col-md-3 column-1">
		<?php if ( has_nav_menu( 'pricing-menu' ) ) : ?>
			<div class="navigation-qr-information">
					<?php get_template_part( 'template-parts/navigation/navigation', 'pricing' ); ?>
			</div><!-- .navigation-qr-information -->
		<?php endif; ?>
		</div>
		<div class="col-md-9 archive-blog-custom column-2">
			<?php custom_breadcrumbs(); ?>
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title">Câu hỏi thường gặp</h1>
					<p>Chúng tôi giúp bạn trả lời mọi câu hỏi của bạn. Hãy gõ vào dưới đây để tìm câu trả lời bạn cần</p>
				</header><!-- .page-header -->
			<?php endif; ?>

			<div id="faq-content">
				<main role="main">
					<div class="cooperation-tab">
						<?php 
						$terms = get_terms( array(
						    'taxonomy' => 'faq-category',
						    'hide_empty' => false,
						    'orderby' => 'id',
							'order' => 'ASC'
						)); ?>
						<ul class="nav nav-tabs" role="tablist">
							<?php if (count($terms) > 0) {
								$i = 0;
								foreach ($terms as $term) { 
									if ($term->count == 0) {
									continue;
								} ?>
								<li role="presentation" class="<?php echo ($i == 0 ? 'active' : ''); $i++; ?>">
							    	<a href="#term_id_<?php echo $term->term_id ?>" aria-controls="term_id_<?php echo $term->term_id ?>" role="tab" data-toggle="tab"><?php echo $term->name ?></a>
						    	</li>
								<?php }
							} ?>
						</ul>
						<div class="tab-content faq-content">
							<?php if (count($terms) > 0) {
								$i = 0;
								foreach ($terms as $term) { 
									if ($term->count == 0) {
									continue;
								} ?>
								<div id="term_id_<?php echo $term->term_id ?>" class="tab-pane <?php echo ($i == 0 ? 'active' : ''); $i++; ?>" role="tabpanel">
							    	<?php
							    	$posts_array = get_posts(
									    array(
									        'posts_per_page' => -1,
									        'post_type' => 'faq',
									        'orderby' => 'date',
											'order' => 'ASC',
									        'tax_query' => array(
									            array(
									                'taxonomy' => 'faq-category',
									                'field' => 'term_id',
									                'terms' => $term->term_id,
									            )
									        )
									    )
									);
									if (count($posts_array) > 0) { ?>
									<div class="panel-group" id="accordion_<?php echo $term->term_id ?>" role="tablist" aria-multiselectable="true">
										<?php 
										$i = 0;
										foreach ($posts_array as $post) { ?>
										<div class="panel panel-default">
									    	<div class="panel-heading" role="tab" id="headingOne">
										      	<h4 class="panel-title">
										       		<a class="<?php echo ($i == 0 ? 'collapsed' : 'collapsed') ?>" role="button" data-toggle="collapse" data-parent="#accordion_<?php echo $term->term_id ?>" href="#post_id_<?php echo $post->ID ?>" aria-expanded="false" aria-controls="post_id_<?php echo $post->ID ?>">
										          		<?php echo $post->post_title ?>
										        	</a>
										      	</h4>
										    </div>
										    <div id="post_id_<?php echo $post->ID ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
										      	<div class="panel-body">
										        	<?php echo $post->post_content ?>
										      	</div>
									    	</div>
									  	</div>
										<?php 
											$i++;
										} ?>
									</div>
									<?php } ?>
						    	</div>
								<?php }
							} ?>
						</div>
					</div>
					<p>Nếu bạn không tìm thấy câu trả lời bạn cần. Hãy liên hệ với chúng tôi theo số máy <a href="tel:19001234">1900 1234</a> hoặc</p>
					<?php echo do_shortcode('[contact-form-7 id="162" title="Gửi câu hỏi" html_class="qr-contact-form"]'); ?>
				</main><!-- #main -->
			</div><!-- #primary -->
		</div>
	</div>
</div>

<?php get_footer();
