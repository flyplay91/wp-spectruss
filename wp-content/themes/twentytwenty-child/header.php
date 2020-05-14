<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>

		<header id="site-header" class="header-footer-group" role="banner">
			<div class="header-logo">
				<?php twentytwenty_site_logo(); ?>
			</div>
			<div class="header-nav">
				<?php get_template_part( 'template-parts/modal-menu' ); ?>
			</div>
		</header>
