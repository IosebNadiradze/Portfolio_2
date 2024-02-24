<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<h1><?php echo get_the_title(); ?></h1>
			<div class="single-projects-content">
				<?php the_content(); ?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
