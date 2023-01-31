<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testCheckbox = get_field( 'test_checkbox' );
?>
    <div>
		<?php
		if ( $testCheckbox ): ?>
            <ul>
				<?php foreach ( $testCheckbox as $checkbox ): ?>
                    <li><?php echo $checkbox; ?></li>
				<?php endforeach; ?>
            </ul>
		<?php endif; ?>
    </div>
<?php
