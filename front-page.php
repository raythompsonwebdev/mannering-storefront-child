<?php
/**
 * *PHP version 7
 *
 * Template Name :Home
 *
 * Front page | core/front-page.php.
 *
 * @category   Front_Page
 * @package    mannering-woocommerce-child
 * @subpackage Front_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/mannering-music.git
 * @link       http:www.raythompsonwebdev.co.uk.mannering-music
 */

 get_header(); ?>

<!--Slider-->

<section id="slider">

	<article id="pageContainer">

		<div class="bx-wrapper">
			<div class="bx-viewport">
				<ul class="bxslider">
					<li>
						<article class="slider-text">
							<h1>CLEARANCE <span>SALE</span></h1>
							<h2>UP TO 10&#37; OFF</h2>
							<div class="features-list">
								<h3> <?php esc_html_e( 'Check out our end of season sale on the latest Hip Hop music from our vast collection.', 'mannering-woocommerce-child' ); ?>
								</h3>
							</div>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/shop/" class="button">Shop Now</a>
							<br/>
						</article>
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/sites/3/2020/11/manneringhiphop.png" alt="hip-hop-albums"/>
					</li>

					<li>
						<article class="slider-text">
							<h1>CLEARANCE<span>SALE</span></h1>
							<h2>UP TO 10&#37; OFF</h2>
							<div class="features-list">
								<h3>
								<?php esc_html_e( 'Check out our end of season sale on the latest Jazz music from our vast collection.', 'mannering-woocommerce-child' ); ?></h3>
							</div>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/shop/" class="button">Shop Now</a>
						</article>
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/sites/3/2020/11/manneringjazz.png" alt="jazz-albums"/>
					</li>

					<li>
						<article class="slider-text">
							<h1>CLEARANCE<span>SALE</span></h1>
							<h2>UP TO 10&#37; OFF</h2>
							<div class="features-list">
								<h3>
								<?php esc_html_e( 'Check out our end of season sale on the latest Country music from our vast collection.', 'mannering-woocommerce-child' ); ?>
								</h3>
							</div>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/shop/" class="button">Shop Now</a>
						</article>
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/sites/3/2020/11/manneringcountry.png" alt="country-albums"/>
					</li>

					<li>
						<article class="slider-text">
							<h1>CLEARANCE<span>SALE</span></h1>
							<h2>UP TO 10&#37; OFF</h2>
							<div class="features-list">
								<h3>
								<?php esc_html_e( 'Check out our end of season sale on the latest Jazz music albums from our vast collection.', 'mannering-woocommerce-child' ); ?>
								</h3>
							</div>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>/shop/" class="button">Shop Now</a>
						</article>
						<img src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/sites/3/2020/11/manneringhiphop.png" alt="hip-hop-albums"/>
					</li>
				</ul>
			</div>
		</div>
	</article>

	<figure id="ie8-image">
	<img id="image-5" src="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/themes/mannering-storefront-child/images/sliderimages/manneringhiphop.png" alt="home-page-image">
	</figure>

</section>

<h1><?php esc_html_e( 'Welcome to Mannering Music.', 'mannering-woocommerce-child' ); ?></h1>

<!--main-section-->
<main id="primary" role="main" >
</main>

<div class="clearfix"></div>

<!--Hip Hop section -->
<section class="genre-section group">

	<h1><?php esc_html_e( 'Featured Hip Hop Albums', 'mannering-woocommerce-child' ); ?></h1>

	<div class="flex-wrapper">

		<?php
		$mannering_woocommerce_child_params   = array(
			'posts_per_page' => 5,
			'post_type'      => 'product',
			'product_cat'    => 'hip-hop',
		);
		$mannering_woocommerce_child_wc_query = new WP_Query( $mannering_woocommerce_child_params );
		?>
		<?php if ( $mannering_woocommerce_child_wc_query->have_posts() ) : // 3. ?>
			<?php
			while ( $mannering_woocommerce_child_wc_query->have_posts() ) : // 4.
				$mannering_woocommerce_child_wc_query->the_post(); // 4.1.
				?>

				<figure class="grid-1-of-5">
					<?php if ( has_post_thumbnail() ) { ?>

						<a class="images-1-of-5" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
							<?php the_post_thumbnail( 'featured-image' ); ?>
						</a>

					<?php } else { ?>

						<a class="images-1-of-5" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
							<?php the_post_thumbnail(); ?>
						</a>

						<?php
					}
					?>

					<figcaption class="cap-1-of-5">
						<h1><?php the_title(); ?></h1>
					</figcaption>



				</figure>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p>
				<?php esc_html_e( 'No Products', 'mannering-woocommerce-child' ); ?>
			</p>
		<?php endif; ?>



	</div>

</section>

<div class="clearfix"></div>


<!--Country section -->
<section class="genre-section group">

	<h1><?php esc_html_e( 'Featured Country Albums', 'mannering-woocommerce-child' ); ?></h1>

	<div class="flex-wrapper">

		<?php
		$mannering_woocommerce_child_params   = array(
			'posts_per_page' => 5,
			'post_type'      => 'product',
			'product_cat'    => 'country',
		);
		$mannering_woocommerce_child_wc_query = new WP_Query( $mannering_woocommerce_child_params );
		?>
		<?php if ( $mannering_woocommerce_child_wc_query->have_posts() ) : ?>
			<?php
			while ( $mannering_woocommerce_child_wc_query->have_posts() ) :
				$mannering_woocommerce_child_wc_query->the_post();
				?>
				<figure class="grid-1-of-5">

					<?php if ( has_post_thumbnail() ) { ?>

						<a class="images-1-of-5" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
							<?php the_post_thumbnail( 'featured-image' ); ?>
						</a>

					<?php } else { ?>

						<a class="images-1-of-5" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
							<?php the_post_thumbnail(); ?>
						</a>

						<?php
					}
					?>

					<figcaption class="cap-1-of-5">
						<h1><?php the_title(); ?></h1>



					</figcaption>

				</figure>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p>
				<?php esc_html_e( 'No Products', 'mannering-woocommerce-child' ); ?>
			</p>
		<?php endif; ?>
	</div>

</section>

<div class="clearfix"></div>

<!--Jazz section -->
<section class="genre-section group">

	<h1><?php esc_html_e( 'Featured Jazz Albums', 'mannering-woocommerce-child' ); ?></h1>

	<div class="flex-wrapper">

		<?php
		$mannering_woocommerce_child_params   = array(
			'posts_per_page' => 5,
			'post_type'      => 'product',
			'product_cat'    => 'jazz',
		);
		$mannering_woocommerce_child_wc_query = new WP_Query( $mannering_woocommerce_child_params );
		?>
		<?php if ( $mannering_woocommerce_child_wc_query->have_posts() ) : ?>
			<?php
			while ( $mannering_woocommerce_child_wc_query->have_posts() ) :
				$mannering_woocommerce_child_wc_query->the_post();
				?>
				<figure class="grid-1-of-5">

					<?php if ( has_post_thumbnail() ) { ?>

						<a class="images-1-of-5" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
							<?php the_post_thumbnail( 'featured-image' ); ?>
						</a>

					<?php } else { ?>

						<a class="images-1-of-5" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark">
							<?php the_post_thumbnail(); ?>
						</a>

						<?php
					}
					?>
					<figcaption class="cap-1-of-5">
						<h1><?php the_title(); ?></h1>
					</figcaption>

				</figure>

			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p>
				<?php esc_html_e( 'No Products', 'mannering-woocommerce-child' ); ?>
			</p>
		<?php endif; ?>
	</div>

</section>

<div class="clearfix"></div>


<?php get_footer(); ?>
