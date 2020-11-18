<?php
/**
 * *PHP version 5
 *
 * The template for displaying single pages
 *
 * Single page | core/single.php.
 *
 * @category   Single_Page
 * @package    Mannering Storefront Child Theme
 * @subpackage Single_Page
 * @author     Raymond Thompson <ray_thomp@hushmail.com>
 * @copyright  2017 Raymond Thompson
 * @license    http://www.gnu.org/licenses/gpl-3.0.en.html GPLv3
 * @version    GIT: https://github.com/raythompsonwebdev/mannering-music.git
 * @link       http:www.raythompsonwebdev.co.uk.mannering-music
 */
 get_header(); ?>


<!--Content box-->
  
<main id="main_text" role="main" >
</main>
	<!--main-end-->
	<?php
		while ( have_posts() ) :
			the_post();

			do_action( 'storefront_single_post_before' );

			get_template_part( 'content', 'single' );

			do_action( 'storefront_single_post_after' );

		endwhile; // End of the loop.
		?>


<!--Content End-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
