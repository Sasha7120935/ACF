<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testRadio = get_field( 'test_radio' );
?>
    <div>
		<?php
		switch ( $testRadio ) {
			case 'red':
				echo $testRadio . '-' . 'Red';
				break;
			case 'grey':
				echo $testRadio . '-' . 'Grey';
				break;
			case 'black':
				echo $testRadio . '-' . 'Black';
				break;
		};
		?>
    </div>
<?php
