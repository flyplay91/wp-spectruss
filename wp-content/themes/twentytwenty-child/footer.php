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
					<?php $footer_logo = get_field('footer_logo', 'option'); ?>
					<img src="<?php echo esc_url(( $footer_logo )['url']); ?>">
					<p><a target="_blank" href="<?php echo get_field('footer_address_link', 'option'); ?>"><?php echo get_field('footer_address', 'option'); ?></a></p>
					<p><a target="_blank" href="tel:<?php echo get_field('footer_number_link', 'option'); ?>"><?php echo get_field('footer_number', 'option'); ?></a></p>
					<p><a target="_blank" href="mailto:<?php echo get_field('footer_mail', 'option'); ?>"><?php echo get_field('footer_mail', 'option'); ?></a></p>
					<ul>
						<?php if ( have_rows( 'footer_social', 'option' ) ) : 
							while ( have_rows( 'footer_social', 'option' ) ) : the_row(); 
							$footer_social_img = get_sub_field('social_icon', 'option'); ?>
							<li>
								<a target="_blank" href="<?php echo get_sub_field('social_link', 'option'); ?>">
									<img src="<?php echo esc_url(( $footer_social_img )['url']); ?>">
								</a>
							</li>
							<?php endwhile; ?>
						<?php endif; ?>
					</ul>
				</div>
				<ul class="main-nav">
					<?php if ( have_rows( 'footer_menu_repeater', 'option' ) ) : 
						while ( have_rows( 'footer_menu_repeater', 'option' ) ) : the_row(); 
						$footer_nav_link = get_sub_field('footer_menu_link', 'option'); ?>
						<li><a href="<?php echo esc_url($footer_nav_link); ?>"><?php echo get_sub_field('footer_menu_text', 'option'); ?></a></li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
			</div>
			<div class="vertical-line"></div>
			<div class="logos-block">
				<div class="subscribe-logos">
					<div class="mailchimp-form">
						<p class="mailchimp-label"><?php echo get_field('footer_form_title', 'option'); ?></p>
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
						<?php if ( have_rows( 'footer_logo_repeater', 'option' ) ) : 
							while ( have_rows( 'footer_logo_repeater', 'option' ) ) : the_row(); 
							$footer_brand = get_sub_field('footer_logo_image', 'option'); ?>
							<img src="<?php echo esc_url(( $footer_brand )['url']); ?>">
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="dots">
					<?php $footer_dot = get_field('footer_dot_image', 'option'); ?>
					<img src="<?php echo esc_url(( $footer_dot )['url']); ?>">
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
