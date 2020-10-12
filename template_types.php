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
				
				<a href="<?php the_permalink(); ?>">
					<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
					<article class="article-centrale" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat; background-size: cover; background-position: top;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="header">
							<h1 class="title"><?php print the_title(); ?></h1>
						</div>
						<div></div>
						<div></div>
						<div class="pdf">
							<?php
								$pdf = get_field('pdf');
								if( $pdf ): ?>
									<a href="<?php echo $pdf['url']; ?>" target="_blank">PDF</a>
								<?php endif;
							?>
						</div>
					</article>
				</a>
				<?php
			endwhile;
		endif; 
	?>

	</main><!-- #main -->


<?php
get_sidebar();
get_footer();