<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testSelect = get_field( 'test_select' );
$testColor  = get_field( 'test_color' );

if ( ! empty( $testSelect ) && ! empty( $testColor ) ) {
	?>
    <div style="color:<?php echo $testColor ?>">
		<?php
		switch ( $testSelect ) {
			case 'red':
				echo $testSelect . '-' . __( 'Red', '' );
				break;
			case 'grey':
				echo $testSelect . '-' . __( 'Grey', '' );
				break;
			case 'black':
				echo $testSelect . '-' . __( 'Black', '' );
				break;
			default:
				echo __( 'Not', '' );
		};
		?>
    </div>
	<?php
}
get_footer();