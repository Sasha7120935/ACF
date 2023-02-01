<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testFile    = get_field( 'test_file' );

if ( $testFile )  :
	$url = $testFile['url'];
	$title   = $testFile['title'];
	$caption = $testFile['caption'];
	$icon    = $testFile['icon'];

	if ( $testFile['type'] == 'image' ) {
		$icon = $testFile['sizes']['thumbnail'];
	}

	if ( $caption ): ?>
		<div class="wp-caption">
	<?php endif; ?>

	<a href="<?php echo esc_attr( $url ); ?>" title="<?php echo esc_attr( $title ); ?>">
		<img src="<?php echo esc_attr( $icon ); ?>"/>
		<span><?php echo esc_html( $title ); ?></span>
	</a>
	<?php

	if ( $caption ): ?>
		<p class="wp-caption-text"><?php echo esc_html( $caption ); ?></p>
		</div>
	<?php endif;
else :
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif;
get_footer();