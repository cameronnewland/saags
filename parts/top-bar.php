<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="top-bar-container contain-to-grid">
    <nav class="tab-bar hide-for-large-up">
        <section class="right-small">
            <a class="right-off-canvas-toggle menu-icon" aria-expanded="false"><span></span></a>
        </section>
        <section class="text-center">
            <div class="top-bar-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/components/logo.png">
                </a>
            </div>
        </section>
    </nav>
    <nav class="top-bar show-for-large-up" data-topbar role="navigation">
        <section class="text-center top-bar-logo-container">
            <ul>
                <li class="top-bar-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/components/logo.png">
                    </a>
                </li>
            </ul>
        </section>
        <section class="top-bar-section show-for-large-up">
            <!-- Right Nav Section -->
            <ul class="right">
                <li class="has-dropdown<?php if ( is_page( array('Our Story','Food Safety', 'Corporate Responsibility', 'Newsroom', 'Partners' ) ) ) { echo ' active'; } ?>">
                    <a>About Us</a>
                    <ul class="dropdown">
                        <li class="first-child"><a href="/our-story">Our Story</a></li>
                        <li><a href="/food-safety">Food Safety</a></li>
                        <li><a href="/corporate-responsibility" class="reset-line-height">Corporate<br>Responsibility</a></li>
                        <!-- <li><a href="/newsroom">Newsroom</a></li> -->
                        <li><a href="/partners">Partners</a></li>
                        <li><a href="/sales-and-distribution">Sales &amp; Distribution</a></li>
                    </ul>
                </li>
                <li<?php if ( is_page('Where To Buy') ) { echo ' class="active"'; } ?>>
                    <a href="/where-to-buy">Where To Buy</a>
                </li>
                <li>
                    <a href="/contact">Contact Us</a>
                </li>
            </ul>

            <!-- Left Nav Section -->
            <ul class="left">
                <li<?php if ( is_post_type_archive( 'products' ) || is_singular( 'products' ) ) { echo ' class="active"'; } ?>>
                    <a href="/products">Products</a>
                </li>
                <li<?php if ( is_post_type_archive( 'recipes' ) || is_single( 'recipes' ) ) { echo ' class="active"'; } ?>>
                    <a href="/recipes">Recipes</a>
                </li>
                <li<?php if ( is_page('quality') ) { echo ' class="active"'; } ?>>
                    <a href="/quality">Quality</a>
                </li>
            </ul>
        </section>
    </nav>
</div>
<div class="clearfix"></div>