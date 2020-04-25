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
$id = 'hero-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'hero';
if ( ! empty( $block['className'] ) ) {
	$className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$className .= ' align' . $block['align'];
}


$content = get_field( 'hero_content' );

// Load values and assign defaults.
$hero_kicker           = $content['kicker'];
$hero_title            = $content['title'];
$hero_text             = $content['text'];
$hero_primary_button   = $content['primary_button'];
$hero_secondary_button = $content['secondary_button'];
$hero_image            = get_field( 'hero_image' );

?>



<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $className ); ?>">
	<div><?php echo sanitize_text_field( $hero_kicker ); ?></div>
	<div><?php echo sanitize_text_field( $hero_title ); ?></div>
	<div><?php echo sanitize_text_field( $hero_text ); ?></div>
<div>
<?php if ( $hero_image ) : ?>
		<?php echo wp_get_attachment_image( $hero_image, 'medium' ); ?>
	<?php else : ?>
		<img src="https://via.placeholder.com/300x300/f5f5f5/555d66?text=%20">
	<?php endif; ?>
</div>

<div>
