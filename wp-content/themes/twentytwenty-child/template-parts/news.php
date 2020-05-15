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

<main class="news-page">
    <div class="news-nav">
        <div class="news-label">the<br><b>good</b><br><b>good</b></div>
        <div class="news-title">News</div>
        <div class="news-sub-title">
            <label>The latest from</label>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/black_logo.png">
        </div>
        <div class="news-nav-block">
            <ul>
                <li><a href="">all</a></li>
                <li><a href="">business</a></li>
                <li><a href="">design</a></li>
                <li><a href="">marketing</a></li>
                <li><a href="">projects</a></li>
                <li><a href="">events</a></li>
            </ul>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/halfframe_vert.png">
        </div>
    </div>
    <div class="news-story">
        <div class="news-story-item">
            <a href="">
                <h2>Tips to Strengthen Your<br>Brand’s Social Media Presence</h2>
                <div class="news-story-image">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_1.jpg">
                    <label>6.18.19</label>
                </div>
                <p>In order to maximize your brand’s social media presence, it is important to understand the demographics of different social platforms.</p>
                <div class="news-story-arrow">
                    <p>Go To <b>Story</b></p>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right_arrow.png">
                </div>
            </a>
        </div>
        <div class="news-story-item">
            <a href="">
                <h2>Tips to Strengthen Your<br>Brand’s Social Media Presence</h2>
                <div class="news-story-image">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_1.jpg">
                    <label>6.18.19</label>
                </div>
                <p>In order to maximize your brand’s social media presence, it is important to understand the demographics of different social platforms.</p>
                <div class="news-story-arrow">
                    <p>Go To <b>Story</b></p>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right_arrow.png">
                </div>
            </a>
        </div>
        <div class="news-story-item">
            <a href="">
                <h2>Tips to Strengthen Your<br>Brand’s Social Media Presence</h2>
                <div class="news-story-image">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/news_1.jpg">
                    <label>6.18.19</label>
                </div>
                <p>In order to maximize your brand’s social media presence, it is important to understand the demographics of different social platforms.</p>
                <div class="news-story-arrow">
                    <p>Go To <b>Story</b></p>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right_arrow.png">
                </div>
            </a>
        </div>
    </div>

</main>

<?php get_footer(); ?>