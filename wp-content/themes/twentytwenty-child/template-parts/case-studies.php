<?php
/**
 * Template Name: Case Studies Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main class="case-studies-page">
    <div class="case-studies-hero">
        <div class="case-studies-hero-triangle"></div>
        <h2>our<br><b>work</b></h2>
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_dots.png">
    </div>

    <div class="case-studies-items">
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/liberty_safe.jpg">
                <label>liberty safe</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/royal_highnies.jpg">
                <label>royal highnies</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hunter_museum.jpg">
                <label>hunter museum<br>of american art</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/brewski.jpg">
                <label>brewski</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/transcard.jpg">
                <label>transcard</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/lookout.jpg">
                <label>lookout wild film festival</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/refine.jpg">
                <label>refine aesthetic studio</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/grace.jpg">
                <label>grace financial services</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/hutton_smith.jpg">
                <label>hutton & smith<br>brewing co.</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/faps.jpg">
                <label>the furniture shoppe and<br>the patio shop</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chattannooga.jpg">
                <label>chattanooga<br>whiskey</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/weddingsuits.jpg">
                <label>weddingsuits.com</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/patrik.jpg">
                <label>patrick, beard,<br>schulman & jacoway</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/medx.jpg">
                <label>medx services</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/kyte.jpg">
                <label>kyte</label>
            </a>
        </div>
        <div class="case-study-item">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/quality.jpg">
                <label>quality tire</label>
            </a>
        </div>

    
    </div>

    
		<div class="case-studies-page-form">
			<h2>let's get to <b>work</h2>
			<div class="case-studies-form-dots">
				<div class="case-studies-form">
					<?php echo do_shortcode('[contact-form-7 id="212858" title="Contact Form"]'); ?>
				</div>
				<div class="case-studies-dots">
					<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_dots.png">
				</div>
			</div>
		</div>
</main>

<?php get_footer(); ?>