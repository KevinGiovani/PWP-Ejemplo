<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'hello-elementor','hello-elementor','hello-elementor-theme-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );
// END ENQUEUE PARENT ACTION


	// Prevent Multi Submit on all WPCF7 forms
	add_action( 'wp_footer', 'prevent_cf7_multiple_emails' );

	function prevent_cf7_multiple_emails() {
	?>

	<script type="text/javascript">
	var disableSubmit = false;
	jQuery('input.wpcf7-submit[type="submit"]').click(function() {
	    jQuery(':input[type="submit"]').attr('value',"Enviando...");
	    if (disableSubmit == true) {
	        return false;
	    }
	    disableSubmit = true;
	    return true;
	})
	  
	var wpcf7Elm = document.querySelector( '.wpcf7' );
	wpcf7Elm.addEventListener( 'wpcf7_before_send_mail', function( event ) {
	    jQuery(':input[type="submit"]').attr('value',"Sent");
	    disableSubmit = false;
	}, false );

	wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
	    jQuery(':input[type="submit"]').attr('value',"Quiero más información")
	    disableSubmit = false;
	}, false );
	</script>
	<?php
} ?>