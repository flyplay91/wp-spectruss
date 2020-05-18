<?php
/**
 * Template Name: Home Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main class="home-page">
	<div class="hero">
		<div class="hero-triangle"></div>
		<div class="hero-title">
			<b>data</b><br>injected<br><b>creativity</b><br>delivering<br>winning<br><b>results</b>
		</div>
		<div class="hero-dot"></div>
		<div class="hero-line"></div>
		<div class="hero-video">
			<iframe src="https://fast.wistia.net/embed/iframe/vaqg8fos83?videoFoam=true" title="Carter Testimonial Video" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen mozallowfullscreen webkitallowfullscreen oallowfullscreen msallowfullscreen width="100%" height="100%"></iframe>
		</div>
		<div class="hero-sticker">
			<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/spectruss-icon.png">
			<span class="first-text">award</span><span class="second-text"><b>WINNING</b></span><span class="third-text">AGENCY</span>
		</div>
	</div>

	<div class="casestudies">
		<div class="casestudy vert casestudy--liberty animatable moveUp first-case-study">
			<div class="casestudy-content">
				<h2 class="title-casestudy">Liberty Safe</h2>
				<p class="desc-casestudy">Viral success across<br>multiple platforms</p>
				<a href="" class="btn-casestudy">view case study</a>
			</div>
		</div>

		<div class="casestudy casestudy--royal animatable moveUp">
			<div class="casestudy-content">
				<h2 class="title-casestudy">Royal Highnies</h2>
				<p class="desc-casestudy">25% increase<br>in online sales</p>
				<a href="" class="btn-casestudy">view case study</a>
			</div>
		</div>

		<div class="casestudy vert casestudy--hunter-museum animatable moveUp">
			<div class="casestudy-content">
				<h2 class="title-casestudy">Hunter Museum<br>Of American Art</h2>
				<p class="desc-casestudy">Digital experience<br>for American art</p>
				<a href="" class="btn-casestudy">view case study</a>
			</div>
		</div>

		<div class="casestudy casestudy--brewski animatable moveUp">
			<div class="casestudy-content">
				<h2 class="title-casestudy">Brewski</h2>
				<p class="desc-casestudy">Brand positioning<br>for a crowed marketplace</p>
				<a href="" class="btn-casestudy">view case study</a>
			</div>
		</div>

		<div class="casestudy vert casestudy--transcard animatable moveUp">
			<div class="casestudy-content">
				<h2 class="title-casestudy">Transcard</h2>
				<p class="desc-casestudy">CRM meets<br>Digital Experience</p>
				<a href="" class="btn-casestudy">view case study</a>
			</div>
		</div>

		<div class="casestudy vert casestudy--lookout animatable moveUp">
			<div class="casestudy-content">
				<h2 class="title-casestudy">Lookout Wild<br>Film Festival</h2>
				<p class="desc-casestudy">Uniting art, adventure<br>and community</p>
				<a href="" class="btn-casestudy">view case study</a>
			</div>
		</div>

		<div class="casestudy vert casestudy--about animatable moveUp">
			<div class="casestudy-content">
				<h2 class="title-casestudy">About Us</h2>
				<p class="desc-casestudy">View all of our<br>full-service offerings</p>
				<a href="" class="btn-casestudy">learn about spectruss</a>
			</div>
		</div>
	</div>

	<div class="news">
		<h2>what's<br><b>good?</b></h2>
		<div class="news-block">
			<div class="news-dot">
				<div class="news-dot-item first--news">
					<div class="dot-item">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_dots.png">
					</div>
					<div class="news-item">
						<a href="">
							<img class="news-item-img" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_1.jpg">
							<div class="news-item-date">6.18.19</div>
							<div class="news-item-title">Tips to Strengthen<br>Your Brand’s Social<br>Media Presence</div>
							<div class="news-item-arrow">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right_arrow.png">
							</div>
						</a>
					</div>
				</div>

				<div class="news-dot-item second--news">
					<div class="dot-item">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_dots.png">
					</div>
					<div class="news-item">
						<a href="">
							<img class="news-item-img" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_2.jpg">
							<div class="news-item-date">6.05.19</div>
							<div class="news-item-title">Spectruss Launches<br>CBD Product Line,<br>Kyte Life</div>
							<div class="news-item-arrow">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right_arrow.png">
							</div>
						</a>
					</div>
				</div>

				<div class="news-dot-item third--news">
					<div class="dot-item">
						<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_dots.png">
					</div>
					<div class="news-item">
						<a href="">
							<img class="news-item-img" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_3.jpg">
							<div class="news-item-date">5.31.19</div>
							<div class="news-item-title">The Spectruss Creative<br>Team Welcomes<br>New Design Intern</div>
							<div class="news-item-arrow">
								<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right_arrow.png">
							</div>
						</a>
					</div>
				</div>

				<div class="halfframe-all-news">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/halfframe.png">
					<a href="">All<br>News</a>
				</div>
			</div>

			<div class="dot-img">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_dots.png">
			</div>
		</div>
	</div>

	<div class="home-page-form">
		<h2>let's get to<b>work!</b></h2>
		<div class="home-form-dots">
			<div class="home-form">
				<?php echo do_shortcode( '[contact-form-7 id="212858" title="Contact Form"]' ); ?>
			</div>
			<div class="home-dots">
				<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_dots.png">
			</div>
		</div>
		
    </div>
</main>

<?php get_footer(); ?>
