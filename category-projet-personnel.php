<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="galerie-personnel">
				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'galerie-personnel'); ?>

				<?php endwhile; ?>

			</section>

		<?php endif;?>
		
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
