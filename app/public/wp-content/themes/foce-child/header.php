<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
        <ul>
            <li class="site-title"><a href="#" rel="home">Fleur d'oranger & chats errants</a></li>
        </ul>

        <div id="modal" class="modal" aria-controls="primary-menu" aria-expanded="false">
            <button class="modburger modopen">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div class="modcontent">
                <img class="modcontent-logo" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="logo foce">
                <ul>
                    <li class="modcontent-story flower cat"><a href="#story">Histoire</a></li>
                    <li class="modcontent-characters flower cat"><a href="#characters">Personnages</a></li>
                    <li class="modcontent-place flower cat"><a href="#place">Lieu</a></li>
                    <li class="modcontent-studio flower cat"><a href="#studio">Studio Koukaki</a></li>
                </ul>

                <div class="modcontent-footer flower cat">
                    <a href="#">STUDIO KOUKAKI</a>
                </div>
            </div>
        </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
