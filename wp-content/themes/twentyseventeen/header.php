<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Anton|PT+Sans:400,700,700i" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">


<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	


			
			<?php if ( has_nav_menu( 'top' ) ) : ?>

			<div class="menu-barra-sup">
						<div class="menu-redes">
							<ul>
								<li><a href=""><img src="http://159.203.108.98/ScmMobility/wp-content/uploads/2019/05/facebook-bl.png" class="i-face"></a></li>
								<li><a href=""><img src="http://159.203.108.98/ScmMobility/wp-content/uploads/2019/05/twitter-bl.png"></a></li>
								<li><a href=""><img src="http://159.203.108.98/ScmMobility/wp-content/uploads/2019/05/youtube-bl.png"></a></li>
								<li><a href=""><img src="http://159.203.108.98/ScmMobility/wp-content/uploads/2019/05/linked-bl.png" class="i-linked"></a></li>
							</ul>
						</div>
						<div class="menu-idioma">
							<ul>
								<li><a href="">ES</a></li>
								<li><a href="">ENG</a></li>
							</ul>
						</div>	
		</div>


				<div class="navigation-top">
					<div class="menu-logo">	
						<?php the_custom_logo(); ?>
					</div>
					<div class="wrap">
						<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
					</div><!-- .wrap -->
				</div><!-- .navigation-top -->
			<?php endif; ?>
		</div>
	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">
