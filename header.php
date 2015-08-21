<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Learning Omnivores
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'learning-omnivores' ); ?></a>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'learning-omnivores' ); ?></button>
			<a href="<?php echo home_url(); ?>"><li id="menu-item-7" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-7"></li></a>
			<div class="mobile-toggle"><svg height="70px" version="1.1" viewBox="0 0 22 11" width="70px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><defs><path d="M0.577138391,0 C0.258393659,0 0,0.221932411 0,0.5 C0,0.776142375 0.262396485,1 0.577138391,1 L21.4228616,1 C21.7416064,1 22,0.77806759 22,0.5 C22,0.223857625 21.7376035,0 21.4228616,0 L0.577138391,0 L0.577138391,0 Z M0.577138391,5 C0.258393659,5 0,5.2219324 0,5.5 C0,5.77614235 0.262396485,6 0.577138391,6 L21.4228616,6 C21.7416064,6 22,5.7780676 22,5.5 C22,5.22385765 21.7376035,5 21.4228616,5 L0.577138391,5 L0.577138391,5 Z M0.577138391,10 C0.258393659,10 0,10.2219324 0,10.5 C0,10.7761424 0.262396485,11 0.577138391,11 L21.4228616,11 C21.7416064,11 22,10.7780676 22,10.5 C22,10.2238576 21.7376035,10 21.4228616,10 L0.577138391,10 L0.577138391,10 Z" id="path-1"/></defs><g fill="none" fill-rule="evenodd" id="miu" stroke="none" stroke-width="1"><g id="editor_list_view_hambuger_menu_outline_stroke"><use fill="#000000" fill-rule="evenodd" xlink:href="#path-1"/><use fill="white" xlink:href="#path-1"/></g></g></svg></div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			<div class="mobile-menu hide"><?php wp_nav_menu( array( 'theme_location' => 'mobile-menu', 'menu_class' => 'nav-menu-mobile' ) ); ?></div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
