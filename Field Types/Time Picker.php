<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
$today = date( 'l' );
$today = strtolower( $today );
$time  = date( 'H:i:s' );
// First option
?>
    <div>
		<?php if ( $today != 'Saturday' || 'Sunday' ) : ?>
            <div>
                <h2>Stores open now</h2>
            </div>
            <div>
                <ul id="events">
                    <li>
						<?php echo $today; ?> <?php the_field( $today . '_open_time' ); ?>
                        - <?php the_field( $today . '_close_time' ); ?>
                    </li>
                </ul>
            </div>
		<?php else:
			echo '<p>' . __( 'Store is not worked', '' ) . '</p>';
		endif; ?>
    </div>
<?php
// Second option
$posts = get_posts( array(
	'posts_per_page' => - 1,
	'post_type'      => 'store',
	'meta_query'     => array(
		'relation' => 'AND',
		array(
			'key'     => $today . '_day_open',
			'compare' => '<=',
			'value'   => $time,
			'type'    => 'TIME'
		)
	)
) );
if ( $posts ): ?>
    <div>
        <div>
            <h2>Stores open now</h2>
        </div>
        <div>
            <ul id="events">
				<?php foreach ( $posts as $p ): ?>
					<?php if ( $p->post_title != 'Saturday' || 'Sunday'  ) : ?>
                        <li>
                            <strong><?php echo $p->post_title; ?></strong>:
							<?php the_field( $today . '_day_open', $p->ID ); ?>
                            - <?php the_field( $today . '_day_close', $p->ID ); ?>
                        </li>
					<?php else:
						echo '<p>' . __( 'Store is not worked', '' ) . '</p>';
					endif; ?>
				<?php endforeach; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>