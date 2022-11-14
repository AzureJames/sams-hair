<?php

/**
 * The template for displaying services page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sams-hair
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="services-page">
		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'page');

		endwhile; // End of the loop.
		?>
	</div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
