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
    <?php if( have_rows('contact_group') ): ?>
        <?php while( have_rows('contact_group') ): the_row();
        $right_half_image = get_sub_field('right_half_image');
        $hero_dot_image = get_sub_field('hero_dot_image');
        $hero_image = get_sub_field('hero_image');
        $left_half_image = get_sub_field('left_half_image');
        $footer_dot_image = get_sub_field('form_dot_image'); ?>
            <div class="contact-page-hero">
                <div class="contact-hero-left">
                    <img class="right-halfframe" src="<?php echo esc_url( $right_half_image['url'] ); ?>">
                    <h2><?php echo get_sub_field('hero_title'); ?></h2>
                    <img class="left-halfframe" src="<?php echo esc_url( $left_half_image['url'] ); ?>">
                    <img class="hero-dots" src="<?php echo esc_url( $hero_dot_image['url'] ); ?>">
                </div>
                <div class="contact-hero-right">
                    <img src="<?php echo esc_url( $hero_image['url'] ); ?>">
                </div>
            </div>
            <div class="contact-page-form">
                <div class="contact-form">
                    <?php echo do_shortcode( get_sub_field('form_shortcode') ); ?>
                </div>
                <div class="contact-form-dots">
                    <img src="<?php echo esc_url( $footer_dot_image['url'] ); ?>">
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>