<?php
/**
 * The home page template
 */
get_header();
get_template_part( 'parts/homepage', 'slider' );
get_template_part( 'parts/homepage', 'products' );
get_template_part( 'parts/homepage', 'two-up' );
get_template_part( 'parts/homepage', 'recipes' );
get_footer();
?>