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

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-NCFFXQT');</script>
		<!-- End Google Tag Manager -->
	</head>

	<body <?php body_class(); ?>>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NCFFXQT"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
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
