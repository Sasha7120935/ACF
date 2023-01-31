<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$test_post_object = get_field( 'test_post_object' );
if ( $test_post_object ):
	foreach ( $test_post_object as $value ) : ?>
        <ul>
            <li>
                <a href="<?php echo esc_url( $value->ID ); ?>"><?php echo esc_html( $value->post_title ); ?></a>
            </li>
        </ul>
	<?php endforeach; ?>
<?php else:
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif; ?>
