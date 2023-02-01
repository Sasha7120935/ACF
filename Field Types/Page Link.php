<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testPageLink = get_field( 'test_page_link' );
if ( $testPageLink ): ?>
	<a href="<?php echo $testPageLink ?>">Click</a>
<?php else:
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif;
get_footer();
