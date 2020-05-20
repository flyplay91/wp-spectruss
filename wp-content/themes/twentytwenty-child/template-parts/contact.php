<?php
/**
 * Template Name: Contact Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main class="contact-page">
    <div class="contact-page-hero">
        <div class="contact-hero-left">
            <img class="right-halfframe" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right_halfframe_white.png">
            <h2>let's<br><b>talk</b></h2>
            <img class="left-halfframe" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/left_halfframe_white.png">
            <img class="hero-dots" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_dots.png">
        </div>
        <div class="contact-hero-right">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/contact_hero_bg.png">
        </div>
    </div>
    <div class="contact-page-form">
        <div class="contact-form">
            <?php echo do_shortcode( '[contact-form-7 id="212858" title="Contact Form"]' ); ?>
        </div>
        <div class="contact-form-dots">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_dots.png">
        </div>
    </div>
</main>

<?php get_footer(); ?>