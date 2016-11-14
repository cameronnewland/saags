<?php
/**
 * The homepage slider template
 */
$args = array(
	'posts_per_page' => -1,
	'post_type' => 'homepage_sliders',
	'orderby' => 'menu_order',
	'order' => 'ASC',
);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {?>
	<section class="homepage_slider_container hide-for-large-up">
<?php while ( $the_query->have_posts() ) {
		$the_query->the_post();
		if( get_field('mobile_slider_image') ){
		?>
		<div>
			<?php if ( get_field('slider_link') && get_field('slider_link')  != '' ){ ?><a href="<?php the_field('slider_link'); ?>" <?php } else { ?><div <?php } ?>class="homepage_slider relative-block" style="background-image:url(<?php the_field('mobile_slider_image'); ?>);background-size:cover;">
				<div class="absolute-block flex-block">
					<div class="universlightcondensed homepage_slider_copy"><?php the_title(); ?></div>
				</div>
			<?php if ( get_field('slider_link') && get_field('slider_link')  != '' ){ ?></a><?php } else { ?></div><?php } ?>
		</div>
<?php 	}
	} ?>
	</section>
<?php } ?>
<div class="clearfix"></div>

<?php
if ( $the_query->have_posts() ) {?>
	<section class="homepage_slider_container show-for-large-up">
<?php while ( $the_query->have_posts() ) {
		$the_query->the_post();
		if( get_field('slider_image') ){ ?>
		<div>
			<?php if ( get_field('slider_link') && get_field('slider_link')  != '' ){ ?><a href="<?php the_field('slider_link'); ?>" <?php } else { ?><div <?php } ?>class="homepage_slider relative-block" style="background-image:url(<?php the_field('slider_image'); ?>);background-size:cover;">
				<div class="absolute-block flex-block">
					<div class="universlightcondensed homepage_slider_copy"><?php the_title(); ?></div>
				</div>
			<?php if ( get_field('slider_link') && get_field('slider_link')  != '' ){ ?></a><?php } else { ?></div><?php } ?>
		</div>
<?php 	}
	} ?>
	</section>
<?php } ?>
<div class="clearfix"></div>