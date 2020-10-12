<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package types-magazine
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

		<div id="linkPdf">
			<?php
			$file = get_field('pdf');
			if( $file ): ?>
				<a href="<?php echo $file['url']; ?>" target="_blank">
					<h3>PDF</h3>
				</a>
			<?php endif; ?>
		</div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
