<?php
/**
 * The template for displaying all single Recipes posts
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();

/* Mobile Start */
$this_items_recipe_category = '';
$terms = get_the_terms( $post->ID, 'recipe_category' );
if ( !empty( $terms ) ){
    $term = array_shift( $terms );
    $this_items_recipe_category = ' '.$term->slug;
}

// Hero image code:
$hero_image = get_field('hero_image');
if( !empty($hero_image) ):
	$hero_image_url =  $hero_image['url'];
endif; ?>
<div class="hide-for-large-up">
	<div class="recipes_single_hero<?php echo $this_items_recipe_category; ?>"<?php if( !empty($hero_image) ){ ?> style="background-image:url(<?php echo $hero_image_url; ?>);"<?php } ?>></div>
	<div class="recipes_single_recipe_image_container text-center row">
		<div class="recipes_single_recipe_image_background column small-8 small-offset-2">
			<div class="recipes_single_recipe_image">
<?php
$recipe_image = get_field('inset_image');
if( !empty($recipe_image) ) {
	$recipe_image_url =  $recipe_image['url'];	
} else {
	$recipe_image_url = get_template_directory_uri()."/assets/img/products/product_image_not_found.png";
} ?>
				<img src="<?php echo $recipe_image_url; ?>">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="small-10 small-offset-1" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<header>
				<h1 class="title universlightcondensed"><?php the_title(); ?></h1>
				<div class="recipes_single_recipe_social row">
					<div class="column small-4 rating text-center"><div class="rw-ui-container rw-uwid-<?php the_id(); ?>"></div>&nbsp;</div>
					<div class="column small-4 comments universroman text-center">
						<div class="comments_count"><?php comments_number('0','1','%'); ?></div>Comments
					</div>
					<div class="column small-4 recipe_share text-center relative-block">
						<div class="share_icon"></div>SHARE
						<div class="absolute-block recipe_triangle"></div>
						<div class="absolute-block recipe_sharing">
							<div class="row">
								<a class="column small-2 small-offset-1 addthis_button_facebook addthis_button_preferred_2 at300b">
									<i class="fa fa-facebook"></i>
									<div class="social_sharing_label">Share</div>
								</a>
								<a class="column small-2 addthis_button_twitter addthis_button_preferred_3 at300b">
									<i class="fa fa-twitter"></i>
									<div class="social_sharing_label">Tweet</div>
								</a>
								<div class="column small-2" onclick="javascript:return addthis_sendto('pinterest_share');">
									<i class="fa fa-pinterest-p"></i>
									<div class="social_sharing_label">Pin</div>
								</div>
								<div class="column small-2">
									<a class="column small-2 addthis_button_mail addthis_button_preferred_3 at300b">
										<i class="fa fa-envelope"></i>
										<div class="social_sharing_label">Email</div>
									</a>
								</div>
								<div class="column small-2 end" onclick="window.print(); return false;">
									<i class="fa fa-print"></i>
									<div class="social_sharing_label">Print</div>
									<?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
	<?php if( $post->post_content != "") { ?>
			<div class="tagline universroman"><?php the_content(); ?></div>
	<?php } ?>
			<div class="recipes_single_recipe_meta row">
				<div class="column recipes_single_recipe_meta_item text-center" data-equalizer-watch>
					<div class="meta_label">SERVINGS</div>
					<div class="meta_value"><?php the_field('servings'); ?></div>
				</div>
				<div class="column recipes_single_recipe_meta_item text-center" data-equalizer-watch>
					<div class="meta_label">PREP TIME</div>
					<div class="hours_and_minutes_container"><?php writeHoursAndMinutes(get_field('prep_time')); ?></div>
				</div>
				<div class="column recipes_single_recipe_meta_item text-center" data-equalizer-watch>
					<div class="meta_label">COOK TIME</div>
					<div class="hours_and_minutes_container"><?php writeHoursAndMinutes(get_field('cook_time')); ?></div>
				</div>
				<div class="column recipes_single_recipe_meta_item text-center" data-equalizer-watch>
					<div class="meta_label">TOTAL TIME</div>
					<div class="hours_and_minutes_container"><?php writeHoursAndMinutes(get_field('total_time')); ?></div>
				</div>
				<div class="column recipes_single_recipe_meta_item text-center end" data-equalizer-watch>
					<div class="meta_label">DIFFICULTY</div>
					<div class="meta_value difficulty <?php the_field('difficulty'); ?>"></div>
					<div class="meta_label_bottom difficulty_label"><?php the_field('difficulty'); ?></div>
				</div>
			</div>
