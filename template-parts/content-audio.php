<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mannering-woocommerce-child.
 */

?>

<!-- tab menu -->
	<ul id="tabs" class="clearfix">
		<li><a href="#">Hip Hop</a></li>
		<li><a href="#">Country</a></li>
		<li><a href="#">Jazz</a></li>
	</ul>

	<!-- tab content -->
	<div class="tab-content">

		<!-- tab Hip Hop -->
		<div class="tab">
			<?php
				$mannering_woocommerce_child_params = array(
					'posts_per_page' => 5,
					'post_type'      => 'product',
					'product_cat'    => 'hip-hop',

				);
				$mannering_woocommerce_child_wc_query = new WP_Query( $mannering_woocommerce_child_params );
				?>
			<?php if ( $mannering_woocommerce_child_wc_query->have_posts() ) : ?>
				<?php
				while ( $mannering_woocommerce_child_wc_query->have_posts() ) :
					$mannering_woocommerce_child_wc_query->the_post();
					?>
				<article class="hiphop_panel">

					<!-- audio info panel - image & text -->
					<span class="hiphop-panel-text">

						<?php if ( has_post_thumbnail() ) : ?>

							<a class="hiphop_panel_img" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail( 'featured-image' ); ?></a>

						<?php else : ?>

							<a class="hiphop_panel_img" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>

						<?php endif; ?>

						<ul>
							<li><?php the_title(); ?></li>
							<li></li>
							<li></li>
						</ul>
					</span>

					<!-- social media icons -->
					<span class="social_aud">
						<a href="#" alt="twitter-icon">
							<i class="fa fa-twitter soc" title="twitter-icon"></i>
						</a>
						<a href="#" alt="twitter-icon">
							<i class="fa fa-facebook soc" title="facebook-icon"></i>
						</a>
						<a href="#" alt="favourite-icon">
							<i class="fa fa-heart soc" title="favourite"></i>
						</a>
					</span>

					<!-- audio player -->
					<audio id="result_player">
						<source src="" type='audio/mpeg' />
						<source src="" type='audio/ogg' />
						<source src="" type='audio/mp4' />
						<p>Your browser does not support HTML5 audio.</p>
					</audio>

					<br/>
					<!-- audio player controls-->
					<div id="audio_controls">
						<div id="play_toggle" class="player-button">
						<i class="fa fa-play-circle" aria-hidden="true" title="Play"></i>
						</div>
						<div id="progress">
						<div id="load_progress"></div>
						<div id="play_progress"></div>
						</div>
						<div id="time">
						<div id="current_time">00:00</div>
						<div id="duration">00:00</div>
						</div>
					</div>

				</article>

			<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
			<p>
				<?php esc_html__( 'No Products', 'mannering-woocommerce-child' ); ?>
			</p>
			<?php endif; ?>

		</div>

		<!--tab Country-->
		<div class="tab">
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
				<article class="hiphop_panel">

					<!-- audio info panel - image & text -->
					<span class="hiphop-panel-text">

						<?php if ( has_post_thumbnail() ) { ?>

						<a class="hiphop_panel_img" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail( 'featured-image' ); ?></a>

						<?php } else { ?>

						<a class="hiphop_panel_img" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>

						<?php } ?>

						<ul>
							<li><?php the_title(); ?></li>
							<li></li>
							<li></li>
						</ul>

					</span>

					<!-- social media icons -->
					<span class="social_aud">
						<a href="#" alt="twitter-icon">
							<i class="fa fa-twitter soc" title="twitter-icon"></i>
						</a>
						<a href="#" alt="twitter-icon">
							<i class="fa fa-facebook soc" title="facebook-icon"></i>
						</a>
						<a href="#" alt="favourite-icon">
							<i class="fa fa-heart soc" title="favourite"></i>
						</a>
					</span>

					<!-- audio player -->
					<audio id="result_player" controls>
						<source src="" type='audio/mpeg' />
						<source src="" type='audio/ogg' />
						<source src="" type='audio/mp4' />
						<p>Your browser does not support HTML5 audio.</p>
					</audio>

					<br/>
					<!-- audio player controls-->
					<div id="audio_controls">

						<div id="play_toggle" class="player-button">
							<i class="fa fa-play-circle" aria-hidden="true" title="Play"></i>
						</div>

						<div id="progress">
							<div id="load_progress"></div>
							<div id="play_progress"></div>
						</div>

						<div id="time">
							<div id="current_time">00:00</div>
							<div id="duration">00:00</div>
						</div>

					</div>

				</article>
			<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
			<p>
				<?php esc_html_e( 'No Products', 'mannering-woocommerce-child' ); ?>
			</p>
			<?php endif; ?>

		</div>

		<!--tab Jazz-->
		<div class="tab">
			<?php
				$mannering_woocommerce_child_params = array(
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
				<article class="hiphop_panel">
					<!-- audio info panel - image & text -->
					<span class="hiphop-panel-text">
						<?php if ( has_post_thumbnail() ) { ?>

						<a class="hiphop_panel_img" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail( 'featured-image' ); ?></a>

						<?php } else { ?>

						<a class="hiphop_panel_img" href="<?php echo esc_url( get_permalink() ); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>

						<?php } ?>

						<ul>
							<li><?php the_title(); ?></li>
							<li></li>
							<li></li>
						</ul>
					</span>

					<!-- social media icons -->
					<span class="social_aud">
						<a href="#" alt="twitter-icon">
							<i class="fa fa-twitter soc" title="twitter-icon"></i>
						</a>
						<a href="#" alt="twitter-icon">
							<i class="fa fa-facebook soc" title="facebook-icon"></i>
						</a>
						<a href="#" alt="favourite-icon">
						<i class="fa fa-heart soc" title="favourite"></i>
						</a>
					</span>

					<!-- audio player-->
					<audio id="result_player" controls>
						<source src="" type='audio/mpeg' />
						<source src="" type='audio/ogg' />
						<source src="" type='audio/mp4' />
						<p>Your browser does not support HTML5 audio.</p>
					</audio>

					<br/>
					<!-- audio player controls-->
					<div id="audio_controls">
						<div id="play_toggle" class="player-button">
							<i class="fa fa-play-circle" aria-hidden="true" title="Play"></i>
						</div>
						<div id="progress">
							<div id="load_progress"></div>
							<div id="play_progress"></div>
						</div>
						<div id="time">
							<div id="current_time">00:00</div>
							<div id="duration">00:00</div>
						</div>
					</div>

				</article>

			<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>

			<p><?php esc_html_e( 'No Products', 'mannering-woocommerce-child' ); ?></p>

			<?php endif; ?>

		</div>

	</div>

	<div class="clearfix"></div>
