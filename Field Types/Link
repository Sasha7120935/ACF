<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$test_link = get_field( 'test_link' );
?>
<div>
	<?php
	if ( $test_link ):
		$link_url = $test_link['url'];
		$link_title = $test_link['title'];
		$link_target = $test_link['target'] ? $test_link['target'] : '_self';
		?>
        <a class="button" href="<?php echo esc_url( $link_url ); ?>"
           target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
	<?php else:
		echo '<p>' . __( 'Not', '' ) . '</p>';
	endif; ?>
</div>