<?php if( get_field('video_recipe_video_url') ){ ?>
		</div>
		<div class="recipes_single_recipe_video">
			<div class="small-10 small-offset-1">
				<h3 class="section_label">VIDEO RECIPE:</h3>
				<div class="section_label_light_brown_block"></div>
			</div>
			<div class="small-12">
				<div class="videoWrapper">
<?php			$recipe_video_youtube_url = get_field('video_recipe_video_url');
				$youtube_video_id = str_replace("https://www.youtube.com/watch?v=","",$recipe_video_youtube_url); ?>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $youtube_video_id; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
		<div class="small-10 small-offset-1" role="main">
<?php } ?>
			<div class="recipes_single_ingredients_container">
				<h3 class="section_label">INGREDIENTS:</h3>
				<div class="section_label_light_brown_block"></div>
				<div class="recipes_single_ingredients"><?php the_field('ingredients'); ?></div>
			</div>
			<div class="recipes_single_directions_container">
				<h3 class="section_label">DIRECTIONS:</h3>
				<div class="section_label_light_brown_block"></div>
				<div class="recipes_single_ingredients"><?php the_field('directions'); ?></div>
			</div>
<?php if( get_field('cooking_tip') ){ ?>
			<div class="pairing_tip">
				<div class="pairing_tip_header">
					<h3 class="section_label">PAIRING TIP</h3>
					<div class="section_label_light_brown_block"></div>
					<div class="pairing_tip_content"><?php the_field('cooking_tip'); ?></div>
				</div>
			</div>
<?php } ?>
			<div class="text-center">
				<a class="load-comments-button">LOAD COMMENTS</a>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="recipes_single_comments">
		<div class="row text-center">
			<h3 class="comments_centered_label">COMMENTS</h3>
		</div>
		<div class="row">
			<div class="column small-12">
			<?php comments_template(); ?>
			<?php comment_form(); ?>
			</div>
		</div>
	</div>
	<div class="try_these_recipes row text-center">
		<div class="try_these_recipes_black_line"></div>
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
	<div class="recipes_single_hero<?php echo $this_items_recipe_category; ?>"<?php if( !empty($hero_image) ){ ?> style="background-image:url(<?php echo $hero_image_url; ?>);"<?php } ?>></div>
	<div class="row">
		<div class="column large-6">
			<header style="padding-left: 10px;">
				<h1 class="title universlightcondensed"><?php the_title(); ?></h1>
				<div class="recipes_single_recipe_social row">
					<div class="column small-4 rating text-center"><div class="rw-ui-container rw-uwid-<?php the_id(); ?>"></div>&nbsp;</div>
					<div class="column small-8 comments universroman">
						<div class="comments_count"><?php comments_number('0','1','%'); ?></div>Comments
					</div>
				</div>
			</header>
	<?php if( $post->post_content != "") { ?>
			<div class="tagline universroman"><?php the_content(); ?></div>
	<?php } ?>
			<div class="row">
				<div class="column large-12">
					<div class="recipes_single_recipe_meta row" data-equalizer>
						<div class="column recipes_single_recipe_meta_item text-center" data-equalizer-watch>
							<div class="meta_label">SERVINGS</div>
							<div class="meta_value"><?php the_field('servings'); ?></div>
						</div>
						<div class="column recipes_single_recipe_meta_item text-center" data-equalizer-watch>
							<div class="meta_label">PREP TIME</div>
							<div class="hours_and_minutes_container"><?php writeHoursAndMinutes(get_field('prep_time')); ?></div>
						</div>
						<div class="column recipes_single_recipe_meta_item text-center" data-equalizer-watch>
							<div class="meta_label">COOK TIME</div>
							<div class="hours_and_minutes_container"><?php writeHoursAndMinutes(get_field('cook_time')); ?></div>
						</div>
						<div class="column recipes_single_recipe_meta_item text-center" data-equalizer-watch>
							<div class="meta_label">TOTAL TIME</div>
							<div class="hours_and_minutes_container"><?php writeHoursAndMinutes(get_field('total_time')); ?></div>
						</div>
						<div class="column recipes_single_recipe_meta_item text-center end" data-equalizer-watch>
							<div class="meta_label">DIFFICULTY</div>
							<div class="meta_value difficulty <?php the_field('difficulty'); ?>"></div>
							<div class="meta_label_bottom difficulty_label"><?php the_field('difficulty'); ?></div>
						</div>
					</div>
				</div>
			</div>
			<div class="recipes_single_ingredients_container">
				<h3 class="section_label">INGREDIENTS:</h3>
				<div class="section_label_light_brown_block"></div>
				<div class="recipes_single_ingredients"><?php the_field('ingredients'); ?></div>
			</div>
		</div>
		<div class="column large-1">&nbsp;</div>
		<div class="column large-5">
			<div class="recipes_single_recipe_image_container text-center">
				<div class="recipes_single_recipe_image">
