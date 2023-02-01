<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testWysiwyg = get_field( 'test_wysiwyg' );
if ( $testWysiwyg )  :
	echo '<div>' . wp_kses( $testWysiwyg, 'post' ) . '</div>';
else :
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif;
get_footer();
