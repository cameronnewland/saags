<?php
/**
 * Template part for off canvas menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<a class="left-off-canvas-toggle" href="#"></a>
<!-- Off Canvas Menu -->
<aside class="right-off-canvas-menu" aria-hidden="true">
	<ul class="off-canvas-list">
		<li class="logo text-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/components/badge-mobile-menu-logo.png">
			</a>
		</li>
		<li>
			<a href="/products">Products</a>
		</li>
		<li>
			<a href="/recipes">Recipes</a>
		</li>
		<li><a href="/quality">Quality</a></li>
		<li class="has-submenu">
			<a href="/our-story">About Us</a>
			<ul class="right-submenu" style="height:auto;">
				<li class="back"><a href="#">Back</a></li>
<!-- 				<li><label class="universlight">About Us</label></li> -->
				<li><a href="/our-story">Our Story</a></li>
				<li><a href="/food-safety">Food Safety</a></li>
				<li><a href="/corporate-responsibility">Corporate<br>Responsibility</a></li>
				<!-- <li><a href="/newsroom">Newsroom</a></li> -->
				<li><a href="/careers">Careers</a></li>
				<li><a href="/sales-and-distribution">Sales &amp; Distribution</a></li>
			</ul>
		</li>
		<li>
			<a href="/where-to-buy">Where To Buy</a>
		</li>
		<li>
			<a href="/contact">Contact Us</a>
		</li>
<!-- 		<li class="has-submenu"><a href="#">Community</a>
			<ul class="right-submenu">
				<li class="back">
					<a href="#">Back</a>
				</li>
				<li>
					<label>Community</label>
				</li>
				<li>
					<a href="/social">Social Media</a>
				</li>
				<li>
					<a href="/partners">Partners</a>
				</li>
				<li>
					<a class="skip-uppercase" href="/faq">FAQs</a>
				</li>
			</ul>
		</li> -->
	</ul>
</aside>
<div class="clearfix"></div>