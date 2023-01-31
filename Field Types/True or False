<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$test_true_false = get_field( 'test_true_false' );
$testColor       = get_field( 'test_color' );
?>
<?php if ( ! empty( $test_true_false ) && get_the_post_thumbnail() ) : ?>
    <div style="color:<?php echo $testColor ?>">
        <div>
            <div>
                <h1><?php the_title(); ?></h1>
            </div>
			<?php echo get_the_post_thumbnail(); ?>
        </div>
    </div>
<?php else : ?>
    <div>
        <div>
            <h1><?php the_title(); ?></h1>
        </div>
    </div>
<?php endif; ?>
<?php
