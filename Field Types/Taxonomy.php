<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$test_taxonomy = get_field( 'test_taxonomy' );
if ( $test_taxonomy ): ?>
	<h2><?php echo esc_html( $test_taxonomy->name ); ?></h2>
	<p><?php echo esc_html( $test_taxonomy->description ); ?></p>
<?php else:
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif;
get_footer();