<?php
/**
 * The homepage recipes template
 */
?>
<div class="row">
	<section class="homepage_recipes text-center hide-for-large-up">
		<div class="homepage_recipes_header">
			<h2>RECIPES</h2>
			<h3>GET INSPIRED</h3>
		</div>
<?php

$args = array(
	'post_type' => 'recipes',
	'orderby'	=> 'menu_order',
	'order'		=> 'ASC',
	'posts_per_page' => -1,
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		if( $the_query->current_post < 8 ){
			$recipe_image = get_field('inset_image');
			if( !empty($recipe_image) ) {
				$recipe_image_url =  $recipe_image['url'];	
			} else {
				$recipe_image_url = get_template_directory_uri()."/assets/img/products/product_image_not_found.png";
			}
			get_template_part( 'parts/recipes', 'archive-recipe' );
	 	}
	}
} ?>
	</section>
	<section class="homepage_recipes text-center show-for-large-up">
		<div class="column large-4 homepage_recipes_recipe submit_a_recipe" style="background-image:url(<?php echo $recipe_image_url; ?>);">
			<a class="recipes_color_overlay absolute-block opaque-green" data-reveal-id="submit-a-recipe">
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
		if( $the_query->current_post < 14 ){
			get_template_part( 'parts/recipes', 'archive-recipe' );
		}
	}
} ?>
	</section>
	<div class="clearfix"></div>
</div>
<div class="all-recipes-container">
<?php
// The Loop
if ( $the_query->have_posts() ) {
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$recipe_image = get_field('inset_image');
		if( !empty($recipe_image) ) {
			$recipe_image_url =  $recipe_image['url'];	
		} else {
			$recipe_image_url = get_template_directory_uri()."/assets/img/products/product_image_not_found.png";
		}
		get_template_part( 'parts/recipes', 'archive-recipe' );
	}
} ?>
</div>
<?php get_template_part('parts/submit','a-recipe-form'); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom/recipes-archive.js"></script>
<?php /* Restore original Post Data */
wp_reset_postdata(); ?>