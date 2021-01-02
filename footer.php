<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @category   Footer_Page
 *
 * @subpackage Footer_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/mannering-music.git
 * @link       http:www.raythompsonwebdev.co.uk.mannering-music
 *
 * @package mannering-woocommerce-child
 */

?>
</div><!-- #main-content -->
	<footer id="colophon" class="site-footer">
		<?php
			// if ( has_nav_menu( 'Secondary Menu' ) ) {
				// If there is, adds the Top Menu area.
				wp_nav_menu(
					array(
						'menu'           => 'secondary',
						'container'      => 'ul',
						'menu_id'        => 'menu-secondary',
						'theme_location' => 'Secondary',
					)
				);
				// }
				?>
		<div class="social-btns">
			<ul>
				<li><a href="#"><i class="fa fa-twitter soc"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook soc"></i></a></li>
				<li><a href="#"><i class="fa fa-rss soc"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble soc"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram soc"></i></a></li>
			</ul>
	</div>
	</footer><!-- #colophon -->

	<p id="copyr">
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'mannering-woocommerce-child' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'mannering-woocommerce-child' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'mannering-woocommerce-child' ), 'mannering-woocommerce-child', '<a href="https://raythompsonwebdev.co.uk">raythompsonwebdev</a>' );
				?>

		<?php
			// $dt             = time();
			// $mysql_datetime = strftime( '%Y-%m-%d %H:%M:%S', $dt );
			// printf( esc_html__( 'Page was last updated :', 'mannering_music' ),  $mysql_datetime);

		?>


</p>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
