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

        <?php if (get_sub_field('solution_under_video')): ?>
            <div class="solution-under-video">
                <?php echo get_sub_field('solution_under_video'); ?>
            </div>
        <?php endif; ?>

        <div class="case-study-items <?php echo get_sub_field('single_case_study_tag') ?>">
            <?php if (get_sub_field('single_case_study_tag') == 'medx'): ?>
                <?php if ( have_rows( 'case_studies_repeater' ) ) : 
                    while ( have_rows( 'case_studies_repeater' ) ) : the_row();
                    $case_study_image = get_sub_field('case_study_item_image');
                    $case_study_image_mobi = get_sub_field('case_study_item_mobile_image');
                    $case_study_video = get_sub_field('case_study_item_mobile_image'); ?>
                        <div class="case-study-item case-study-item-<?php echo get_row_index(); ?>">
                            <?php if (get_row_index() == 2): ?>
                                <img src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                                <div class="case-study-item-medx">
                                    <div class="case-study-item-medx-inner">
                                        <span>Medx Commercial 1</span>
                                        <label>Forgetting Something "Cellphone"</label>
                                        <div class="case-study-item-medx-inner-video">
                                            <script src="https://fast.wistia.com/embed/medias/lm87w57fot.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
                                            <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                                                <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                                    <div class="wistia_embed wistia_async_lm87w57fot videoFoam=true" style="height:100%;position:relative;width:100%">
                                                        <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                                                            <img src="https://fast.wistia.com/embed/medias/lm87w57fot/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="case-study-item-medx-inner">
                                        <span>Medx Commercial 2:</span>
                                        <label>Forgetting Something "Glasses"</label>
                                        <div class="case-study-item-medx-inner-video">
                                            <script src="https://fast.wistia.com/embed/medias/mp5ugqm4i0.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
                                            <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                                                <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                                    <div class="wistia_embed wistia_async_mp5ugqm4i0 videoFoam=true" style="height:100%;position:relative;width:100%">
                                                        <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                                                            <img src="https://fast.wistia.com/embed/medias/mp5ugqm4i0/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="case-study-item-medx-inner">
                                        <span>Medx Commercial 3:</span>
                                        <label>Forgetting Something "Puppies!"</label>
                                        <div class="case-study-item-medx-inner-video">
                                            <script src="https://fast.wistia.com/embed/medias/l80yk8jgoa.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
                                            <div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;">
                                                <div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;">
                                                    <div class="wistia_embed wistia_async_l80yk8jgoa videoFoam=true" style="height:100%;position:relative;width:100%">
                                                        <div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;">
                                                            <img src="https://fast.wistia.com/embed/medias/l80yk8jgoa/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php else: ?>
                                <img src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                                <?php if (get_sub_field('case_study_item_video')): ?>
                                    <div class="case-study-block-video">
                                        <?php echo get_sub_field('case_study_item_video'); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php else: ?>
                <?php if ( have_rows( 'case_studies_repeater' ) ) : 
                    while ( have_rows( 'case_studies_repeater' ) ) : the_row();
                    $case_study_image = get_sub_field('case_study_item_image');
                    $case_study_image_mobi = get_sub_field('case_study_item_mobile_image');
                    $case_study_video = get_sub_field('case_study_item_mobile_image'); ?>
                        <div class="case-study-item case-study-item-<?php echo get_row_index(); ?>">
                            <img src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                            <?php if (get_sub_field('case_study_item_video')): ?>
                                <div class="case-study-block-video">
                                    <?php echo get_sub_field('case_study_item_video'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
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