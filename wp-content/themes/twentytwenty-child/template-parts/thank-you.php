<?php
/**
 * Template Name: Thank You Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main class="thank-you-page">
    <div class="thank-you-page__inner">
        <img class="thank-you__inner-left-dot" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/thank_you_left_dot.png">
        <h3>Thank you!</h3>
        <p>Thank you for reaching out! Someone from the Spectruss team<br>
        will be in touch within the next 24 hours.<br><br>
        If you'd like to reach out before then, feel free to give us a<br>
        shout at <b>423-800-8633.</b><br><br>
        Cheers!</p>
        <img class="thank-you__inner-right-dot" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/thank_you_right_dot.png">
        <a href="/">Close</a>
    </div>

    <style>
        .thank-you-page {
            background-image: url('<?php echo get_stylesheet_directory_uri() ?>/assets/images/thank_you_bg_new.jpg');
        }
    </style>
</main>

<?php get_footer(); ?>