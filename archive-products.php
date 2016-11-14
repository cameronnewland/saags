<?php
/**
 * The Products Index template
 *
 */
get_header(); ?>
<section class="products_archive">
	<div class="hero_container products_archive_hero relative-block">
		<div class="absolute-block flex-block">
			<div class="universlightcondensed centered-white-text-with-light-brown-semitransparent-background">PRODUCTS</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="products_archive_filter_nav show-for-large-up">
		<div class="row text-center">
			<div style="display:inline-block;">
				<div class="products_archive_filter_item active">
					<a class="filter-all active">All</a>
				</div>
				<div class="products_archive_filter_item">
					<a class="filter-naturals">Saag's Naturals</a>
				</div>
				<div class="products_archive_filter_item">
					<a class="filter-saags-bistro">Saag's Bistro</a>
				</div>
				<div class="products_archive_filter_item">
					<a class="filter-deli-meats">Gourmet Deli Meats</a>
				</div>
			</div>
		</div>
	</div>
	<div class="products_archive_filter_nav hide-for-large-up">
		<div class="products_archive_filter_dropdown_toggle text-center">
			<h2 class="filter-all active">All SAAG'S PRODUCTS</h2>
			<h2 class="filter-naturals">Saag's Naturals</h2>
			<h2 class="filter-saags-bistro">Saag's Bistro</h2>
			<h2 class="filter-deli-meats">Gourmet Deli Meats</h2>
			<div class="right dropdown-toggle collapsed"></div>
			<div class="products_archive_filter_dropdown row">
				<div class="vertical-divider"></div>
				<div class="column small-12 products_archive_filter_item text-center">
					<a class="filter-all active">All PRODUCTS</a>
				</div>
				<div class="column small-12 products_archive_filter_item text-center">
					<a class="filter-naturals">Saag's Naturals</a>
				</div>
				<div class="column small-12 products_archive_filter_item text-center">
					<a class="filter-saags-bistro">Saag's Bistro</a>
				</div>
				<div class="column small-12 products_archive_filter_item text-center">
					<a class="filter-deli-meats">Gourmet Deli Meats</a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<p class="text-center" style="color:#000;font-size: 0.75rem;font-family: 'UniversLTPro-45Light';margin:0;">For food service products and retail please see <a style="color:#000 !important;font-weight:bold;" href="/sales-and-distribution/">sales and distribution</a>.</p>
	</div>
	<div class="row">
		<div class="column small-12">
			<div class="category_label_and_diet_filter_container show-for-large-up">
				<h2 class="products_archive_category_filter_label filter-all active">All Saag's Products</h2>
				<h2 class="products_archive_category_filter_label filter-naturals">Saag'S Naturals</h2>
				<h2 class="products_archive_category_filter_label filter-saags-bistro">Saag's Bistro</h2>
				<h2 class="products_archive_category_filter_label filter-deli-meats">Gourmet Deli Meats</h2>
<?php 
$taxonomies = array( 
    'diet',
);
$args = array(
    'orderby'           => 'name', 
    'order'             => 'ASC',
); 
$terms = get_terms($taxonomies, $args); ?>
 				<div class="diet_filter">
					<select class="diet_dropdown" data-placeholder="Filter">
						<option value="none">Filter</option>
						<option value="none" selected="selected">Show All</option>
<?php foreach ($terms as $term) { ?>
						<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?>&nbsp;&nbsp;&nbsp;</option>
<?php } ?>
					</select>
				</div>
			</div>
			<div class="category_label_and_diet_filter_container hide-for-large-up text-center">
				<h2 class="products_archive_category_filter_label filter-all active">All Saag's Products</h2>
				<h2 class="products_archive_category_filter_label filter-naturals">Saag'S Naturals</h2>
				<h2 class="products_archive_category_filter_label filter-saags-bistro">Saag's Bistro</h2>
				<h2 class="products_archive_category_filter_label filter-deli-meats">Gourmet Deli Meats</h2>
 				<div class="diet_filter">
					<select class="diet_dropdown" data-placeholder="Filter">
						<option value="none">Filter</option>
						<option value="none" selected="selected">Show All</option>
<?php foreach ($terms as $term) { ?>
						<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?>&nbsp;&nbsp;&nbsp;</option>
<?php } ?>
					</select>
				</div>
			</div>
			<div data-alert class="alert-box alert no-results-text">No products match your search filter. Click 'All' to see all Saag's&reg; products.</div>
		</div>
		<div class="products-results-container"></div>
		<div class="all-products-container">
		<?php if ( have_posts() ) : ?>
			<?php do_action( 'foundationpress_before_content' ); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'products' ); ?>
			<?php endwhile; ?>
			<div class="clearfix"></div>
			<?php do_action( 'foundationpress_before_pagination' ); ?>
		<?php endif;?>
		</div>
		<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
</section>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom/products-archive.js"></script>
<script>
    $(document).ready(function() {
        setTimeout('$("select").select2("val", "none");',500);
    });
</script>
<?php get_footer(); ?>
