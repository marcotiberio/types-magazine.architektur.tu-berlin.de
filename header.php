<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package types-magazine
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'types-magazine' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$types_magazine_description = get_bloginfo( 'description', 'display' );
			if ( $types_magazine_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $types_magazine_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<div class="intro-types" id="boxTypes">
			<div class="info-type">
				<div id="titleTypes">
					<h1>TYPES</h1>
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

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'types-magazine' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
