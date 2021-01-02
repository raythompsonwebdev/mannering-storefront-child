<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mannering-woocommerce-child
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'mannering-woocommerce-child' ); ?></a>

	<header id="masthead" class="site-header">

		<div class="site-branding">

			<div class="site-logo">
				<?php $site_title = get_bloginfo( 'name' ); ?>
					<a href=" <?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<div class="screen-reader-text">
								<?php
									/* translators: %1$s:, CMSname: WordPress. */
									printf( esc_html_e( 'Go to the home page of %1$s', 'mannering_music' ), esc_html( $site_title ) );
								?>
						</div>
							<?php
								if ( has_custom_logo() ) :
									the_custom_logo();
								else :
							?>
						<div class="site-firstletter" aria-hidden="true">
								<?php echo esc_html( substr( $site_title, 0, 1 ) ); ?>
						</div>
						<?php endif; ?>
				</a>
			</div>

			<div class="site-title">

							<?php if ( is_front_page() || is_page() ) :	?>
							<hgroup><h1 id="logo"><span>MANNERING</span><span>MU</span>SIC</h1>
							<?php elseif ( is_home() ) : ?>
								<hgroup><h1 id="logo"><span>MANNERING</span><span>BL</span>OG</h1>
									<?php else : ?>
								<hgroup><h1 id="logo"><span>MANNERING</span><span>STO</span>RE</h1>
									<?php	endif;

										$mannering_woocommerce_child_description = get_bloginfo( 'description', 'display' );

										if ( $mannering_woocommerce_child_description || is_customize_preview() ) :
									?>
									<h2 class="site-description"><?php echo esc_html( $mannering_woocommerce_child_description  );// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h2>

							</hgroup>
							<?php endif; ?>

			</div>

		</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<nav id="site-navigation" class="main-navigation">

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'mannering-woocommerce-child' ); ?></button>

				<?php
				// Checking if there's anything in Top Menu.
				// if ( has_nav_menu( 'Primary Menu' ) ) {
				// If there is, adds the Top Menu area.
				wp_nav_menu(
					array(
						'menu'      => 'main',
						'container' => 'ul',
						'menu_id' => 'menu-main',
						'theme_location' => 'Main'
					)
				);
				// }
				?>
	</nav><!-- #site-navigation -->

	<div id="content" class="group">
