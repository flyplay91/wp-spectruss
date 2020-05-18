<?php
/**
 * Template Name: News Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<?php
    $postObj = get_posts( array(
        'numberposts'	=> -1,
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'sort_order' => 'asc',
        'offset'         => 1
    ) );
?>

<main class="news-page">
    <div class="news-nav">
        <div class="news-label">the<br><b>good</b><br><b>good</b></div>
        <div class="news-title">News</div>
        <div class="news-sub-title">
            <label>The latest from</label>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/black_logo.png">
        </div>
        <div class="news-nav-block">
            <input type="hidden" id="ajax-url" value="<?php echo get_stylesheet_directory_uri() ?>/ajax.php">
            <ul>
                <li><a href="javascript: void(0)" data-value="all">all</a></li>
                <li><a href="javascript: void(0)" data-value="<?php echo get_cat_ID('business'); ?>">business</a></li>
                <li><a href="javascript: void(0)" data-value="<?php echo get_cat_ID('design'); ?>">design</a></li>
                <li><a href="javascript: void(0)" data-value="<?php echo get_cat_ID('marketing'); ?>">marketing</a></li>
                <li><a href="javascript: void(0)" data-value="<?php echo get_cat_ID('projects'); ?>">projects</a></li>
                <li><a href="javascript: void(0)" data-value="<?php echo get_cat_ID('events'); ?>">events</a></li>
            </ul>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/halfframe_vert.png">
        </div>
    </div>
    <div class="news-story">
        <?php
            if ( $postObj ) {
                foreach ( $postObj as $post ) {
                    setup_postdata( $post );
                    ?>
                        <div class="news-story-item">
                            <a href="<?php the_permalink(); ?>">
                                <h2><?php echo the_title(); ?></h2>
                                <div class="news-story-image">
                                    <?php echo get_the_post_thumbnail(); ?>
                                    <label><?php echo get_the_date('n.j.Y'); ?></label>
                                </div>
                                <p class="trim-news">
                                    <?php
                                        echo wp_trim_words( get_the_content(), 40, '...' );
                                    ?>
                                </p>
                                <div class="news-story-arrow">
                                    <p>Go To <b>Story</b></p>
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right_arrow.png">
                                </div>
                            </a>
                        </div>
                    <?php
                }
                wp_reset_postdata();
            }
        ?>
        
    </div>

</main>

<?php get_footer(); ?>