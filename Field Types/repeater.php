<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
if ( have_rows( 'repeater' ) ):
	while ( have_rows( 'repeater' ) ) : the_row(); ?>
		<div>
			<div>
				<?php echo esc_html( get_sub_field( 'repeater-text' ) ); ?>
			</div>
			<div>
				<?php echo esc_html( get_sub_field( 'repeater-text-2' ) ); ?>
			</div>
		</div>
	<?php
	endwhile;
endif;
get_footer();
