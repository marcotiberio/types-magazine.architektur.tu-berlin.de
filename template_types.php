<?php 
	/* Template Name: Types */
?>

<?php get_header(); ?>

<main id="primary" class="site-main">

	<div class="issue-header">
		<div class="intro-types" id="boxTypes">
			<div class="info-type">
				<div id="titleTypes">
					<h1>ISSUE 2</h1>
				</div>
				<div id="arrowsTypes">
					<h1>
					<span id="arrowOne"> > </span>
					<span id="arrowTwo"> > </span>
					<span id="arrowThree"> > </span>
					</h1>
				</div>
				<div></div>
			</div>
			<div id="knowledgeTypes">
				<h1>of Knowledge Production</h1>
			</div>
			<div id="infoTypes">
				<p>What would be the future of architecture in the context of the current shift to enhanced digital communication? 
				The first issue of the web magazine investigates under the title ‚Types of Knowledge Production‘ various modes of knowledge production concerning spatial practice – understood as spatial forms for collective interaction and transmission ranging from educational set-ups to new tools research and knowledge exchange. 
				Under the reign of digital communication, this issue explores; relationships between ‚virtual‘ and ‚physical‘ forms of knowledge, between the process of information distribution to materialized manifestations of know-how and skills. The contributions question the current state of architecture communication seeking for new types of methods for content production in architecture.
				The future is always at the threshold; Types is a reflection of futures. Until the next issue, enjoy.</p>
			</div>
		</div>
		<div class="intro-types" id="boxTypesMobile">
			<div class="info-type" id="">
				<div id="rowOne">
					<div id="titleTypesMobile">
						<h1>Types 2</h1>
					</div>
					<div id="arrowsTypesMobile">
						<h1>>>></h1>
					</div>
				</div>
				<div id="rowTwo">
					<div id="knowledgeTypesMobile">
						<h1>of Knowledge Production</h1>
					</div>
					<div></div>
				</div>
				<div id="rowThree">
					<div id="infoTypesMobile">
					<p>What would be the future of architecture in the context of the current shift to enhanced digital communication? 
					The first issue of the web magazine investigates under the title ‚Types of Knowledge Production‘ various modes of knowledge production concerning spatial practice – understood as spatial forms for collective interaction and transmission ranging from educational set-ups to new tools research and knowledge exchange. 
					Under the reign of digital communication, this issue explores; relationships between ‚virtual‘ and ‚physical‘ forms of knowledge, between the process of information distribution to materialized manifestations of know-how and skills. The contributions question the current state of architecture communication seeking for new types of methods for content production in architecture.
					The future is always at the threshold; Types is a reflection of futures. Until the next issue, enjoy.<br><br></p>
					</div>
					<div></div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'cat' => 3,
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

	<div class="issue-header">
		<div class="intro-types" id="boxTypes">
			<div class="info-type">
				<div id="titleTypes">
					<h1>ISSUE 1</h1>
				</div>
				<div id="arrowsTypes">
					<h1>
					<span id="arrowOne"> > </span>
					<span id="arrowTwo"> > </span>
					<span id="arrowThree"> > </span>
					</h1>
				</div>
				<div></div>
			</div>
			<div id="knowledgeTypes">
				<h1>of Knowledge Production</h1>
			</div>
			<div id="infoTypes">
				<p>What would be the future of architecture in the context of the current shift to enhanced digital communication? 
				The first issue of the web magazine investigates under the title ‚Types of Knowledge Production‘ various modes of knowledge production concerning spatial practice – understood as spatial forms for collective interaction and transmission ranging from educational set-ups to new tools research and knowledge exchange. 
				Under the reign of digital communication, this issue explores; relationships between ‚virtual‘ and ‚physical‘ forms of knowledge, between the process of information distribution to materialized manifestations of know-how and skills. The contributions question the current state of architecture communication seeking for new types of methods for content production in architecture.
				The future is always at the threshold; Types is a reflection of futures. Until the next issue, enjoy.</p>
			</div>
		</div>
		<div class="intro-types" id="boxTypesMobile">
			<div class="info-type" id="">
				<div id="rowOne">
					<div id="titleTypesMobile">
						<h1>Types</h1>
					</div>
					<div id="arrowsTypesMobile">
						<h1>>>></h1>
					</div>
				</div>
				<div id="rowTwo">
					<div id="knowledgeTypesMobile">
						<h1>of Knowledge Production</h1>
					</div>
					<div></div>
				</div>
				<div id="rowThree">
					<div id="infoTypesMobile">
					<p>What would be the future of architecture in the context of the current shift to enhanced digital communication? 
					The first issue of the web magazine investigates under the title ‚Types of Knowledge Production‘ various modes of knowledge production concerning spatial practice – understood as spatial forms for collective interaction and transmission ranging from educational set-ups to new tools research and knowledge exchange. 
					Under the reign of digital communication, this issue explores; relationships between ‚virtual‘ and ‚physical‘ forms of knowledge, between the process of information distribution to materialized manifestations of know-how and skills. The contributions question the current state of architecture communication seeking for new types of methods for content production in architecture.
					The future is always at the threshold; Types is a reflection of futures. Until the next issue, enjoy.<br><br></p>
					</div>
					<div></div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'cat' => 2,
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