<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$block_id = 'hero-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$block_class = 'hero';
if ( ! empty( $block['className'] ) ) {
	$block_class .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$block_class .= ' align' . $block['align'];
}


$content               = get_field( 'hero_content' );
$hero_kicker           = get_field( 'hero_content' )['kicker'];
$hero_title            = get_field( 'hero_content' )['title'];
$hero_text             = get_field( 'hero_content' )['text'];
$hero_primary_button   = get_field( 'hero_content' )['primaryButton'];
$hero_secondary_button = get_field( 'hero_content' )['secondaryButton'];
$hero_image            = get_field( 'hero_image' );
$placeholder           = '<img src="https://via.placeholder.com/300x300/f5f5f5/555d66?text=%20">';

?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="acf-block acf-block__hero acf-block__dual <?php echo esc_attr( $block_class ); ?>">


	<div>
		<?php if ( $hero_image ) : ?>
		<div class="image"><?php echo wp_get_attachment_image( $hero_image, 'medium' ); ?></div>

		<?php else : ?>
		<div class="image"><img src="https://via.placeholder.com/300x300/f5f5f5/555d66?text=%20" /></div>
		<?php endif; ?>
	</div>

	<div class="content">

		<div class="kicker">
		<?php if ( $hero_kicker ) : ?>
			<?php echo $hero_kicker; ?>
		<?php else : ?>
			Aenean imperdiet
		<?php endif; ?>
		</div>

		<h1 class="title">
		<?php if ( $hero_title ) : ?>
			<?php echo $hero_title; ?>
		<?php else : ?>
			In enim justo, rhoncus ut
		<?php endif; ?>
		</h1>

		<div class="text">
		<?php if ( $hero_text ) : ?>
			<?php echo $hero_text; ?>
		<?php else : ?>
			<p>Lorem ipsum dolor sit amet, <strong>consectetuer adipiscing</strong> elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		<?php endif; ?>
		</div>


		<div class="buttons">
		<?php if ( $hero_primary_button ) : ?>
			<a class="btn" href="<?php echo $hero_primary_button['url']; ?>"><?php echo $hero_primary_button['title']; ?></a>
		<?php endif; ?>

		<?php if ( $hero_secondary_button ) : ?>
			<a class="btn" href="<?php echo $hero_secondary_button['url']; ?>"><?php echo $hero_secondary_button['title']; ?></a>
		<?php endif; ?>
		</div>

	</div>

</div>

