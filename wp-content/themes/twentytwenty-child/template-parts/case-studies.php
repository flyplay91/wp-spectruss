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
    <?php if( have_rows('our_work_group') ): ?>
        <?php while( have_rows('our_work_group') ): the_row();
        $hero_dot_image = get_sub_field('hero_dot_image');
        $contact_dot_image = get_sub_field('contact_form_dot_image'); ?>
            <div class="case-studies-hero">
                <div class="case-studies-hero-triangle"></div>
                <h2><?php echo get_sub_field('hero_title'); ?></h2>
                <img src="<?php echo esc_url( $hero_dot_image['url'] ); ?>">
            </div>

            <div class="case-studies-items">
                <?php if ( have_rows( 'case_studies_repeater' ) ) : 
                    while ( have_rows( 'case_studies_repeater' ) ) : the_row();
                    $case_study_image = get_sub_field('case_study_image'); ?>
                    <div class="case-study-item">
                        <a href="<?php echo get_sub_field('case_study_link'); ?>">
                            <img src="<?php echo esc_url( $case_study_image['url'] ); ?>">
                            <label><?php echo get_sub_field('case_study_title'); ?></label>
                        </a>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            
            <div class="case-studies-page-form">
                <h2><?php echo get_sub_field('contact_form_title'); ?></h2>
                <div class="case-studies-form-dots">
                    <div class="case-studies-form">
                        <?php echo do_shortcode( get_sub_field('contact_form_shortcode') ); ?>
                    </div>
                    <div class="case-studies-dots">
                        <img src="<?php echo esc_url( $contact_dot_image['url'] ); ?>">
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
	<?php endif; ?>
</main>

<?php get_footer(); ?>