<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testTextAria = get_field( 'test_text_area' );
if ( $testTextAria )  :
	echo '<h1>' . esc_html( $testTextAria ) . '</h1> ' ?>
<?php else :
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif;
get_footer();

