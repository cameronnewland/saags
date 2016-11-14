<?php
/**
 * The homepage recipes template
 */
?>
<a class="homepage_recipes_panel relative-block" href="/recipes/">
	<div class="absolute-block flex-block">
		<div class="universlightcondensed centered-white-text-with-light-brown-semitransparent-background">RECIPES</div>
	</div>
</a>
		<section class="homepage_recipes repeating_stripe_bg text-center hide-for-large-up">
			<div class="row">
				<div class="column small-12 homepage_recipes_recipe submit_a_recipe" style="background-image:url(<?php echo $recipe_image_url; ?>);">
					<a class="recipes_color_overlay absolute-block flex-block opaque-green" data-reveal-id="submit-a-recipe">
						<div>
							<h2 class="burford underlined-link">SUBMIT YOUR RECIPE</h2>
						</div>
					</a>
				</div>
<?php
$args = array(
	'post_type' => 'recipes',
	'orderby' => 'rand',
	// 'category_name' => 'featured-on-homepage',
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		if( $the_query->current_post < 5 ){
			$recipe_image = get_field('inset_image');
			if( !empty($recipe_image) ) {
				$recipe_image_url =  $recipe_image['url'];	
			} else {
				$recipe_image_url = get_template_directory_uri()."/assets/img/products/product_image_not_found.png";
			} ?>
				<div class="column small-12 homepage_recipes_recipe" style="background-image:url(<?php echo $recipe_image_url; ?>);">
					<a href="<?php the_permalink(); ?>" class="recipes_color_overlay absolute-block flex-block">
						<div>
							<h2 class="homepage_recipes_recipe_title universlightcondensed"><?php the_title(); ?></h2>
						</div>
					</a>
				</div>
<?php 	}
	}
} ?>
			</div>
		</section>
		<section class="homepage_recipes repeating_stripe_bg text-center show-for-large-up">
			<div class="row">
				<div class="column large-4 homepage_recipes_recipe submit_a_recipe">
					<a class="recipes_color_overlay absolute-block flex-block opaque-green" data-reveal-id="submit-a-recipe">
						<div>
							<h2 class="burford underlined-link">SUBMIT YOUR RECIPE</h2>
						</div>
					</a>
				</div>
<?php
// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		if( $the_query->current_post < 5 ){
			$recipe_image = get_field('inset_image');
			if( !empty($recipe_image) ) {
				$recipe_image_url =  $recipe_image['url'];	
			} else {
				$recipe_image_url = get_template_directory_uri()."/assets/img/products/product_image_not_found.png";
			} ?>
				<div class="column large-4 homepage_recipes_recipe" style="background-image:url(<?php echo $recipe_image_url; ?>);">
					<div class="absolute-block">
						<a href="<?php the_permalink(); ?>" class="recipes_color_overlay absolute-block flex-block">
							<div>
								<h2 class="homepage_recipes_recipe_title universlightcondensed"><?php the_title(); ?></h2>
							</div>
						</a>
					</div>
				</div>
<?php 	}
	}
}
/* Restore original Post Data */
wp_reset_postdata();
?>
			</div>
			<div class="clearfix"></div>
		</section>
		<div class="clearfix"></div>
<?php get_template_part('parts/submit','a-recipe-form'); ?>