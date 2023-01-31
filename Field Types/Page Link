<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$test_page_link = get_field( 'test_page_link' );
if ( $test_page_link ): ?>
    <a href="<?php echo $test_page_link ?>">Click</a>
<?php else:
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif; ?>
