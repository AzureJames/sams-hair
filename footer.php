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
			<div class="upper-footer">
				<div class="left-side">
				
					<p>
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__("Unit 140 16 Renault Cres. St Albert"));
						?>
					</p>

					<p>
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__("samstyres@hotmail.com"));
						?>
					</p>
					<p>
						<?php
						/* translators: %s: CMS name, i.e. WordPress. */
						printf( esc_html__("780-470-0124"));
						?>
					</p>
				</div>
				<div class="right-side">
					<ul class="footer-social">
						
					
						 <li class="instagram"><a href="#"><img src="http://samlebel.web.dmitcapstone.ca/wp-content/uploads/2022/11/insta.png" alt="instagram logo"></a></li>

						<li class="facebook"><a href="#"><img src="http://samlebel.web.dmitcapstone.ca/wp-content/uploads/2022/11/fb.png" alt="fb logo"></a></li> 
					</ul>
				</div>
			</div>

			<!-- Â-->
			<div class="copyright">
				<p>
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__("© Sam Kwetio Hairstyles"));
					?>
				</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
