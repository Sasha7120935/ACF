<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testNumber = get_field( 'test_number' );
?>
    <div>
		<?php
		if ( $testNumber )  :
			echo '<h1>' . esc_html( $testNumber ) . '</h1> ' ?>
		<?php else :
			echo '<p>' . __( 'Not', '' ) . '</p>';
		endif;
		?>
    </div>
<?php
