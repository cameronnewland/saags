<?php 		
			$recipe_classes = array('column','small-6','large-4','homepage_recipes_recipe');
			$recipe_category = wp_get_post_terms( $post->ID, 'recipe_category' );
			if(!empty($recipe_category)){
				foreach ($recipe_category as $recipe_category){
					$recipe_classes[] = $recipe_category->slug;
				}
			}
			$meals = wp_get_post_terms( $post->ID, 'meals' );
			if(!empty($meals)){
				foreach ($meals as $meal){
					$recipe_classes[] = $meal->slug;
				}
			}
			$occasions = wp_get_post_terms( $post->ID, 'occasions' );
			if(!empty($occasions)){
				foreach ($occasions as $occasion){
					$recipe_classes[] = $occasion->slug;
				}
			}
			$recipe_image = get_field('inset_image');
			if( !empty($recipe_image) ) {
				$recipe_image_url =  $recipe_image['url'];	
			} else {
				$recipe_image_url = get_template_directory_uri()."/assets/img/products/product_image_not_found.png";
			} ?>
		<div <?php post_class($recipe_classes); ?> style="background-image:url(<?php echo $recipe_image_url; ?>);">
			<a href="<?php the_permalink(); ?>" class="recipes_color_overlay absolute-block">
				<div>
					<h2 class="homepage_recipes_recipe_title universlightcondensed"><?php the_title(); ?></h2>
					<div class="see_recipe_cta">SEE RECIPE</div>
				</div>
			</a>
		</div>