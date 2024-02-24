<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container-footer">
			<p class="footer-text">All Rights Reserved</p>
			<img src="<?php echo get_template_directory_uri() . "/assets/images/copyright.png"?>" alt="copyright">
			<p class="footer-text">2021 akhiltj</p>
			<img src="<?php echo get_template_directory_uri() . "/assets/images/Frame.png"?>" alt="frame">
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
