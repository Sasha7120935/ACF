<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testOembed = get_field( 'test_oembed' );
if ( $testOembed )  :
	echo '<div>' . $testOembed . '</div>';
else :
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif;
get_footer();
