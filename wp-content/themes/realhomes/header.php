<?php
/**
 * Theme Header
 *
 * @since 1.0.0
 * @package RH
 */

?>
<!doctype html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="format-detection" content="telephone=no">

    <?php
    if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
	    $favicon = get_option( 'theme_favicon' );
	    if ( ! empty( $favicon ) ) {
		    ?><link rel="shortcut icon" href="<?php echo esc_url( $favicon ); ?>" /><?php
	    }
    }

    if ( is_singular() && pings_open( get_queried_object() ) ) {
	    ?><link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php
    }

    wp_head();
    ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- Global site tag (gtag.js) - Google Ads: 792837441 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-792837441"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-792837441');
</script>
</head>
<body <?php body_class(); ?>>

    <?php
    $rh_design_variation = INSPIRY_DESIGN_VARIATION;

    if ( 'classic' === INSPIRY_DESIGN_VARIATION ) {
        get_template_part( 'assets/' . $rh_design_variation . '/partials/header/header' );
    } elseif ( 'modern' === INSPIRY_DESIGN_VARIATION ) {
        get_template_part( 'assets/' . $rh_design_variation . '/partials/header/header' );
    }
    ?>
