<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
//$group     = get_field( 'test_group' );
//$subField  = get_field( 'sub_test_group_1' );
//$subField2 = get_field( 'sub_test_group_2' ); ?>
<div>
	<?php
	if ( have_rows( 'test_group' ) ):
		while ( have_rows( 'test_group' ) ) : the_row(); ?>
            <div>
				<?php echo esc_html( get_sub_field( 'sub_test_group_1' ) ); ?>
            </div>
            <div>
				<?php echo esc_html( get_sub_field( 'sub_test_group_2' ) ); ?>
            </div>
		<?php endwhile;
	else:
		echo '<p>' . __( 'Not', '' ) . '</p>';
	endif; ?>
</div>