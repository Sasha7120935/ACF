<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testGallery = get_field( 'test_gallery' );
$size        = 'medium'; // or Full,Thumbnail,Large,Full
if ( $testGallery )  : ?>
	<ul>
		<?php foreach ( $testGallery as $gallery ): ?>
			<li>
				<?php echo wp_get_attachment_image( $gallery, $size ); ?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php
else :
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif;
get_footer();
