<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testRange    = get_field( 'test_range' );
$testTextAria = get_field( 'test_text_area' );
?>
    <div>
		<?php
		if ( $testTextAria )  : ?>
			<?php echo '<h2>' . esc_html( $testTextAria ) . '</h2> '; ?>
            <style type="text/css">
                h2 {
                    font-size: <?php echo $testRange; ?>px;
                }
            </style>
        <?php else :
			echo '<p>' . __( 'Not', '' ) . '</p>';
		endif; ?>
    </div>
<?php
