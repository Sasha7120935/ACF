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
				echo $testSelect . '-' . 'Red';
				break;
			case 'grey':
				echo $testSelect . '-' . 'Grey';
				break;
			case 'black':
				echo $testSelect . '-' . 'Black';
				break;
		};
		?>
	</div>
	<?php
}
get_footer();
