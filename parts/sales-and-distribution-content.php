<div class="black-bg white text-center">
<!-- 	<p>Retailers interested in carrying Saag’s products can find detailed product information in downloadable spec sheets below.<br>For any inquiries, email our sales department at <a class="white" href="mailto:saagssales@saags.com"><strong>saagssales@saags.com</strong></a> or reach us by phone:</p>
	<p>Mark Cheng, Retail Sales Manager: (510) 678-3403 x401<br>Megan O’Rourke, Food Service Sales Manager: (510) 678-3403 x410</p> -->
	<img class="hide-for-large-up" style="margin: 0 auto;" src="<?php echo get_template_directory_uri(); ?>/assets/img/sales/copy-mobile.jpg">
	<img class="show-for-large-up" style="margin: 0 auto;" src="<?php echo get_template_directory_uri(); ?>/assets/img/sales/copy.jpg">
</div>
<div class="white-bg">
	<div class="row text-center">
		<a class="hide-for-large-up download-fact-sheet rounded-corners light-grey-bg black" href="<?php echo get_template_directory_uri(); ?>/assets/files/Saags-AllProducts.pdf"><div class="download-link-icon"></div>DOWNLOAD FULL PRODUCT LIST</a>
		<a class="show-for-large-up download-fact-sheet right rounded-corners light-grey-bg black" href="<?php echo get_template_directory_uri(); ?>/assets/files/Saags-AllProducts.pdf"><div class="download-link-icon"></div>DOWNLOAD FULL PRODUCT LIST</a>
	</div>
	<div class="sales_content">
		<div class="row">
			<div class="column small-12 large-6">
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'usda-choice-deli-beef',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>USDA CHOICE DELI BEEF</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'chicken-and-turkey',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>CHICKEN AND TURKEY</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'luncheon-meats',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>LUNCHEON MEATS</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'natural-abf-chicken-bulk',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>NATURAL ABF CHICKEN BULK </h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'skinless-sausages',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>SKINLESS SAUSAGES</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'dry-cured-sausages',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>DRY CURED SAUSAGES</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'uncured-sliced',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>UNCURED SLICED</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'bistro-sausages-retail-pack',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>BISTRO SAUSAGES-RETAIL PACK</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'uncured-all-natural-specialties',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>UNCURED ALL NATURAL SPECIALTIES</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
			</div>
			<div class="column small-12 large-6">
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'pork-and-ham',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>PORK AND HAM</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'breakfast-meats',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>BREAKFAST MEATS</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'pates',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>PATES</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'entree-sausages',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>ENTREE SAUSAGES</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'portion-pack-meats',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>PORTION PACK MEATS</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'family-pack',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>FAMILY PACK</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'flex-pack-sliced-deli-meats',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>FLEX PACK SLICED DELI MEATS</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
<?php $args = array(
		'post_type' => 'products_spec_sheets',
		'orderby'  => 'title',
		'order'  => 'ASC',
		'posts_per_page' => -1,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_spec_sheet_category',
				'field'    => 'slug',
				'terms'    => 'natural-abf-chicken-sausage-retail-pack',
			),
		),
	);
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) { ?>
				<div class="row">
					<div class="column small-12 sales_section faq-grey-bg">
						<div class="sales_section_heading">
							<h2>NATURAL ABF CHICKEN SAUSAGE - RETAIL PACK</h2>
						</div>
						<a class="view_product_list_toggle"><span>View Product List</span><span class="down-arrow"></span></a>
						<ul class="view_product_list">
							<?php
		while ( $the_query->have_posts() ) {
			$the_query->the_post();
			$pdf_array = get_field('products_spec_sheet_pdf');
			$pdf_link = $pdf_array['url'];
			echo '<li class="product_spec_sheet"><div class="product_spec_sheet_title">'.get_the_title().'</div><a target="_blank" class="download-fact-sheet right rounded-corners" href="'.$pdf_link.'"><div class="download-link-icon"></div>FACT SHEET</a></li>';
		} ?>
						</ul>
					</div>
				</div>
<?php }
	wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$('.product_spec_sheet_title').click(function(){
		var url = $(this).parents('li.product_spec_sheet').find('a').attr('href');
		var win = window.open(url, '_blank');
		win.focus();
	});
});
</script>