<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$date_picker = get_field( 'test_date_picker' );
$date        = DateTime::createFromFormat( 'Ymd', $date_picker );
if ( $date_picker ): ?>
	<div>
		<p>Event start date: <?php echo $date->format( 'j M Y' ); ?></p>
	</div>
	<?php $date->modify( '+1 day' ); ?>
	<div>
		<p>Event end date: <?php echo $date->format( 'j M Y' ); ?></p>
	</div>
<?php else:
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif;
get_footer();