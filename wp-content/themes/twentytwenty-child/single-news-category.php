<?php
// Template Name: News Post
get_header();

$news_id = get_the_ID();
$next_news = get_next_post();

?>

<main class="single-news">
    <div class="single-news__inner">
        <div class="single-news-label">
            <label><?php echo get_the_date('n.j.Y'); ?></label>
            <p>News</p>
        </div>
        <div class="single-news-img-title">
            <?php echo get_the_post_thumbnail() ?>
            <h2><?php echo get_the_title(); ?></h2>
        </div>
        <div class="single-news-content">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/single_news_arrow.png">
            <div class="single-news-desc">
                <?php 
                    $newsPost = get_post($post->ID);
                    echo apply_filters('the_content', $newsPost->post_content);
                ?>
            </div>
        </div>
    </div>

    <div class="single-news__pagination">
        <a class="btn-before-news" href="/news">
            <div class="img-before-news">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/left_arrow.png">
            </div>
            <p>Back To <b>Stories</b></p>
        </a>
        <a class="btn-next-news" href="<?php echo get_permalink( $next_news->ID ); ?>">
            <p>Next <b>Story</b></p>
            <div class="img-next-news">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/right_arrow.png">
            </div>
        </a>
    </div>
    
</main>

<?php get_footer(); ?>