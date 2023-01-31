<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$test_button_group = get_field( 'test_button_group' );
?>
    <div>
		<?php
		switch ( $test_button_group ) {
			case 'red':
				echo $test_button_group . '-' . 'Red';
				break;
			case 'grey':
				echo $test_button_group . '-' . 'Grey';
				break;
			case 'black':
				echo $test_button_group . '-' . 'Black';
				break;
		};
		?>
    </div>
<?php
