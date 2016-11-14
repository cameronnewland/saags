<style type="text/css">
.select2-results {
	background-color: #f4f4f4 !important;
}

.select2-container {
	margin-bottom:1rem;
}

@media only screen and (max-width: 64em) {
	.contact_form_container .select2-chosen {
		font-size:1.25rem;
	}
}

@media only screen and (min-width: 64.0625em) {
	.select2-container .select2-choice {
	    padding: 0.5rem 0 0.5rem 1rem;
	    font-size: 1.25rem;
	    background-color: #fff;
	}
	.select2-results .select2-result-label {
	    padding: 0.25rem 5%;
	    text-transform:none;
	}
}
</style>

<div class="page-contact">
	<div class="row">
		<div class="column small-12 large-6">
			<div class="text-center">
				<h1 class="universlightcondensed">CONTACT US   510-678-3403</h1>
			</div>
			<div class="contact_form_container light-brown-bg">
<!-- 				<h1 class="text-left white" style="margin-top:0;">HAVE A QUESTION?</h1>
				<p style="line-height:120%;">Get in touch with us today! We’ll get back to you as soon as possible.</p> -->
<?php if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		the_content();
	}
} ?>
			</div>
		</div>
		<div class="column small-12 large-6 text-center">
			<div class="floating-centered-inline-block text-left white">
				<div class="text-center">
					<h1 class="universlightcondensed">CAREERS</h1>
				</div>
				<div>
					<p>Carve out a career at Saag’s and embrace a company culture that treats sausage like an art. Every step of the way, our incredible staff produces fine quality products everyone can take pride in. Apply to join the Saag’s team, which offers career opportunities in areas like product development, packaging and distribution.</p>
					<p>NOTE: Applicants requiring reasonable accommodation for any part of the application and recruiting process may contact us through mail:</p>
					<p>Saag’s<br>
					1799 Factor Ave.<br>
					San Leandro, CA 94577</p>
					<p class="text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/contact/jartega.jpg">
<!-- 						<a class="button white light-brown-bg" href="mailto:jarteaga@saags.com?subject=<?php echo urlencode('Saag\'s Careers Inquiry'); ?>">Email: <strong>jarteaga@saags.com</strong></a> -->
					</p>
				</div>
			</div>
		</div>
	</div>
</div>