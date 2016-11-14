<?php
/**
 * The Corporate Responsibility template
 */
get_header(); ?>
<section class="page-cr">
<?php
get_template_part( 'parts/cr', 'hero' );
get_template_part( 'parts/cr', 'content' );
?>
</section>
<?php get_footer(); ?>