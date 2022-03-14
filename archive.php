<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @author		Alwyn Barry
 * @copyright	2021
 * For use in	w3-theme
 * @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @version		1.0.0
 * 
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License as published by the Free Software Foundation; either version 2 of the License, 
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * 
 * @package w3_theme
 */

get_header();
get_template_part( 'template-parts/pageheader', 'archive' );
get_template_part( 'template-parts/sidebarcolumns' );
?>


	<main id="primary" class="site-main w3-content w3-container">
		
		<?php the_archive_description( '<section class="archive-description w3-container w3-section">', '</section>' ); ?>

		<?php if ( have_posts() ) { ?>

			<section class="archive-posts w3-section">

				<?php
				/* Start the Loop */
				while ( have_posts() ) { 
					the_post();
					get_template_part( 'template-parts/content', 'archive' );
				} // end while
				?>

			</section> <!-- archive-posts -->

			<?php if (! is_singular() ) { ?>
			<section class="archive-navigation w3-container w3-section">
				<?php the_posts_navigation(); ?>
			</section><!-- archive-navigation -->
			<?php } // end if ?>

		<?php } else { ?>
		
			<section class="no-archive-posts w3-section">
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			</section> <!-- no-archive-posts -->

		<?php } // end if ?>
		
	</main><!-- #main -->


<?php
get_template_part( 'template-parts/sidebarcontent' );
get_footer();
