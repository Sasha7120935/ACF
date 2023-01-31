<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testText = get_field( 'test_text' );
?>
    <div>
		<?php
		if ( $testText )  :
			echo '<h1>' . esc_html( $testText ) . '</h1> ' ?>
		<?php else :
			echo '<p>' . __( 'Not', '' ) . '</p>';
		endif;
		?>
    </div>
<?php
