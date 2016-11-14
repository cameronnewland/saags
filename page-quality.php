<?php
/**
 * The Health page template
 */
get_header(); ?>
<section class="page-quality">
<?php get_template_part( 'parts/quality', 'hero' ); ?>
<?php get_template_part( 'parts/quality', 'content' ); ?>
</section>
<?php get_footer(); ?>