<?php
/**
 * Homepage Template
 *
 * Page template for homepage.
 *
 * @since 	3.0.0
 * @package RH/modern
 */

get_header();
echo do_shortcode('[rev_slider alias="principal"]');
get_template_part( 'assets/modern/partials/banner/banner', 'header' );
echo do_shortcode('[index_inmuebles]');

get_template_part( 'assets/modern/partials/home/section/section', 'agents' );
get_template_part( 'assets/modern/partials/home/section/section', 'partners' );

get_footer();
