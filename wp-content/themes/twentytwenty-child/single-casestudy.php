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
            <div class="hero-title desktop-view">
                <?php echo get_sub_field('hero_title'); ?>
            </div>
            <div class="hero-title mobile-view">
                <?php echo get_sub_field('hero_title_mobile'); ?>
            </div>
            <?php if ((get_sub_field('single_case_study_tag') == 'medx-services') || (get_sub_field('single_case_study_tag') == 'quality-tire') || (get_sub_field('single_case_study_tag') == 'chattanooga-whiskey')): ?>
                <div class="hero-full-video desktop-view">
                    <?php echo get_sub_field('solution_under_video'); ?>
                </div>
                <!-- <div class="hero-full-video mobile-view">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/chattanooga_landing_mobile.jpg">
                </div> -->
                <img class="hero-main-img mobile-view" src="<?php echo esc_url( $hero_image['url'] ); ?>">
            <?php elseif  ((get_sub_field('single_case_study_tag') == 'transcard') || (get_sub_field('single_case_study_tag') == 'hunter-museum') || (get_sub_field('single_case_study_tag') == 'the-furniture-shoppe-and-the-patio-shop') || (get_sub_field('single_case_study_tag') == 'royal-highnies')): ?>
                <div class="hero-full-video">
                    <?php echo get_sub_field('solution_under_video'); ?>
                </div>
            <?php else: ?>
                <img class="hero-main-img" src="<?php echo esc_url( $hero_image['url'] ); ?>">
            <?php endif; ?>
            <style>
                @media(max-width: 768px) {
                    .single-case-study .hero-title {
                        background-color: <?php echo get_sub_field('solution_background_color'); ?>
                    }
                }
            </style>
            <div class="hero-triangle desktop-view" style="background-color: <?php echo get_sub_field('hero_triangle_background_color'); ?>"></div>
            
            <?php if (get_sub_field('hero_video_link')): ?>
            <div class="hero-video">
                <?php echo get_sub_field('hero_video_link'); ?>
            </div>
            <?php endif; ?>
            <img class="hero-sticker" src="<?php echo esc_url( $hero_sticker_image['url'] ); ?>">
        </div>

        <div class="case-study-challenga">
            <h3><?php echo get_sub_field('challenge_title'); ?></h3>
            <a href="<?php echo get_sub_field('challenge_link'); ?>" style="background-color: <?php echo get_sub_field('hero_triangle_background_color'); ?>">The challenge</a>
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

        <?php if (get_sub_field('single_case_study_tag') == 'chattanooga-whiskey'): ?>
            <div class="mobile-view">
                <?php echo get_sub_field('solution_under_video'); ?>
            </div>
        <?php endif; ?>
        
        <?php if ((get_sub_field('solution_under_video')) && ((get_sub_field('single_case_study_tag') != 'transcard') && (get_sub_field('single_case_study_tag') != 'hunter-museum') && (get_sub_field('single_case_study_tag') != 'the-furniture-shoppe-and-the-patio-shop') && (get_sub_field('single_case_study_tag') != 'medx-services') && (get_sub_field('single_case_study_tag') != 'quality-tire') && (get_sub_field('single_case_study_tag') != 'chattanooga-whiskey') && (get_sub_field('single_case_study_tag') != 'royal-highnies'))): ?>
            <div class="solution-under-video">
                <?php echo get_sub_field('solution_under_video'); ?>
            </div>
        <?php endif; ?>

        <div class="case-study-items <?php echo get_sub_field('single_case_study_tag') ?>">
            <?php if (get_sub_field('single_case_study_tag') == 'medx-services'): ?>
                <?php if ( have_rows( 'case_studies_repeater' ) ) : 
                    while ( have_rows( 'case_studies_repeater' ) ) : the_row();
                    $case_study_image = get_sub_field('case_study_item_image');
                    $case_study_image_mobi = get_sub_field('case_study_item_mobile_image');
                    $case_study_video = get_sub_field('case_study_item_mobile_image'); ?>
                        <div class="case-study-item case-study-item-<?php echo get_row_index(); ?>">
                            <?php if (get_row_index() == 2): ?>
                                <img class="desktop-view" src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                                <img class="mobile-view" src="<?php echo esc_url( $case_study_image_mobi['url'] ) ?>">
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
                                <img class="desktop-view" src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                                <img class="mobile-view" src="<?php echo esc_url( $case_study_image_mobi['url'] ) ?>">
                                <?php if (get_sub_field('case_study_item_video')): ?>
                                    <div class="case-study-block-video">
                                        <?php echo get_sub_field('case_study_item_video'); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php elseif (get_sub_field('single_case_study_tag') == 'grace-financial-services') :?>
                <?php if ( have_rows( 'case_studies_repeater' ) ) : 
                    while ( have_rows( 'case_studies_repeater' ) ) : the_row();
                    $case_study_image = get_sub_field('case_study_item_image');
                    $case_study_image_mobi = get_sub_field('case_study_item_mobile_image');
                    $case_study_video = get_sub_field('case_study_item_mobile_image'); ?>
                        <div class="case-study-item case-study-item-<?php echo get_row_index(); ?>">
                            <?php if (get_row_index() == 2): ?>
                                <div class="case-study-item-grace-financial-services-video">
                                    <script src="https://fast.wistia.com/embed/medias/d1t50kqi1c.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_d1t50kqi1c videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
                                </div>
                            <?php else: ?>
                                <img class="desktop-view" src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                                <img class="mobile-view" src="<?php echo esc_url( $case_study_image_mobi['url'] ) ?>">
                                <?php if (get_sub_field('case_study_item_video')): ?>
                                    <div class="case-study-block-video">
                                        <?php echo get_sub_field('case_study_item_video'); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            
            <?php elseif (get_sub_field('single_case_study_tag') == 'hutton-smith') :?>
                <?php if ( have_rows( 'case_studies_repeater' ) ) : 
                    while ( have_rows( 'case_studies_repeater' ) ) : the_row();
                    $case_study_image = get_sub_field('case_study_item_image');
                    $case_study_image_mobi = get_sub_field('case_study_item_mobile_image');
                    $case_study_video = get_sub_field('case_study_item_mobile_image'); ?>
                        <div class="case-study-item case-study-item-<?php echo get_row_index(); ?>">
                            <?php if (get_row_index() == 2): ?>
                                <div class="case-study-item-hutton-smith">
                                    <script src="https://fast.wistia.com/embed/medias/a6u6xguehm.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_a6u6xguehm videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
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
            <?php elseif (get_sub_field('single_case_study_tag') == 'pbsjlaw') :?>
                <?php if ( have_rows( 'case_studies_repeater' ) ) : 
                    while ( have_rows( 'case_studies_repeater' ) ) : the_row();
                    $case_study_image = get_sub_field('case_study_item_image');
                    $case_study_image_mobi = get_sub_field('case_study_item_mobile_image');
                    $case_study_video = get_sub_field('case_study_item_mobile_image'); ?>
                        <div class="case-study-item case-study-item-<?php echo get_row_index(); ?>">
                            <?php if (get_row_index() == 2): ?>
                                <div class="case-study-item-pbsjlaw">
                                    <script src="https://fast.wistia.com/embed/medias/8wx4vrgqnb.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_8wx4vrgqnb videoFoam=true" style="height:100%;position:relative;width:100%">&nbsp;</div></div></div>
                                </div>
                            <?php else: ?>
                                <img class="desktop-view" src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                                <img class="mobile-view" src="<?php echo esc_url( $case_study_image_mobi['url'] ) ?>">
                                <?php if (get_sub_field('case_study_item_video')): ?>
                                    <div class="case-study-block-video">
                                        <?php echo get_sub_field('case_study_item_video'); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php elseif (get_sub_field('single_case_study_tag') == 'wedding-suits') :?>
                <?php if ( have_rows( 'case_studies_repeater' ) ) : 
                    while ( have_rows( 'case_studies_repeater' ) ) : the_row();
                    $case_study_image = get_sub_field('case_study_item_image');
                    $case_study_image_mobi = get_sub_field('case_study_item_mobile_image');
                    $case_study_video = get_sub_field('case_study_item_mobile_image'); ?>
                        <div class="case-study-item case-study-item-<?php echo get_row_index(); ?>">
                            <?php if (get_row_index() == 2): ?>
                                <div class="case-study-block-video-wedding-suits-2">
                                    <?php echo get_sub_field('case_study_item_video'); ?>
                                </div>
                            <?php elseif (get_row_index() == 6): ?>
                                <img class="desktop-view" src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                                <div class="case-study-block-video case-study-item-wedding-suits desktop-view">
                                    <?php echo get_sub_field('case_study_item_video'); ?>
                                    <img class="wedding-suits-sticker-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/wedding_block_6_sticker_1.png">
                                    <img class="wedding-suits-sticker-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/wedding_block_6_sticker_2.png">
                                </div>
                            <?php else: ?>
                                <img class="desktop-view" src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                                <img class="mobile-view" src="<?php echo esc_url( $case_study_image_mobi['url'] ) ?>">
                                <?php if (get_sub_field('case_study_item_video')): ?>
                                    <div class="case-study-block-video">
                                        <?php echo get_sub_field('case_study_item_video'); ?>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php elseif (get_sub_field('single_case_study_tag') == 'liberty-safe') :?>
                <?php if ( have_rows( 'case_studies_repeater' ) ) : 
                    while ( have_rows( 'case_studies_repeater' ) ) : the_row();
                    $case_study_image = get_sub_field('case_study_item_image');
                    $case_study_image_mobi = get_sub_field('case_study_item_mobile_image');
                    $case_study_video = get_sub_field('case_study_item_mobile_image'); ?>
                        <div class="case-study-item case-study-item-<?php echo get_row_index(); ?> case-study-item-liberty">
                            <?php if (get_row_index() == 2): ?>
                                <img class="desktop-view" src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                                <img class="mobile-view" src="<?php echo esc_url( $case_study_image_mobi['url'] ) ?>">
                                <div class="case-study-item-liberty-safe">
                                    <div class="case-study-item-liberty-safe-inner">
                                        <span>LIBERTY SAFE COMMERCIAL 1:</span>
                                        <label>Keep Your Bananas Organized</label>
                                        <div class="liberty-safe-video">
                                            <script src="https://fast.wistia.com/embed/medias/bc50dos44r.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_bc50dos44r videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/bc50dos44r/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>
                                        </div>
                                    </div>
                                    <div class="case-study-item-liberty-safe-inner">
                                        <span>LIBERTY SAFE COMMERCIAL 2:</span>
                                        <label>Safes Aren't Just For Men - Women Need Safes Too!</label>
                                        <div class="liberty-safe-video">
                                            <script src="https://fast.wistia.com/embed/medias/4smoo4ai96.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_4smoo4ai96 videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/4smoo4ai96/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>
                                        </div>
                                    </div>
                                    <div class="case-study-item-liberty-safe-inner">
                                        <span>LIBERTY SAFE COMMERCIAL 3:</span>
                                        <label>So Safe, It's Exhausting</label>
                                        <div class="liberty-safe-video">
                                            <script src="https://fast.wistia.com/embed/medias/pcw5fkn3d5.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_pcw5fkn3d5 videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/pcw5fkn3d5/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>
                                        </div>
                                    </div>
                                    <div class="case-study-item-liberty-safe-inner">
                                        <span>LIBERTY SAFE COMMERCIAL 4:</span>
                                        <label>LOCK UP YOUR GUNS. LOCK UP YOUR MEDICATION.</label>
                                        <div class="liberty-safe-video">
                                            <script src="https://fast.wistia.com/embed/medias/qrywtugdq8.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async></script><div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><div class="wistia_embed wistia_async_qrywtugdq8 videoFoam=true" style="height:100%;position:relative;width:100%"><div class="wistia_swatch" style="height:100%;left:0;opacity:0;overflow:hidden;position:absolute;top:0;transition:opacity 200ms;width:100%;"><img src="https://fast.wistia.com/embed/medias/qrywtugdq8/swatch" style="filter:blur(5px);height:100%;object-fit:contain;width:100%;" alt="" aria-hidden="true" onload="this.parentNode.style.opacity=1;" /></div></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            <?php elseif (get_row_index() == 3): ?>
                                <?php if (get_sub_field('case_study_item_video')): ?>
                                    <div class="case-study-block-video-3">
                                        <?php echo get_sub_field('case_study_item_video'); ?>
                                    </div>
                                <?php endif; ?>
                            <?php else: ?>
                                <img class="desktop-view" src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                                <img class="mobile-view" src="<?php echo esc_url( $case_study_image_mobi['url'] ) ?>">
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
                            <img class="desktop-view" src="<?php echo esc_url( $case_study_image['url'] ) ?>">
                            <img class="mobile-view" src="<?php echo esc_url( $case_study_image_mobi['url'] ) ?>">
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

        <?php
            $prev_btn_link = get_sub_field('prev_button_link');
            $next_btn_link = get_sub_field('next_button_link');
        ?>

        <div class="single-case-study-pagination">
            <a class="btn-prev-news" href="<?php echo esc_url($prev_btn_link); ?>">
                <div class="img-prev-news">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/left_arrow.png">
                </div>
                <p>Prev <b>Story</b></p>
            </a>
            <a class="btn-next-news" href="<?php echo esc_url($next_btn_link); ?>">
                <p>Next <b>Story</b></p>
                <div class="img-next-news">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right_arrow.png">
                </div>
            </a>
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