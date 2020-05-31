<?php
/**
 * Template Name: VCMO Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0
 */

get_header();
?>

<main class="vcmo-page">
    <div class="vcmo-hero">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vcmo_hero.jpg">
    </div>
    <div class="vcmo-title-introducing">
        <div class="vcmo-title">
            <label>vCMO</label>
            <span>virtual CMO</span>
        </div>
        <div class="vcmo-introducing">
            <div class="vcmo-introducing-left">
                <h3>Not ready to<br>hire a CMO?</h3>
                <h2>Introducing<br>virtual CMO:</h2>
            </div>
            <div class="vcmo-introducing-right">
                <p>Spectruss vCMO is for those companies who are looking to grow their business and need professionals to help build comprehensive advertising and marketing strategies. Our talented team at Spectruss will work together to develop a marketing and advertising strategy that will give you the tools you need to grow your business.</p>
            </div>
        </div>
        <div class="vcmo-contract">
            <div class="vcmo-contract-left">
                <h2>No contract,<br>no risk</h2>
                <p>The beauty of the Spectruss vCMO is that it limits your financial risk by allowing our services to be month to month. Typically, the Spectruss vCMO service acts as a transition for those businesses who don’t yet have the budget for a CMO, but need help building an effective marketing and advertising strategy.</p>
            </div>
            <div class="vcmo-contract-right">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vcmo_contract.jpg">
                <img class="vcmo-contract-right-half" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vcmo_contract_right_half.png">
            </div>
        </div>
        <div class="vcmo-work">
            <div class="vcmo-work-left">
                <img class="vcmo-work-top-dot" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vcmo_work_top_dot.png">
                <img class="vcmo-work-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vcmo_work_1.jpg">
                <img class="vcmo-work-bottom-dot" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vcmo_work_bottom_dot.png">
            </div>
            <div class="vcmo-work-right">
                <h2>So,<br>how does it work?</h2>
                <p>To start, the Spectruss team will review your current business data and compare it to your potential marketplace. After that, we will research your competitors and analyze trends in your target consumers' behavior. Based on the results, we will put together a strategy to help guide your business through it’s desired level of growth.</p>
                <img class="vcmo-work-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vcmo_work_2.jpg">
            </div>
        </div>
        <div class="vcmo-delivering">
            <div class="vcmo-delivering-left">
                <h2>Delivering<br>maximum return<br>for your investment</h2>
                <p>With Spectruss having 10+ years of diversified experience in digital and traditional advertising, we have a non-bias view towards advertising and marketing strategy. This is extremely important when building a strategy that is focused on maximizing your return on investment. Our number one goal as your Virtual CMO is to prove that our strategy makes your business more money.</p>
            </div>
            <div class="vcmo-delivering-right">
                <img class="vcmo-work-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vcmo_delivering.jpg">
            </div>
        </div>
        <div class="vcmo-details">
            <div class="vcmo-details-left">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vcmo_details.jpg">
            </div>
            <div class="vcmo-details-right">
                <h4>Details</h4>
                <ul>
                    <li>Month to Month pricing</li>
                    <li>No contract</li>
                    <li>Saves you money compared<br>to hiring full time CMO</li>
                    <li>Custom built marketing and<br>advertising strategy based on<br>market research</li>
                    <li>Couples well with Spectruss<br>MD packages</li>
                    <li>Starting at $5k</li>
                </ul>
            </div>
        </div>
        <div class="vcmo-bottom-dot">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/vcmo_work_top_dot.png">
        </div>
    </div>
    <div class="vcmo-page-form">
        <h2>want more?<br><b>contact us now!</b></h2>
        <div class="vcmo-form-dots">
            <div class="vcmo-form">
                <?php echo do_shortcode('[contact-form-7 id="212855" title="Contact Form"]'); ?>
            </div>
            <div class="vcmo-dots">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/footer_dots.png">
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
?>