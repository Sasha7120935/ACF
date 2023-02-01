<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$date_time_picker = get_field( 'test_date_time_picker' );
if ( $date_time_picker ): ?>
	<p>Event starts: <?php echo $date_time_picker ?></p>
<?php else:
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif;
get_footer();