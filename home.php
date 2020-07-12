<?php 
	/* Template Name: Home */
?>

<?php get_header(); ?>

<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-types', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->


<div style="display: none;">

    <?php if( have_rows('preview_movie') ): ?>

        <?php while( have_rows('preview_movie') ): the_row(); 

            // vars
            $cover = get_sub_field('cover_image');
            $title = get_sub_field('title');
            ?>

            
            <img src="<?php echo $cover['url']; ?>" />
            <a href="<?php echo $title['url']; ?>" target="_blank" rel="noopener noreferrer"></a>

        <?php endwhile; ?>

    <?php endif; ?>

</div>


<?php
get_sidebar();
get_footer();