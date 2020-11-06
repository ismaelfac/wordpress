<?php
/**
 * Field: Terms & Conditions
 *
 * @since 	3.0.1
 * @package RH/modern
 */

$terms_note     = get_option( 'inspiry_submit_property_terms_text' );
$acceptance     = get_option( 'inspiry_submit_property_terms_require', true );
$terms_class    = ( empty( $acceptance ) ) ? '' : 'required';
$terms_page_id  = get_option( 'inspiry_submit_property_terms_page' );

if ( ! empty( $terms_page_id ) ) {
	// Terms & conditions page link building.
	$terms_page_url = get_permalink( $terms_page_id );
	$head = '<a href="' . esc_url( $terms_page_url ) . '" target="_blank">';
	$tail = '</a>';
	$terms_note = str_replace( array( '{', '}' ), array( $head, $tail ), $terms_note );
}

?>
<div class="rh_form__item rh_form--1-column rh_form--columnAlign featured-field-wrapper">
	<div class="rh_checkbox rh_checkbox__featured">
		<label for="terms">
			<span class="rh_checkbox__title"><?php echo $terms_note; ?></span>
			<input id="terms" name="terms" type="checkbox" class="<?php echo esc_attr( $terms_class ); ?>" title="<?php esc_html_e( 'Please check this option.', 'framework' ); ?>"
			<?php
			if ( inspiry_is_edit_property() ) {
				global $post_meta_data;
				if ( isset( $post_meta_data['REAL_HOMES_terms_conditions'] ) && ( 1 == $post_meta_data['REAL_HOMES_terms_conditions'][0] ) ) {
					echo 'checked ';
				}
			}
			echo esc_attr( $terms_class );
			?> />
			<span class="rh_checkbox__indicator"></span>
			<span id="terms-error" class="error hide"><?php esc_html_e( 'Please check this option.', 'framework' ); ?></span>
		</label>
	</div>
	<!-- /.rh_checkbox -->
</div>
<!-- /.rh_form__item -->
