<section class="page-newsroom">
<?php
$args = array(
	'post_type' => 'newsroom_items',
	'tax_query' => array(
		array(
			'taxonomy' => 'news_type',
			'field'    => 'slug',
			'terms'    => 'featured-newsroom-post',
		),
	),
	'posts_per_page' => 1,
);
// The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) { ?>
<div class="newsroom_two_up">
	<div class="row">
		<div class="small-12">
			<div class="row">
<?php
	while ( $the_query->have_posts() ) {
		$the_query->the_post(); ?>
				<a href="<?php the_field('link_url'); ?>" class="column small-12 newsroom_featured_post">
					<div class="row">
						<div class="column small-5">
<?php if( get_field('featured_post_image') ):
$attachment_id = get_field('featured_post_image');
$size = "full"; // (thumbnail, medium, large, full or custom size)
$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
							<img class="newsroom_featured_post_image" src="<?php echo $image[0]; ?>" />
	<?php endif; ?>
						</div>
						<div class="column small-7 end">
							<h3 class="newsroom_featured_post_title"><?php the_title(); ?></h3>
							<p class="newsroom_featured_post_excerpt"><?php the_field('featured_post_excerpt'); ?></p>
	<?php if( get_field('featured_post_news_source_logo') ): ?>
							<img class="featured_post_news_source_logo" src="<?php the_field('featured_post_news_source_logo'); ?>" />
	<?php endif; ?>
						</div>
					</div>
				</a>
<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php wp_reset_postdata(); 
} ?>
<div class="newsroom_three_up">
	<div class="row" data-equalizer data-equalizer-mq="large-up">
<?php
$newsroom_cats = array('press-releases','news-articles','blog-posts');
foreach( $newsroom_cats as $cat ){ ?>
	<?php
	$args = array(
		'post_type' => 'newsroom_items',
		'tax_query' => array(
			array(
				'taxonomy' => 'news_type',
				'field'    => 'slug',
				'terms'    => $cat,
			),
		),
		'posts_per_page' => 4,
	);
	// The Query
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
		<div class="column small-12 large-4" data-equalizer-watch data-category-container="<?php echo $cat; ?>">
			<h2 class="newsroom_category_label"><?php $currentCat = get_term_by( 'slug', $cat, 'news_type'); echo $currentCat->name; ?></h2>
<?php 	while ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>
			<div class="newsroom_category_post">
				<a href="<?php the_field('link_url'); ?>"><?php the_title(); ?></a>
			</div>
	<?php } ?>
			<div class="light-brown-button-container">
				<a class="light-brown burford" data-category="<?php echo $cat; ?>">VIEW ALL</a>
			</div>
		</div>
<?php wp_reset_postdata(); 
	} ?>
<?php } ?>
	</div>
</div>
</section>