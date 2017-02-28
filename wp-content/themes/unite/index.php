<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package unite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="slide"><?php do_action('slideshow_deploy', '41'); ?></div>
			<div class="hot">
				<h2>Quà tặng ngày 8/3</h2>
				<ul class="products">
				<?php
					$args = array( 'post_type' => 'product', 'posts_per_page' => 9, 'product_cat' => 'qua-tang-83', 'orderby' => '' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<li class="col-md-4">    
						<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
							<?php woocommerce_show_product_sale_flash( $post, $product ); ?>
							<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
							<h3><?php the_title(); ?></h3>
							<span class="price"><?php echo $product->get_price_html(); ?></span>                    
						</a>
						<!--<php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>-->
					</li>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				</ul><!--/.products-->		
			</div>
			<div class="hot">
				<h2>Quà tặng 8/3 cho Sếp</h2>
				<ul class="products">
				<?php
					$args = array( 'post_type' => 'product', 'posts_per_page' => 9, 'product_cat' => 'qua-tang-doc', 'orderby' => '' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<li class="col-md-4">    
						<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
							<?php woocommerce_show_product_sale_flash( $post, $product ); ?>
							<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
							<h3><?php the_title(); ?></h3>
							<span class="price"><?php echo $product->get_price_html(); ?></span>                    
						</a>
						<!--<php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>-->
					</li>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				</ul><!--/.products-->		
			</div>
			<div class="hot">
				<h2>Quà tặng 8/3 độc</h2>
				<ul class="products">
				<?php
					$args = array( 'post_type' => 'product', 'posts_per_page' => 9, 'product_cat' => 'qua-tang-83-cho-sep', 'orderby' => '' );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
					<li class="col-md-4">    
						<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
							<?php woocommerce_show_product_sale_flash( $post, $product ); ?>
							<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>
							<h3><?php the_title(); ?></h3>
							<span class="price"><?php echo $product->get_price_html(); ?></span>                    
						</a>
						<!--<php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>-->
					</li>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				</ul><!--/.products-->		
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
