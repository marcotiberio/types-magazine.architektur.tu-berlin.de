<?php 
	/* Template Name: Types */
?>

<?php get_header(); ?>

<main id="primary" class="site-main">

	<?php 
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'DESC',
			'posts_per_page' => -1,
		);
		$arr_posts = new WP_Query( $args );
		
		if ( $arr_posts->have_posts() ) :
			
			while ( $arr_posts->have_posts() ) :
				$arr_posts->the_post();
				?>
				<article class="article-centrale" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="event-header" style="display: grid; grid-template-columns: 1fr 1fr;">
						<?php types_magazine_post_thumbnail(); ?>
						<a href="<?php the_permalink(); ?>">
							<span class="title"><?php print the_title(); ?></span>
						</a>
					</div>
					<div class="summary">
						
					</div>
				</article>
				<?php
			endwhile;
		endif; 
	?>

	</main><!-- #main -->


<?php
get_sidebar();
get_footer();