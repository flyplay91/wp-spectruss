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
				<label class="hamburger-nav">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hamburger_nav.png">
				</label>

				<div class="header-hamburger-menu">
					<div class="hamburger-top">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/header_x.png">
					</div>
					<ul class="hamburger-middle">
						<?php
						if ( has_nav_menu( 'expanded' ) ) {
							wp_nav_menu(
								array(
									'container'      => '',
									'items_wrap'     => '%3$s',
									'show_toggles'   => true,
									'theme_location' => 'expanded',
								)
							);
						}
						?>
					</ul>
					<div class="hamburger-bottom">
						<div class="hamburger-call">
							<label>Call<br>Us Today:</label>
							<a target="_blank" href="tel:4238008633">423.800.8633</a>
						</div>
						<ul>
							<li>
								<a target="_blank" href="https://www.linkedin.com/company/spectruss/">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/header-linkedin.png" alt="LinkedIn">
								</a>
							</li>
							<li>
								<a target="_blank" href="https://www.youtube.com/channel/UCUDuoHhVlU9yi1DmdGH9PNQ">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/header-youtube.png" alt="YouTube">
								</a>
							</li>
							<li>
								<a target="_blank" href="https://www.instagram.com/spectrussllc/">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/header-instagram.png" alt="Instagram">
								</a>
							</li>
							<li>
								<a target="_blank" href="https://www.facebook.com/SPECTRUSS/">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/header-facebook.png" alt="Facebook">
								</a>
							</li>
							<li>
								<a target="_blank" href="https://twitter.com/spectrussllc">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/header-twitter.png" alt="">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
