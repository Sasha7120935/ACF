<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testRadio = get_field( 'test_radio' );
if ( ! empty( $testRadio ) ) {
	switch ( $testRadio ) {
		case 'red':
			echo $testRadio . '-' . __( 'Red', '' );
			break;
		case 'grey':
			echo $testRadio . '-' . __( 'Grey', '' );
			break;
		case 'black':
			echo $testRadio . '-' . __( 'Black', '' );
			break;
		default:
			echo __( 'Not', '' );
	};
}
get_footer();
