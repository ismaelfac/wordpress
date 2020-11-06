<?php
/**
 * Single: Similar Section Property
 *
 * @since 2.7.0
 * @package RH/classic
 */

$display_similar_properties = get_option( 'theme_display_similar_properties' );
if ( 'true' == $display_similar_properties ) {
	global $post;
	$similar_properties_args = array(
		'post_type'         => 'property',
		'posts_per_page'    => 3,
		'post__not_in'      => array( $post->ID ),
		'post_parent__not_in' => array( $post->ID ),    // to avoid child posts from appearing in similar properties.
	);

	$tax_query = array();

	$inspiry_similar_properties = get_option( 'inspiry_similar_properties', array( 'property-type', 'property-city' ) );

	if ( ! empty( $inspiry_similar_properties ) && is_array( $inspiry_similar_properties ) ) {

		$similar_properties_count = count( $inspiry_similar_properties );

		for ( $index = 0; $index < $similar_properties_count; $index++ ) {
			/* Property Taxonomies array */
			$property_terms = get_the_terms( $post->ID, $inspiry_similar_properties[ $index ] );
			if ( ! empty( $property_terms ) && is_array( $property_terms ) ) {
				$terms_array = array();
				foreach ( $property_terms as $property_term ) {
					$terms_array[] = $property_term->term_id;
				}
				$tax_query[] = array(
					'taxonomy'  => $inspiry_similar_properties[ $index ],
					'field'     => 'id',
					'terms'     => $terms_array,
				);
			}
		}
	}

	$tax_count = count( $tax_query );   // Count number of taxonomies.
	if ( $tax_count > 1 ) {
		$tax_query['relation'] = 'OR';  // Add OR relation if more than one.
	}
	if ( $tax_count > 0 ) {
		$similar_properties_args['tax_query'] = $tax_query;   // Add taxonomies query.
	}

	/* Sort Properties Based on Theme Option Selection */
	$similar_properties_sorty_by = get_option( 'inspiry_similar_properties_sorty_by' );
	if ( ! empty( $similar_properties_sorty_by ) ) {
		if ( 'low-to-high' == $similar_properties_sorty_by ) {
			$similar_properties_args['orderby']   = 'meta_value_num';
			$similar_properties_args['meta_key']  = 'REAL_HOMES_property_price';
			$similar_properties_args['order']     = 'ASC';
		} elseif ( 'high-to-low' == $similar_properties_sorty_by ) {
			$similar_properties_args['orderby']   = 'meta_value_num';
			$similar_properties_args['meta_key']  = 'REAL_HOMES_property_price';
			$similar_properties_args['order']     = 'DESC';
		} elseif ( 'random' == $similar_properties_sorty_by ) {
			$similar_properties_args['orderby']   = 'rand';
		}
	}

	$similar_properties_query = new WP_Query( $similar_properties_args );

	if ( $similar_properties_query->have_posts() ) :
		?>
		<section class="listing-layout property-grid">
			<div class="list-container clearfix">
				<?php
				$similar_properties_title = get_option( 'theme_similar_properties_title' );
				if ( ! empty( $similar_properties_title ) ) {
					?><h3><?php echo esc_html( $similar_properties_title ); ?></h3><?php
				}
				while ( $similar_properties_query->have_posts() ) :
					$similar_properties_query->the_post();

					/* Display Property for Grid */
					get_template_part( 'assets/classic/partials/property/views/view', 'similar-section-property' );

				endwhile;
				wp_reset_query();
				?>
			</div>
		</section>
		<?php
	endif;
}
?>
