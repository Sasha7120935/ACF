<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
//$flexibleContent = get_field( 'test_flexible_content' );
//$columnSection   = get_field( 'section_column_test' );
//$repeater        = get_field( 'test_columns' );

if ( have_rows( 'test_flexible_content' ) ):
	while ( have_rows( 'test_flexible_content' ) ) : the_row();
		if ( get_row_layout() == 'section_column_test' ):
			$columns = get_sub_field( 'test_columns' );
			?>
			<div class="row">
				<?php foreach ( $columns as $column ) : ?>
					<div class="col-lg-4">
						<h1><?php echo $column['test_column'] ?></h1>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif;
	endwhile;
else:
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif;
get_footer();