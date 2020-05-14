<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?>
		<footer id="site-footer" role="contentinfo" class="header-footer-group">
			<div class="nav-block">
				<div class="address-block">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_logo.png">
					<p><a target="_blank" href="https://goo.gl/maps/xwKSUG1UKB2kabmq9">3800 St. Elmo Avenue<br>Suite 221<br>Chattanooga, Tennessee</a></p>
					<p><a target="_blank" href="tel:4238008633">423.800.8633</a></p>
					<p><a target="_blank" href="mailto:info@spectruss.com">info@spectruss.com</a></p>
					<ul>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
						<li><a href=""></a></li>
					</ul>
				</div>
				<ul class="main-nav">
					<li><a href="">home</a></li>
					<li><a href="">case studies</a></li>
					<li><a href="">news</a></li>
					<li><a href="">now hiring</a></li>
					<li><a href="">contact</a></li>
				</ul>
				<ul class="sub-nav">
					<li><a href="">e-commerce</a></li>
					<li><a href="">web design</a></li>
					<li><a href="">digital marketing</a></li>
					<li><a href="">branding</a></li>
					<li><a href="">photo/video</a></li>
					<li><a href="">vCMO</a></li>
					<li><a href="">SPECTRUSS MD</a></li>
				</ul>
			</div>
			<div class="vertical-line"></div>
			<div class="logos-block">
				<div class="subscribe-logos">
					<div class="mailchimp-form">
						<p class="mailchimp-label">Stay connected with us and recieve the<br>latest news and marketing tips from our team.</p>
						<div id="mc_embed_signup">
							<form action="https://spectruss.us7.list-manage.com/subscribe/post?u=c7bcb999719f01d8d64f79729&amp;id=4755d1cc1c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" noValidate>
								<div id="mc_embed_signup_scroll">
									<input type="email" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email" required />
									<div aria-hidden="true">
										<input style="display: none;"  type="text" name="b_c7bcb999719f01d8d64f79729_4755d1cc1c" tabIndex={-1} value="" readOnly />
									</div>
									<div class="clear">
										<label class="learn-more" htmlFor="mc-embedded-subscribe">
											<input style="display: none;" ref={newsletterSubmit} type="submit" value="Sign Up" name="subscribe" id="mc-embedded-subscribe" class="button" />
										</label>
									</div>
									<div class="fake-submit">
										<p>Submit</p>
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="logo-items">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_google.jpg">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_upcity.jpg">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_google_2.png">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_hubspot.png">
					</div>
				</div>
				<div class="dots">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_dots.png">
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
