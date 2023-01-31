<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testEmail = get_field( 'test_email' );
?>
    <div>
		<?php
		if ( $testEmail )  : ?>
			<?php echo '<a href=" ' . esc_url($testEmail) . '">' . esc_attr__( 'Sent', ''  ) . '</a> '; ?>
		<?php else :
			echo '<p>' . __( 'Not', '' ) . '</p>';
		endif; ?>
    </div>
<?php
