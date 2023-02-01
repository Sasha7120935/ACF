<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testButtonGroup = get_field( 'test_button_group' );
if ( ! empty( $testSelect ) && ! empty( $testColor ) ) {
	switch ( $testButtonGroup ) {
		case 'red':
			echo $testButtonGroup . '-' . __( 'Red', '' );
			break;
		case 'grey':
			echo $testButtonGroup . '-' . __( 'Grey', '' );
			break;
		case 'black':
			echo $testButtonGroup . '-' . __( 'Black', '' );
			break;
		default:
			echo __( 'Not', '' );
	};
}
get_footer();
