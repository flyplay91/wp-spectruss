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
	<?php if( have_rows('hero_group') ): ?>
		<?php while( have_rows('hero_group') ): the_row(); 
			$dot_image = get_sub_field('hero_dot_image');
			$line_image = get_sub_field('hero_line_image');
			$sticker_logo = get_sub_field('hero_sticker_logo');
		?>
		<div class="hero">
			<div class="hero-triangle"></div>
			<div class="hero-title">
				<?php echo get_sub_field('hero_title'); ?>
			</div>
			<div class="hero-dot"></div>
			<div class="hero-line"></div>
			<div class="hero-video">
				<?php echo get_sub_field('hero_video'); ?>
			</div>
			<div class="hero-sticker">
				<img src="<?php echo esc_url( $sticker_logo['url'] ); ?>">
				<span class="first-text"><?php echo get_sub_field('hero_sticker_text_1'); ?></span><span class="second-text"><b><?php echo get_sub_field('hero_sticker_text_2'); ?></b></span><span class="third-text"><?php echo get_sub_field('hero_sticker_text_3'); ?></span>
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
	
	<?php if ( have_rows( 'case_studies_group' ) ) : 
		while ( have_rows( 'case_studies_group' ) ) : the_row(); ?>
		<div class="casestudies">
			<?php if ( have_rows( 'case_study' ) ) : 
				while ( have_rows( 'case_study' ) ) : the_row();
				$case_study_link = get_sub_field('case_study_button_link'); ?>

				<div class="casestudy <?php if (get_sub_field('check_white_color') == true): ?>vert<?php endif;?> casestudy--liberty animatable moveUp <?php if (get_row_index() == 1): ?> first-case-study<?php endif; ?>">
					<img src="<?php echo get_sub_field('case_study_background_image')['url']; ?>" />
					<div class="casestudy-content">
						<h2 class="title-casestudy"><?php echo get_sub_field('case_study_title'); ?></h2>
						<div class="desc-casestudy"><?php echo get_sub_field('case_study_description'); ?></div>
						<a href="<?php echo esc_url($case_study_link); ?>" class="btn-casestudy"><?php echo get_sub_field('case_study_button_text'); ?></a>
					</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
		
	<?php if ( have_rows( 'news_group' ) ) : 
		while ( have_rows( 'news_group' ) ) : the_row(); 
		$half_frame_image = get_sub_field('news_half_frame');
		$news_button_link = get_sub_field('news_all_news_button_link'); ?>				
		<div class="news">
			<h2><?php echo get_sub_field('news_title'); ?></h2>
			<div class="news-block">
				<div class="news-dot">
				<?php
					$postObj = get_posts( array(
						'numberposts'	=> 3,
						'post_type'      => 'post',
						'post_status'    => 'publish',
						'sort_order' => 'date'
					) );

					if ( $postObj ) {
						foreach ( $postObj as $post ) {
							setup_postdata( $post );
							?>
							<div class="news-dot-item">
								<div class="dot-item">
									<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_dots.png">
								</div>
								<div class="news-item">
									<a href="<?php the_permalink(); ?>">
										<div class="news-item-img">
											<?php echo get_the_post_thumbnail(); ?>
										</div>
										<div class="news-item-date"><?php echo get_the_date('n.j.Y'); ?></div>
										<div class="news-item-title"><?php the_title(); ?></div>
										<div class="news-item-arrow">
											<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right_arrow.png">
										</div>
									</a>
								</div>
							</div>
						<?php
						}
						wp_reset_postdata();
					}
				?>	
					
					<div class="halfframe-all-news">
						<img src="<?php echo esc_url( $half_frame_image['url'] ); ?>">
						<a href="<?php echo esc_url($news_button_link); ?>"><?php echo get_sub_field('news_all_news_button_text'); ?></a>
					</div>
				</div>

				<div class="dot-img">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_dots.png">
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>

	<?php if( have_rows('contact_form') ): ?>
		<?php while( have_rows('contact_form') ): the_row(); 
		$contact_dot_image = get_sub_field('contact_form_dots'); ?>
		<div class="home-page-form">
			<h2><?php echo get_sub_field('contact_form_title'); ?></h2>
			<div class="home-form-dots">
				<div class="home-form">
					<?php echo do_shortcode( get_sub_field('contact_form_short_code') ); ?>
				</div>
				<div class="home-dots">
					<img src="<?php echo esc_url( $contact_dot_image['url'] ); ?>">
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	<?php endif; ?>
	
	<style>
		.home-page .hero-dot {
			background-image: url(<?php echo esc_url( $dot_image['url'] ); ?>);
		}
		.home-page .hero-line {
			background-image: url(<?php echo esc_url( $line_image['url'] ); ?>);
		}
	</style>
</main>

<?php get_footer(); ?>
