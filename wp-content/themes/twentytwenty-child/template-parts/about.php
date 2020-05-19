<?php
/**
 * Template Name: About Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main class="about-page">
    <?php if( have_rows('hero_group') ): ?>
		<?php while( have_rows('hero_group') ): the_row(); 
			$hero_image = get_sub_field('hero_image');
			$line_image = get_sub_field('hero_line_image');
		?>
        <div class="about-hero">
            <div class="about-hero-triangle"></div>
            <div class="about-hero-content"><?php echo get_sub_field('hero_content'); ?></div>
            <div class="about-hero-line"></div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
    
    <?php if( have_rows('capabilities_group') ): ?>
		<?php while( have_rows('capabilities_group') ): the_row(); ?>
        <div class="about-capability">
            <h3><?php echo get_sub_field('capabilities_title'); ?></h3>
            <div class="capability-items">
                <?php if ( have_rows( 'capabilities_repeater' ) ) : 
                    while ( have_rows( 'capabilities_repeater' ) ) : the_row(); ?>
                    <div class="capability-item">
                        <label><?php echo get_sub_field('capability_title'); ?></label>
                        <ul>
                            <?php if ( have_rows( 'capability_repeater' ) ) : 
                                while ( have_rows( 'capability_repeater' ) ) : the_row();?>
                                <li><?php echo get_sub_field('capability_item'); ?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="capability-package">
                <h3><?php echo get_sub_field('packages_title'); ?></h3>
                <ul>
                    <?php if ( have_rows( 'packages_repeater' ) ) : 
                        while ( have_rows( 'packages_repeater' ) ) : the_row();
                        $package_link = get_sub_field('package_link'); ?>
                        <li><a href="<?php echo esc_url($package_link); ?>"><?php echo get_sub_field('package_text'); ?></a></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('brand_group') ): ?>
		<?php while( have_rows('brand_group') ): the_row(); ?>
        <div class="about-brands">
            <h3><?php echo get_sub_field('brand_title'); ?></h3>
            <div class="about-brand-items">
                <?php if ( have_rows( 'brand_image_repeater' ) ) : 
                    while ( have_rows( 'brand_image_repeater' ) ) : the_row();
                    $brand_image = get_sub_field('brand_image'); ?>
                    <div class="about-brand-item">
                        <img src="<?php echo esc_url( $brand_image['url'] ); ?>">
                    </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <div class="about-leadership">
        <h3>leadership</h3>
        <div class="leadership-items">
            <div class="leadership-item">
                <div class="leadership-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sam_face.jpg">
                </div>
                <div class="leadership-desc">
                    <h2>Sam <b>Silvey</b></h2>
                    <label>Founder & CEO</label>
                    <p>Sam started out building websites and e-commerce systems in his home as a freelancer back in 2006. At one point or another, he has studied and worked in every aspect of marketing, including backend programming, UI/UX design, branding, photography, videography, SEO, managed digital advertising, and complete system integrations. Over the years, Sam has successfully grown Spectruss to become a full service marketing agency, with strong roots in technology, design and digital marketing.<br>Before finding his passion in marketing, Sam spent the early years of his life dedicated to his cycling ambition. Initially starting as a mountain bike racer at 12 years old, Sam raced everything from XC, to downhill, to 4X and road bikes. Along the way he claimed many titles, including National title in Downhill, TN State Pro Champion, SEC Div 1 Mtn Bike Champion, and 24 Hours of Adrenaline Champion, just to name a few. In the end, Sam decided there were was more to life than just being really, really, really, really fast on two wheels (said in Zoolander voice). He is thankful, however, of the great experiences, the many lessons learned and the great friends he made along the way.<br>Now days, when not at the office, you can expect to find Sam fly fishing in a remote river, mountain biking beautiful hidden trails, or heel toe downshifting a race car at break neck speeds.</p>
                </div>
            </div>
            <div class="leadership-item">
                <div class="leadership-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/justin_face.jpg">
                </div>
                <div class="leadership-desc">
                    <h2>Justin <b>Aaron</b></h2>
                    <label>Creative Director</label>
                    <p>
                    Justin’s creative roots date back as a young visual artist growing up and gaining knowledge of art and design from three different continents. He ‘s been exposed to different cultures throughout his childhood living in the Philippines, the Middle East and studying art in Germany.<br>With a Bachelor of Architecture degree from the University of Tennessee, Justin brings complex ideation through a systematic creative process that is indicative of his architectural training. Serving as Spectruss’ creative director, he’s been the brains behind the identity for notable brands, design projects and numerous campaigns, including Hutton & Smith Brewing Co., Brewski, the new online experience for the Hunter Museum of American Art, and 2016’s “IMPACT,” for the American Institute of Architects.<br>Outside the office, Justin loves being outdoors... but not that kind of outdoors. You’ll find him landscaping his garden planting greenery and working on design build projects at his home. He is also a plant collector and a student of bonsai art with a growing indoor jungle of different flora in his home studio.<br>With a mild obsession for Japanese architecture, design principles and the “kawaii” culture, Justin is also a proud dog dad to Japan’s most beloved dog breed, the Shiba Inu. @Tōkjō.the.shiba and Justin are inseparable. He co-manages Tōkjō’s Instagram career, building his brand and keeping his growing followers entertained! 
                    </p>
                </div>
            </div>
            <div class="leadership-item">
                <div class="leadership-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/annie_face.jpg">
                </div>
                <div class="leadership-desc">
                    <h2>Annie <b>Traver</b></h2>
                    <label>Project Manager</label>
                    <p>Annie Tarver is a Marketing Specialist who researches data and trends within the marketplace to coordinate a precise marketing strategy for Spectruss clients, while specializing in Google Adwords and Analytics. Annie is an experienced social media coordinator with a demonstrated history of working in an agency atmosphere. She is skilled in Google Adwords, SEO, Online Advertising, Hubspot, and Social Media. Annie has a strong media and communications professional presence with a Bachelor’s degree focused in Business Marketing from The University of Tennessee at Chattanooga.<br>Outside of work, Annie enjoys trying all types of new things, ranging from food and wine to exhilarating, adventurous activities. Being a Chattanooga native, Annie spends much of her time with her family and friends. If not at work, you can find her either soaking up the sun with a cocktail in her hands or scouring down nuggets at Chick-Fil-A.<br>Annie is available for marketing and social media inquiries, as well as private consultations. You can reach her at annie@spectruss.com</p>
                </div>
            </div>
            <div class="leadership-item">
                <div class="leadership-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/jessica_face.jpg">
                </div>
                <div class="leadership-desc">
                    <h2>Jessica <b>Frampton</b></h2>
                    <label>Content Manager</label>
                    <p>Jessica Frampton hails from Virginia. After getting married, she moved to her husband’s hometown of Chattanooga, TN. She recently graduated from Liberty University with a degree in business, focused in digital marketing. Through college, Jessica worked for various companies gaining business knowledge and growing customer relationships. She has a passion for the small business and finding creative ways to increase growth.<br>Outside the office, you can find Jessica adventuring outdoors, trying local food, or watching Game of Thrones with her husband. During the colder season, Jessica is an avid snowboarder and loves taking trips to the slopes. You can also find her playing sand volleyball or kayaking along the river. She is always on the hunt for great sushi or finding a local winery.</p>
                </div>
            </div>
            <div class="leadership-item">
                <div class="leadership-img">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/max_face.jpg">
                </div>
                <div class="leadership-desc">
                    <h2>Max <b>Mospanyuk</b></h2>
                    <label>Director Of Film + Production</label>
                    <p>Michael is our Video Director. He is from Wisconsin, but is now a local Chattanoogan and hustles hard to make his vision come to life for our clients. Michael has always considered himself a creative, starting with his junior high video projects all the way to his college video projects. He has always found a way to tell a story with what he captures.<br>Michael started professionally pursuing videography five years ago and hasn’t looked back — he has traveled around the states with opportunities and we are thrilled to have him on our team! When Michael is not behind a camera, he is collaborating with others, brainstorming ideas and working with our clients. Michael is also a climber, singer, songwriter, husband, fur dad of 3 and can craft a mean sandwich.</p>
                </div>
            </div>
        </div>
    </div>

    <?php if( have_rows('leadership_thumb_group') ):
        while( have_rows('leadership_thumb_group') ): the_row(); ?>
        <div class="about-leadership-thumb">
            <?php if ( have_rows( 'leadership_thumb_repeater' ) ) : 
                while ( have_rows( 'leadership_thumb_repeater' ) ) : the_row(); 
                $leadership_thumb_image = get_sub_field('leadership_thumb_image');?>
                    <div class="leadership-thumb leadership-<?php echo get_row_index(); ?>">
                        <img src="<?php echo esc_url( $leadership_thumb_image['url'] ); ?>">
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <style>
        .about-page .about-hero-triangle {
            background-image: url(<?php echo esc_url( $hero_image['url'] ); ?>);
        }

        .about-page .about-hero-line {
            background-image: url(<?php echo esc_url( $line_image['url'] ); ?>);
        }
    </style>
</main>


<?php get_footer(); ?>