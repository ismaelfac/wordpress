<?php
/**
 * Field: Parent Property
 *
 * @since 	3.0.0
 * @package RH/modern
 */

$post_type_object = get_post_type_object( 'property' );
if ( $post_type_object->hierarchical ) {
	$parent_properties_dropdown_args = array(
	    'post_type'        => 'property',
	    'name'             => 'property_parent_id',
	    'show_option_none' => esc_html__( '(no parent)', 'framework' ),
	    'sort_column'      => 'menu_order, post_title',
	    'echo'             => 0,
	    'class'            => 'rh_select2',
	);

	if ( inspiry_is_edit_property() ) {
	    global $edit_property_id;
	    global $target_property;
	    $parent_properties_dropdown_args['exclude_tree']	= $edit_property_id;
	    $parent_properties_dropdown_args['selected']		= $target_property->post_parent;
	}

	$parent_properties_dropdown = wp_dropdown_pages( $parent_properties_dropdown_args );

	if ( ! empty( $parent_properties_dropdown ) ) {
	    ?>
		<div class="rh_form__item rh_form--3-column rh_form--columnAlign parent-field-wrapper">
			<label for="property_parent_id"><?php esc_html_e( 'Parent Property', 'framework' ); ?></label>
			<?php echo $parent_properties_dropdown; ?>
		</div>
		<?php

	}
}

?>
