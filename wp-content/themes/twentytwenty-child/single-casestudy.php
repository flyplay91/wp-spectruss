<?php
/**
 * Template Name: Single Case Study Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();
?>

<?php if( have_rows('case_studies_group') ): ?>
    <?php while( have_rows('case_studies_group') ): the_row(); 
        $hero_image = get_sub_field('hero_image');
        $hero_sticker_image = get_sub_field('hero_sticker_image');
        $solution_image = get_sub_field('solution_image');
    ?>

    <main class="single-case-study">
        <div class="case-study-hero">
            <img class="hero-main-img" src="<?php echo esc_url( $hero_image['url'] ); ?>">
            <div class="hero-triangle" style="background-color: <?php echo get_sub_field('hero_triangle_background_color'); ?>"></div>
            <div class="hero-title">
                <?php echo get_sub_field('hero_title'); ?>
            </div>
            <?php if (get_sub_field('hero_video_link')): ?>
            <div class="hero-video">
                <?php echo get_sub_field('hero_video_link'); ?>
            </div>
            <?php endif; ?>
            <img class="hero-sticker" src="<?php echo esc_url( $hero_sticker_image['url'] ); ?>">
        </div>

        <div class="case-study-challenga">
            <h3><?php echo get_sub_field('challenge_title'); ?></h3>
            <a href="<?php echo get_sub_field('challenge_link'); ?>" style="background-color: <?php echo get_sub_field('hero_triangle_background_color'); ?>">The challenga</a>
            <p><?php echo get_sub_field('challenge_content'); ?></p>
        </div>

        <div class="case-study-solution" style="background-color: <?php echo get_sub_field('solution_background_color'); ?>">
            <img src="<?php echo esc_url( $solution_image['url'] ); ?>">
            <div class="solution-content">
                <h3><?php echo get_sub_field('solution_title'); ?></h3>
                <div class="solution-content__inner">
                    <div class="solution-content-text"><?php echo get_sub_field('solution_left_text'); ?></div>
                    <div class="solution-content-text"><?php echo get_sub_field('solution_right_text'); ?></div>
                </div>
            </div>
        </div>

        <?php if (get_sub_field('case_study_video_1')): ?>
            <div class="case-study-video-1">
                <?php echo get_sub_field('case_study_video_1'); ?>
            </div>
        <?php endif; ?>

        <div class="case-study-items">
            <?php if ( have_rows( 'case_studies_repeater' ) ) : 
                while ( have_rows( 'case_studies_repeater' ) ) : the_row();
                $case_study_image = get_sub_field('case_study_item_image');
                $case_study_image_mobi = get_sub_field('case_study_item_mobile_image'); ?>
                    <div class="case-study-item case-study-item-<?php echo get_row_index(); ?>">
                        <img src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        
        <div class="single-case-study-page-form">
            <h2><?php echo get_sub_field('case_study_contact_form_title') ?></h2>
            <div class="single-case-study-form-dots">
                <div class="single-case-study-form">
                    <?php echo do_shortcode( get_sub_field('case_study_contact_form_shortcode') ); ?>
                </div>
                <div class="single-case-study-dots">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_dots.png">
                </div>
            </div>
        </div>
            
        
    </main>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>