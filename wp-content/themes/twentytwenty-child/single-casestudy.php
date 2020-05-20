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
        $hero_image = get_sub_field('case_study_hero_image');
    ?>

    <main class="single-case-study">
        <div class="case-study-hero">
            <img src="<?php echo esc_url( $hero_image['url'] ); ?>">
            <div class="hero-video">
                <?php echo get_sub_field('case_study_hero_video_link'); ?>
                <?php if (get_sub_field('case_study_hero_video_link') != ''): ?>
                    <h2><?php echo get_sub_field('case_study_title'); ?></h2>
                    <h3>Case Study</h3>
                <?php endif; ?>
            </div>
        </div>
        <div class="case-study-items">
            <?php if ( have_rows( 'case_studies_repeater' ) ) : 
                while ( have_rows( 'case_studies_repeater' ) ) : the_row();
                $case_study_image = get_sub_field('case_study_item_image');
                $case_study_image_mobi = get_sub_field('case_study_item_mobile_image'); ?>
                    <div class="case-study-item case-study-item-<?php echo get_row_index(); ?>">
                        <div class="styled-text-content <?php if (get_sub_field('case_study_item_white_color_or_black') == true): ?>white-color<?php endif; ?> <?php if (get_sub_field('case_study_item_vertical_content_or_horiontal') == true): ?>vert<?php endif; ?>">
                            <div class="left">
                                <p class="num">0<?php echo get_row_index(); ?>.</p>
                                <div class="heading">
                                    <div class="line"></div>
                                    <h2><?php echo get_sub_field('case_study_item_title'); ?></h2>
                                </div>
                            </div>
                            <div class="right">
                                <p><?php echo get_sub_field('case_study_item_content'); ?></p>
                            </div>
                        </div>
                    </div>
                    <style>
                        .single-case-study .case-study-item-<?php echo get_row_index(); ?> {
                            background-image: url(<?php echo esc_url( $case_study_image['url'] ); ?>);
                        }
                    </style>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        
    </main>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>