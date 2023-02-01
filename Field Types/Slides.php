<?php
get_header();
if ( ! is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
	return;
}
if ( have_rows( 'slides' ) ): ?>
	<div class="swiper">
		<div class="swiper-wrapper">
			<?php while ( have_rows( 'slides' ) ) : the_row(); ?>
				<div class="swiper-slide"><?php $image = get_sub_field( 'swiper_slide' ); ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
				</div>
			<?php endwhile; ?>
		</div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>
	</div>
<?php
else:
	echo '<p>' . __( 'Not', '' ) . '</p>';
endif; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<style>
    .swiper {
        width: 600px;
        height: 300px;
    }
</style>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'vertical',
        loop: true,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
</script>
<?php get_footer(); ?>
