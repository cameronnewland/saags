<div class="lighter-grey-bg text-center mobile-section-with-some-padding top-section">
	<p class="hide-for-large-up text-left">As a responsible member of the community, Saag’s actively participates in environmental sustainability and community service. Since July of 2015, Saag’s has refined its green efforts so that 100% of all facility waste is now recycled. Throughout the year, Saag’s gives back to the community by donating money and food to the Alameda County Community Food Bank and the Davis Street Family Resource Center. Saag’s is also a proud supporter of the Hormel Foods SPAMMY® program, which combats malnutrition by delivering food to poverty-stricken areas.</p>
	<p class="show-for-large-up">As a responsible member of the community, Saag’s actively participates in environmental sustainability and community service. Since July of 2015, Saag’s has refined its green efforts so that 100% of all facility waste is now recycled. Throughout the year, Saag’s gives back to the community by donating money and food to the Alameda County Community Food Bank and the Davis Street Family Resource Center. Saag’s is also a proud supporter of the Hormel Foods SPAMMY® program, which combats malnutrition by delivering food to poverty-stricken areas.</p>
</div>

<section class="white-bg">
	<div class="row" data-equalizer>
		<div class="column small-12 large-6 flex-block" data-equalizer-watch>
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cr/alameda.jpg">
			</div>
		</div>
		<div class="column small-12 large-6 flex-block" data-equalizer-watch>
			<div>
				<div class="cr_partner_title_container">
					<h2 class="hide-for-large-up text-center">Alameda County Community Food Bank</h2>
					<h2 class="show-for-large-up">Alameda County Community Food Bank</h2>
				</div>
				<div>
					<p>For over 30 years, the Alameda County Community Food Bank has helped nourish the community. Their volunteers deliver over 2 million pounds of food a month to a distribution network of 240 non-profit centers, which includes soup kitchens after-school programs, child-care centers and senior centers.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row hide-for-large-up" data-equalizer>
		<div class="column small-12 large-6 flex-block" data-equalizer-watch>
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cr/davis-street.jpg">
			</div>
		</div>
		<div class="column small-12 large-6 flex-block" data-equalizer-watch>
			<div>
				<div class="cr_partner_title_container">
					<h2 class="hide-for-large-up text-center">Davis Street Family Resource Center</h2>
					<h2 class="show-for-large-up">Davis Street Family Resource Center</h2>
				</div>
				<div>
					<p>The Davis Street Family Resource Center distributes food to needy families in San Leandro and nearby communities. They also offer a range of family services including childcare development, clothing donations, workforce development and medical wellness checkups.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row show-for-large-up" data-equalizer>
		<div class="column small-12 large-6 flex-block" data-equalizer-watch>
			<div>
				<div class="cr_partner_title_container">
					<h2 class="hide-for-large-up text-center">Davis Street Family Resource Center</h2>
					<h2 class="show-for-large-up">Davis Street Family Resource Center</h2>
				</div>
				<div>
					<p>The Davis Street Family Resource Center distributes food to needy families in San Leandro and nearby communities. They also offer a range of family services including childcare development, clothing donations, workforce development and medical wellness checkups.</p>
				</div>
			</div>
		</div>
		<div class="column small-12 large-6 flex-block" data-equalizer-watch>
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cr/davis-street.jpg">
			</div>
		</div>
	</div>
	<div class="row" data-equalizer>
		<div class="column small-12 large-6 flex-block" data-equalizer-watch>
			<div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/cr/spammy.jpg">
			</div>
		</div>
		<div class="column small-12 large-6 flex-block" data-equalizer-watch>
			<div>
				<div class="cr_partner_title_container">
					<h2 class="hide-for-large-up text-center">Project SPAMMY&reg;</h2>
					<h2 class="show-for-large-up">Project SPAMMY&reg;</h2>
				</div>
				<div>
					<p>The Hormel Foods SPAMMY® Program combats malnutrition in Guatemala by providing food to children who are in need of nutrient-rich meals. These efforts have earned Hormel Foods a U.S. Chamber of Commerce finalist award for the 2015 Best Community Improvement Program.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <div class="mobile-section-with-some-padding donations green-bg text-center">
	<h2 class="title">DONATIONS</h2>
	<p class="hide-for-large-up text-left">Saag’s regularly donates clothing, food and other essential items to public service organizations, youth sports teams and individuals in need. Discounts on Saag’s products are considered per request on a case-by-case basis.</p>
	<p class="show-for-large-up">Saag’s regularly donates clothing, food and other essential items to public service organizations, youth sports teams and individuals in need. Discounts on Saag’s products are considered per request on a case-by-case basis.</p>
	<div>
		<a class="reversed-transparent-white-bg button rounded-corners text-center" data-reveal-id="donation-request-form-container">Donations Request Form</a>
	</div>
</div> -->

<div id="donation-request-form-container" class="reveal-modal cr_form_container" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
	<header>
		<div class="text-center">
			<h2><strong>DONATIONS REQUEST FORM</strong></h2>
		</div>
		<p>
			<strong>Requirements</strong><br>
			Submit a request for a discounted product. Provide a letter with your organization's letterhead verifying its 501(c)(3) tax status and tax ID number.
		</p>
		<p>
			<strong>Discount Terms</strong><br>
			Eligible leagues and public service organizations will be given subsidizes case pricing for products listed on our discount menu. We require that organizations have the ability to pick up product from our distribution center in Vernon, CA.
		</p>
		<p>Please allow up to four to eight weeks for a response to your request. Submitting this application is not a guarantee for request.</p>
	</header>
	<div class="donation-request-form">
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_content();
	}
}
?>
	</div>
	<a class="close-reveal-modal" aria-label="Close">×</a>
</div>