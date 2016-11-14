<?php
/**
 * The template for displaying all single Products posts
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();

/* Mobile Start */
$this_items_product_category = '';
$terms = get_the_terms( $post->ID, 'product_category' );
if ( !empty( $terms ) ){
    $term = array_shift( $terms );
    $this_items_product_category = ' '.$term->slug;
}

// Hero image code:

$hero_image = get_field('hero_image');

if( !empty($hero_image) ):
	$hero_image_url =  $hero_image['url'];
endif; ?>
<div class="hide-for-large-up">
	<div class="products_single_hero<?php echo $this_items_product_category; ?>"<?php if( !empty($hero_image) ){ ?> style="background:url(<?php echo $hero_image_url; ?>);"<?php } ?>></div>
	<div class="products_single_product_image_container text-center row">
		<div class="products_single_product_image_background column small-8 small-offset-2">
			<div class="products_single_product_image">
<?php
			if ( has_post_thumbnail() ) { ?>				
						<img src="<?php $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $featured_image_url; ?>">
<?php
			} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_image_not_found.png">
			<?php } ?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="small-10 small-offset-1" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<header>
					<h1 class="title">SAAG'S<span class="regtm">&reg;</span> <?php the_title(); ?></h1>
				</header>
	<?php if ( get_field('product_tagline') ){ ?>
				<div class="tagline"><?php the_field('product_tagline'); ?></div>
	<?php }
	if( get_field('beer_pairing_tip') ){ ?>
				<div class="cooking_suggestion">
					<div class="cooking_suggestion_header">
						<div class="cooking_suggestion_heading burford">BEER PAIRING TIP</div>
					</div>
					<div class="cooking_suggestion_content"><?php the_field('beer_pairing_tip'); ?></div>
				</div>
	<?php }
	if( get_field('sandwich_suggestion') ){ ?>
				<div class="cooking_suggestion">
					<div class="cooking_suggestion_header">
						<div class="cooking_suggestion_heading burford">SANDWICH SUGGESTION</div>
					</div>
					<div class="cooking_suggestion_content"><?php the_field('sandwich_suggestion'); ?></div>
				</div>
	<?php } ?>
			</article>
		</div>
	</div>
<?php
	// Nutrition Facts image code:
	$nutrition_facts_image = get_field('nutrition_facts_image');
	if( !empty($nutrition_facts_image) ):
		$nutrition_facts_image_url =  $nutrition_facts_image['url']; ?>
	<div class="row">
		<div class="small-12 text-center">
			<img class="nutrition_facts_image" src="<?php echo $nutrition_facts_image_url; ?>">
		</div>
	</div>
	<?php endif; ?>
	<div class="clearfix"></div>
	<div class="try_these_recipes row text-center">
		<div class="try_these_recipes_brown_line"></div>
		<h3>TRY THESE RECIPES</h3>
	</div>
	<?php get_template_part( 'parts/try', 'these-recipes' ); ?>
</div>
<?php /* Desktop Start */ ?>
<div class="show-for-large-up">
	<?php 
	$hero_image = get_field('hero_image');
	if( !empty($hero_image) ):
		$hero_image_url =  $hero_image['url'];
	endif; ?>
	<div class="products_single_hero<?php echo $this_items_product_category; ?>"<?php if( !empty($hero_image) ){ ?> style="background-image:url(<?php echo $hero_image_url; ?>);"<?php } ?>></div>
	<div class="row products-single-row">
		<div class="column large-6">
			<h1 class="title">SAAG'S<span class="regtm">&reg;</span> <?php the_title(); ?></h1>
	<?php if ( get_field('product_tagline') ){ ?>
			<div class="tagline"><?php the_field('product_tagline'); ?></div>
	<?php }
	if( get_field('beer_pairing_tip') ){ ?>
			<div class="cooking_suggestion">
				<div class="cooking_suggestion_header">
					<div class="cooking_suggestion_heading burford">BEER PAIRING TIP</div>
				</div>
				<div class="cooking_suggestion_content"><?php the_field('beer_pairing_tip'); ?></div>
			</div>
	<?php }
	if( get_field('sandwich_suggestion') ){ ?>
			<div class="cooking_suggestion">
				<div class="cooking_suggestion_header">
					<div class="cooking_suggestion_heading burford">SANDWICH SUGGESTION</div>
				</div>
				<div class="cooking_suggestion_content"><?php the_field('sandwich_suggestion'); ?></div>
			</div>
	<?php } ?>
		</div>
		<div class="column large-1">&nbsp;</div>
		<div class="column large-5">
			<div class="products_single_product_image_container relative-block text-center">
				<div class="absolute-block flex-block">
					<div class="products_single_product_image">
			<?php
			if ( has_post_thumbnail() ) { ?>				
						<img src="<?php $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $featured_image_url; ?>">
<?php
			} else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/products/product_image_not_found.png">
			<?php } ?>
					</div>
				</div>
			</div>
<?php
	// Nutrition Facts image code:
	$nutrition_facts_image = get_field('nutrition_facts_image');
	if( !empty($nutrition_facts_image) ):
		$nutrition_facts_image_url =  $nutrition_facts_image['url']; ?>
			<div class="text-center">
				<img class="nutrition_facts_image" src="<?php echo $nutrition_facts_image_url; ?>">
			</div>
	<?php endif; ?>

<?php
	// Ingredients
	if( get_field('ingredients') ): ?>
			<div class="ingredients">
				<?php the_field('ingredients'); ?>
			</div>
	<?php endif; ?>

		</div>
	</div>
	<div class="try_these_recipes row text-center">
		<div class="try_these_recipes_brown_line"></div>
		<h3>TRY THESE RECIPES</h3>
	</div>
	<?php get_template_part( 'parts/try', 'these-recipes' ); ?>
	<?php endwhile;?>
</div>
<?php get_footer(); ?>