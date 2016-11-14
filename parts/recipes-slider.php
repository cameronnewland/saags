<?php
/**
 * The recipes slider template
 */
$args = array(
	'posts_per_page' => -1,
	'post_type' => 'recipes_sliders',
	'orderby' => 'menu_order',
	'order' => 'ASC',
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {?>
	<section class="recipes_slider_container relative-block hide-for-large-up">
		<div class="absolute-block">
			<div class="recipes_slider_actual_container relative-block">
<?php while ( $the_query->have_posts() ) {
		$the_query->the_post();
		if( get_field('mobile_slider_image') ){ ?>
		<div>
			<a style="position:relative;" href="<?php if( get_field('slider_link') != '' ){ the_field('slider_link'); } else {
	$posts = get_field('associated_recipe');
	if( $posts ):
		foreach( $posts as $p ):
			echo get_permalink( $p->ID );
		endforeach;
	endif;
} ?>" class="recipes_slider" style="background-image:url(<?php the_field('slider_image'); ?>);background-size:cover;">
				<div class="absolute-block flex-block" style="background-image:url(<?php the_field('mobile_slider_image'); ?>);background-size:cover;background-repeat:no-repeat;">
					<div>
						<div class="universlightcondensed centered-white-text-with-light-brown-semitransparent-background">
<?php
if( get_field('recipe_title_line_1') != '' && get_field('recipe_title_line_1') != '' ){
	echo get_field('recipe_title_line_1').'<br>'.get_field('recipe_title_line_2');
} else {
	the_title();
}
?>
						</div>
					</div>
				</div>
			</a>
		</div>
<?php 	}
	} ?>
			</div>
		</div>
	</section>
<?php } ?>
<div class="clearfix"></div>

<?php
if ( $the_query->have_posts() ) {?>
	<section class="recipes_slider_container relative-block show-for-large-up">
		<div class="absolute-block">
			<div class="recipes_slider_actual_container relative-block">
<?php while ( $the_query->have_posts() ) {
		$the_query->the_post();
		if( get_field('slider_image') ){ ?>
			<div>
				<a style="position:relative;" href="<?php if( get_field('slider_link') != '' ){ the_field('slider_link'); } else {
	$posts = get_field('associated_recipe');
	if( $posts ):
		foreach( $posts as $p ):
			echo get_permalink( $p->ID );
		endforeach;
	endif;
} ?>" class="recipes_slider" style="background-image:url(<?php the_field('slider_image'); ?>);background-size:cover;">
					<div class="absolute-block flex-block" style="background-image:url(<?php the_field('slider_image'); ?>);background-size:cover;background-repeat:no-repeat;">
						<div>
							<div class="universlightcondensed centered-white-text-with-light-brown-semitransparent-background">
<?php
if( get_field('recipe_title_line_1') != '' && get_field('recipe_title_line_1') != '' ){
	echo get_field('recipe_title_line_1').'<br>'.get_field('recipe_title_line_2');
} else {
	the_title();
}
?>
							</div>
						</div>
					</div>
				</a>
			</div>
<?php 	}
	} ?>
			</div>
		</div>
	</section>
<?php } ?>
<div class="clearfix"></div>