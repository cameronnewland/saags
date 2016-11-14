<div id="submit-a-recipe" class="reveal-modal careers_job_openings_modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
	<div class="text-center">
		<h2 class="burford remove-on-submit">SUBMIT A RECIPE</h2>
	</div>
	<p class="hide-for-large-up remove-on-submit">Have a great homemade recipe to share? We love to try new dishes inspired by Saag’s products. Share a hearty recipe with us and we’ll feature it on our website.</p>
	<p class="show-for-large-up remove-on-submit">Have a great homemade recipe to share? We love to try new dishes inspired by Saag’s<br>products. Share a hearty recipe with us and we’ll feature it on our website.</p>
<?php 
$submit_a_recipe_page = get_page_by_title( 'Submit A Recipe' );
setup_postdata( $submit_a_recipe_page );
the_content();
wp_reset_postdata(); ?>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<script>
$(document).ready(function(){
	$('select').each(function(){
		$(this).select2();
	});
});
</script>