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
$id = 'testimonial-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'testimonial';
if ( ! empty( $block['className'] ) ) {
	$className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$className .= ' align' . $block['align'];
}

global $current_screen;
$current_screen = get_current_screen();


// Load values and assign defaults.
$text   = get_field( 'testimonial' ) ?: 'Depoimento do cliente aqui...';
$author = get_field( 'name' ) ?: 'Nome do Cliente...';
$role   = get_field( 'position' ) ?: 'Cargo...';
$image  = get_field( 'image' ) ?: 150;



?>
<div id="<?php echo esc_attr( $id ); ?>" class="<?php echo esc_attr( $className ); ?> animated-section">

  <div class="testimonial-icon">
	<!--keep this -->
  </div>
  <blockquote class="testimonial-blockquote">
	<div class="testimonial-text animated-item"><?php echo $text; ?></div>

	<div class="testimonial-meta">


	  <div class="testimonial-image animated-item">
		<?php echo wp_get_attachment_image( $image, 'full' ); ?>
	  </div>

		mundo<?php var_dump( $post) ?>olar


	  <div class="testimonial-wrapper">
		<div class="testimonial-author animated-item"><?php echo $author; ?></div>
		<div class="testimonial-role animated-item"><?php echo $role; ?></div>
	  </div>
	</div>

</div>

</blockquote>
</div>
