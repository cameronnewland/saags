<div class="recipes_archive_filters hide-for-large-up">
	<div class="row">
		<div class="column small-8">
			<span class="sort_by">SORT BY:</span>
		</div>
		<div class="column small-4 relative-block">
			<input type="text" class="recipes_archive_search search">
			<i class="fa fa-search"></i>
		</div>
	</div>
	<div class="row">
		<div class="column small-4">
			<select class="filter-dropdown filter-product" data-placeholder="PRODUCT" placeholder="PRODUCT" data-filter-target="category-">
<?php 
$args = array(
    'orderby'           => 'name', 
    'order'             => 'ASC',
    'taxonomy'          => 'recipe_category',
); 
$terms = get_categories($args); ?>
				<option value="all" selected="selected">Product</option>
				<option value="all">All Products</option>
<?php foreach ($terms as $term) {
	if( $term->slug != "featured-on-homepage" ){ ?>
				<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
<?php }
} ?>
			</select>
		</div>
		<div class="column small-4">
			<select class="filter-dropdown filter-meal" data-placeholder="MEAL">
				<option value="all" selected="selected">Meal</option>
				<option value="all">All Meals</option>
<!-- 				<option value="meals-breakfast">Breakfast</option> -->
				<option value="meals-brunch">Brunch</option>
				<option value="meals-lunch">Lunch</option>
				<option value="meals-appetizer">Appetizer</option>
				<option value="meals-dinner">Dinner</option>
			</select>
		</div>
		<div class="column small-4">
			<select class="filter-dropdown filter-occasion" data-placeholder="OCCASION">
				<option value="all" selected="selected">Occasion</option>
				<option value="all">All Occasions</option>
				<option value="occasions-holidays">Holidays</option>
				<option value="occasions-grilling">Grilling</option>
				<option value="occasions-entertaining">Entertaining</option>
				<option value="occasions-tailgating">Tailgating</option>
			</select>
		</div>
	</div>
</div>

<div class="recipes_archive_filters show-for-large-up">
	<div class="row">
		<div class="column small-10 small-offset-1 seventyfive">
			<div class="row">
					<div class="column small-3">
					<select class="filter-dropdown filter-product" data-placeholder="PRODUCT" placeholder="PRODUCT" data-filter-target="category-">
		<?php 
		$args = array(
		    'orderby'           => 'name', 
		    'order'             => 'ASC',
		    'taxonomy'          => 'recipe_category',
		); 
		$terms = get_categories($args); ?>
						<option value="all" selected="selected">Product</option>
						<option value="all">All Products</option>
		<?php foreach ($terms as $term) {
			if( $term->slug != "featured-on-homepage" ){ ?>
						<option value="<?php echo $term->slug; ?>"><?php echo $term->name; ?></option>
		<?php }
		} ?>
					</select>
				</div>
				<div class="column small-3">
					<select class="filter-dropdown filter-meal" data-placeholder="MEAL" placeholder="MEAL">
						<option value="all" selected="selected">Meal</option>
						<option value="all">All Meals</option>
						<!-- <option value="meals-breakfast">Breakfast</option> -->
						<option value="meals-brunch">Brunch</option>
						<option value="meals-lunch">Lunch</option>
						<option value="meals-appetizer">Appetizer</option>
						<option value="meals-dinner">Dinner</option>
					</select>
				</div>
				<div class="column small-3">
					<select class="filter-dropdown filter-occasion" data-placeholder="OCCASION" placeholder="OCCASION">
						<option value="all" selected="selected">Occasion</option>
						<option value="all">All Occasions</option>
						<option value="occasions-holidays">Holidays</option>
						<option value="occasions-grilling">Grilling</option>
						<option value="occasions-entertaining">Entertaining</option>
						<option value="occasions-tailgating">Tailgating</option>
					</select>
				</div>
				<div class="column small-3 relative-block">
					<input type="text" class="recipes_archive_search search">
					<i class="fa fa-search"></i>
				</div>
			</div>
		</div>
	</div>
</div>