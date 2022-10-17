<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sams-hair
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__("Contact Information"));
				?>
			</p>
			<p>
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__("Available Hours"));
				?>
			</p>
			<ul class="footer-social">
				<li><a href="#"><img src="" alt="">a</a></li>
				<li><a href="#"><img src="" alt="">b</a></li>
				<li><a href="#"><img src="" alt="">c</a></li>
			</ul>
			<p>
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__("Copyright Sam Lebel"));
				?>
			</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