<?php
$recipe_image = get_field('inset_image');
if( !empty($recipe_image) ) {
	$recipe_image_url =  $recipe_image['url'];	
} else {
	$recipe_image_url = get_template_directory_uri()."/assets/img/products/product_image_not_found.png";
} ?>
					<img src="<?php echo $recipe_image_url; ?>">
				</div>
			</div>
			<div class="recipe_sharing">
				<div class="row">
					<a class="column small-2 small-offset-1 addthis_button_facebook addthis_button_preferred_2 at300b">
						<i class="fa fa-facebook"></i>
						<div class="social_sharing_label">Share</div>
					</a>
					<a class="column small-2 addthis_button_twitter addthis_button_preferred_3 at300b">
						<i class="fa fa-twitter"></i>
						<div class="social_sharing_label">Tweet</div>
					</a>
					<a class="column small-2" onclick="javascript:return addthis_sendto('pinterest_share');">
						<i class="fa fa-pinterest-p"></i>
						<div class="social_sharing_label">Pin</div>
					</a>
					<a class="column small-2 addthis_button_email addthis_button_preferred_3 at300b">
						<i class="fa fa-envelope"></i>
						<div class="social_sharing_label">Email</div>
					</a>
					<a class="column small-2 end" onclick="window.print(); return false;">
						<i class="fa fa-print"></i>
						<div class="social_sharing_label">Print</div>
						<?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
					</a>
				</div>
			</div>
			<div class="recipes_single_directions_container">
				<h3 class="section_label">DIRECTIONS:</h3>
				<div class="section_label_light_brown_block"></div>
				<div class="recipes_single_ingredients"><?php the_field('directions'); ?></div>
			</div>
<?php if( get_field('cooking_tip') ){ ?>
			<div class="pairing_tip">
				<div class="pairing_tip_header">
					<h3 class="section_label">PAIRING TIP</h3>
					<div class="section_label_light_brown_block"></div>
					<div class="pairing_tip_content"><?php the_field('cooking_tip'); ?></div>
				</div>
			</div>
<?php } ?>
		</div>
	</div>
	<div class="recipes_single_comments">
		<div class="row text-center">
			<h3 class="comments_centered_label">COMMENTS</h3>
		</div>
		<div class="row">
			<div class="column small-12">
			<?php comments_template(); ?>
			<?php comment_form(); ?>
			</div>
		</div>
	</div>
	<div class="try_these_recipes_container repeating_stripe_bg">
		<div class="try_these_recipes row text-center">
			<div class="try_these_recipes_white_line"></div>
			<h3>TRY THESE RECIPES</h3>
		</div>
		<?php get_template_part( 'parts/try', 'these-recipes' ); ?>
	</div>
<?php endwhile;?>
<div class="rw-js-container">
    <script type="text/javascript">
        function RW_Async_Init() {
            RW.init("dbbf3566105fb837c2c2a93689f719ed");
            RW.render();
        }

        if (typeof(RW) == "undefined") {
            (function() {
                var rw = document.createElement("script");
                rw.type = "text/javascript";
                rw.async = true;
                rw.src = "//js.rating-widget.com/external.min.js?v=267&t=js";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(rw, s);
            })();
        }
    </script>
</div>
<?php get_footer(); ?>