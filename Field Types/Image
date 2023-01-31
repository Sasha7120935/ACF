<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$testImage = get_field( 'test_image' );
?>
    <div>
		<?php
		if ( $testImage )  :
			$url = $testImage['url'];
			$title = $testImage['title'];
			$alt = $testImage['alt'];
			$caption = $testImage['caption'];


			$size   = 'thumbnail';
			$thumb  = $testImage['sizes'][ $size ];
			$width  = $testImage['sizes'][ $size . '-width' ];
			$height = $testImage['sizes'][ $size . '-height' ];


			if ( $caption ): ?>
                <div class="wp-caption">
			<?php endif; ?>

            <a href="<?php echo esc_url( $url ); ?>" title="<?php echo esc_attr( $title ); ?>">
                <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $alt ); ?>"/>
            </a>
			<?php

			if ( $caption ): ?>
                <p class="wp-caption-text"><?php echo esc_html( $caption ); ?></p>
                </div>
			<?php endif;
		else :
			echo '<p>' . __( 'Not', '' ) . '</p>';
        endif; ?>
    </div>
<?php

