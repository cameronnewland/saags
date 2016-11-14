<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>

<footer class="show-for-large-up">
	<div class="row">
		<div class="column large-3 large-offset-1">
			<div class="row footer-nav">
				<div class="column large-7 text-left">
					<a href="/products">Products</a>
					<a href="/recipes">Recipes</a>
					<a href="/quality">Quality</a>
				</div>
				<div class="column large-5 text-left">
					<a href="/where-to-buy">Where To Buy</a>
					<a href="/faq">FAQs</a>
					<a href="/contact">Contact</a>
				</div>
			</div>
		</div>
		<div class="column large-4 text-center">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/components/footer-logo.png">
			</a>
		</div>
		<div class="column large-4">
			<div class="row footer-nav">
				<div class="column large-6 text-left">
					<a href="/corporate-responsibility">Corporate<br>Responsibility</a>
					<!-- <a href="/newsroom">Newsroom</a> -->
					<a href="/sales-and-distribution">Sales/Distribution</a>
				</div>
				<div class="column large-6 text-left">
					<a href="/ca-transparency-act">CA Transparency Act</a>
					<a target="_blank" href="http://www.hormelfoods.com/About/Legal/Privacy-Policy">Privacy Policy</a>
					<a target="_blank" href="http://www.hormelfoods.com/About/Legal/Terms">Terms of Use</a>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright_container">
		<div class="row text-center">
			<div class="copyright">Copyright &copy; <?php echo date("Y"); ?> Saag's Specialty Meats</div>
		</div>
	</div>
</footer>

<footer class="hide-for-large-up">
	<div class="row padmealittle">
		<div class="column small-12 text-center">
	        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/components/footer-logo.png">
	        </a>
		</div>
	</div>
	<div class="row footer-nav">
		<div class="column small-6">
			<a href="/products">Products</a>
			<a href="/recipes">Recipes</a>
			<a href="/quality">Quality</a>
		</div>
		<div class="column small-6">
			<a href="/where-to-buy">Where To Buy</a>
			<a href="/faq">FAQs</a>
			<a href="/contact">Contact</a>
		</div>
	</div>
	<div class="row footer-nav">
		<div class="column small-6">
			<a href="/corporate-responsibility">Corporate<br>Responsibility</a>
			<!-- <a href="/newsroom">Newsroom</a> -->
			<a href="/sales-and-distribution">Sales/Distribution</a>
		</div>
		<div class="column small-6">
			<a href="/ca-transparency-act" class="ca_transparency_act">CA Transparency Act</a>
			<a target="_blank" href="http://www.hormelfoods.com/About/Legal/Privacy-Policy">Privacy Policy</a>
			<a target="_blank" href="http://www.hormelfoods.com/About/Legal/Terms">Terms of Use</a>
		</div>
	</div>
	<div class="copyright_container">
		<div class="row text-center">
			<div class="copyright">Copyright © 2015 Saag's Specialty Meats</div>
		</div>
	</div>
</footer>

<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>

	</div>
</div>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
