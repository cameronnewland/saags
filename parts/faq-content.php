<div class="faq_content">
	<div class="row">
		<div class="column small-12 large-4 large-offset-2">
			<div class="row">
				<div class="column small-12 faq_section faq-grey-bg">
					<div class="faq_section_heading">
						<h2>General</h2>
					</div>
<?php

$args = array(
	'post_type' => 'faq_entries',
	'orderby'  => 'menu_order',
	'order'  => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'faq_category',
			'field'    => 'slug',
			'terms'    => 'general',
		),
	),
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_field('question') . '<div class="answer">'.get_field('answer').'</div></li>';
	}
	echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>
				</div>
			</div>
			<div class="row">
				<div class="column small-12 faq_section faq-grey-bg">
					<div class="faq_section_heading">
						<h2>Deli Meats</h2>
					</div>
<?php

$args = array(
	'post_type' => 'faq_entries',
	'orderby'  => 'menu_order',
	'order'  => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'faq_category',
			'field'    => 'slug',
			'terms'    => 'deli-meats',
		),
	),
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_field('question') . '<div class="answer">'.get_field('answer').'</div></li>';
	}
	echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>
				</div>
			</div>
			<div class="row">
				<div class="column small-12 faq_section faq-grey-bg">
					<div class="faq_section_heading">
						<h2>Turkey Products</h2>
					</div>
<?php

$args = array(
	'post_type' => 'faq_entries',
	'orderby'  => 'menu_order',
	'order'  => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'faq_category',
			'field'    => 'slug',
			'terms'    => 'turkey-products',
		),
	),
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_field('question') . '<div class="answer">'.get_field('answer').'</div></li>';
	}
	echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>
				</div>
			</div>
			<div class="row">
				<div class="column small-12 faq_section faq-grey-bg">
					<div class="faq_section_heading">
						<h2>Sausage Products</h2>
					</div>
<?php

$args = array(
	'post_type' => 'faq_entries',
	'orderby'  => 'menu_order',
	'order'  => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'faq_category',
			'field'    => 'slug',
			'terms'    => 'sausage-products',
		),
	),
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_field('question') . '<div class="answer">'.get_field('answer').'</div></li>';
	}
	echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>
				</div>
			</div>
		</div>
		<div class="column small-12 large-4 end">
			<div class="row">
				<div class="column small-12 faq_section faq-grey-bg">
					<div class="faq_section_heading">
						<h2>Saag's Naturals</h2>
					</div>
<?php

$args = array(
	'post_type' => 'faq_entries',
	'orderby'  => 'menu_order',
	'order'  => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'faq_category',
			'field'    => 'slug',
			'terms'    => 'saags-naturals',
		),
	),
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_field('question') . '<div class="answer">'.get_field('answer').'</div></li>';
	}
	echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>
				</div>
			</div>
			<div class="row">
				<div class="column small-12 faq_section faq-grey-bg">
					<div class="faq_section_heading">
						<h2>Beef Products</h2>
					</div>
<?php

$args = array(
	'post_type' => 'faq_entries',
	'orderby'  => 'menu_order',
	'order'  => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'faq_category',
			'field'    => 'slug',
			'terms'    => 'beef-products',
		),
	),
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_field('question') . '<div class="answer">'.get_field('answer').'</div></li>';
	}
	echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>
				</div>
			</div>
			<div class="row">
				<div class="column small-12 faq_section faq-grey-bg">
					<div class="faq_section_heading">
						<h2>Ham Products</h2>
					</div>
<?php

$args = array(
	'post_type' => 'faq_entries',
	'orderby'  => 'menu_order',
	'order'  => 'ASC',
	'tax_query' => array(
		array(
			'taxonomy' => 'faq_category',
			'field'    => 'slug',
			'terms'    => 'ham-products',
		),
	),
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_field('question') . '<div class="answer">'.get_field('answer').'</div></li>';
	}
	echo '</ul>';
} else {
	// no posts found
}
/* Restore original Post Data */
wp_reset_postdata();

?>
				</div>
		</div>
	</div>
</div>