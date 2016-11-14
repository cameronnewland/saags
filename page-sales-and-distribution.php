<?php
/**
 * The Social page template
 */
get_header();
get_template_part( 'parts/sales', 'and-distribution-hero' );
?>
<div class="page-sales-and-distribution">
<?php get_template_part( 'parts/sales', 'and-distribution-content' );?>
</div>
<?php get_footer(); ?>
