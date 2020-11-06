<?php
/**
 * Page Template
 *
 * Template for simple page.
 *
 * @since 	3.0.0
 * @package RH/modern
 */

get_header();

$header_variation = "none";

if ( empty( $header_variation ) || ( 'none' === $header_variation ) ) {
	get_template_part( 'assets/modern/partials/banner/banner', 'header' );
} elseif ( ! empty( $header_variation ) && ( 'banner' === $header_variation ) ) {
	get_template_part( 'assets/modern/partials/banner/banner', 'image' );
}

?>

<br><br>

<style>
.capitalized {
	text-transform: capitalize;
}

.rh_pagination button {
	display: -webkit-box;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-pack: center;
	-webkit-justify-content: center;
	-ms-flex-pack: center;
	justify-content: center;
	-webkit-box-align: center;
	-webkit-align-items: center;
	-ms-flex-align: center;
	align-items: center;
	margin: 1rem;
	color: grey;
	background: #fff;
	border-radius: 500rem;
	width: 4rem;
	height: 4rem;
	font-size: 1.4rem;
	font-weight: 500;
	-webkit-transition: .2s all linear;
	transition: .2s all linear;
	box-shadow: 0 0 5px 2px rgba(0,0,0,.05);
}

@media (min-width: 1280px) {
	.rh_map__search #map-head {
		margin-top: -8.75rem !important;
	}
}
</style>


<?php echo do_shortcode('[listado_inmuebles]'); ?>

</div>
<!-- /.rh_page rh_page__main -->
<!-- /.rh_page rh_page__sidebar -->

</section>
<!-- /.rh_section rh_wrap rh_wrap--padding -->

<?php
get_footer();
