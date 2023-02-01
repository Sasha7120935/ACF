<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$test_user = get_field( 'test_user' ); ?>
<?php

// first array User
if ( $test_user ):?>
    <ul class="volunteers-list">
		<?php foreach ( $test_user as $user ): ?>
            <li>
                <a href="<?php echo esc_url( $test_user['user_email'] ); ?>"><?php echo $user["display_name"] ?></a>
            </li>
		<?php endforeach; ?>
    </ul>
<?php endif;

// second one User
if ( $test_user ): ?>
    <div class="author-box">
        <img src="<?php echo esc_attr( $test_user['user_avatar'] ); ?>" alt="author-avatar"/>
        <a href="<?php echo esc_url( $test_user['user_email'] ); ?>">
            <h3><?php echo esc_html( $test_user['display_name'] ); ?></h3>
        </a>
        <h3><?php echo esc_html( $test_user['user_lastname'] ); ?></h3>
        <h3><?php echo esc_html( $test_user['user_firstname'] ); ?></h3>
		<?php if ( $test_user['user_description'] ): ?>
            <p><?php echo $test_user['user_description']; ?></p>
		<?php endif; ?>
    </div>
<?php endif;