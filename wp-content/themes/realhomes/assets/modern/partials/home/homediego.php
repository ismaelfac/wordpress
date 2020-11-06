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
/* Theme Home Page Module */
$theme_homepage_module  = get_option( 'theme_homepage_module' );

switch ( $theme_homepage_module ) {
	case 'properties-slider':
		get_template_part( 'assets/modern/partials/home/slider/slider', 'property' );
		break;

	case 'properties-map':
	    get_template_part( 'assets/modern/partials/home/slider/slider', 'map' );
	    break;

	case 'slides-slider':
	    get_template_part( 'assets/modern/partials/home/slider/slider', 'slides' );
	    break;

	case 'revolution-slider':
	    $rev_slider_alias = trim( get_option( 'theme_rev_alias' ) );
	    if ( function_exists( 'putRevSlider' ) && ( ! empty( $rev_slider_alias ) ) ) {
	        putRevSlider( $rev_slider_alias );
	    } else {
	        get_template_part( 'assets/modern/partials/banner/banner', 'header' );
	    }
	    break;

	default:
		get_template_part( 'assets/modern/partials/banner/banner', 'header' );
	    break;
}
echo do_shortcode('[index_inmuebles]');

get_template_part( 'assets/modern/partials/home/section/section', 'agents' );
get_template_part( 'assets/modern/partials/home/section/section', 'partners' );

get_footer();

