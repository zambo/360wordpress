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
$_id = 'testimonial-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$_class = 'testimonial';
if ( ! empty( $block['className'] ) ) {
	$_class .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$_class .= ' align' . $block['align'];
}


// Load values and assign defaults.
$_post_type   = get_post_type( get_the_ID() );
$_text        = get_field( 'testimonial' );
$_author      = get_field( 'name' );
$_role        = get_field( 'position' );
$_image       = get_field( 'image' );
$_company     = get_field( 'company ' );
$_placeholder = '<img style="border:1px solid #555d66" src="https://via.placeholder.com/150x150/f5f5f5/555d66?text=%20" />';
?>


<div id="<?php echo esc_attr( $_id ); ?>" class="<?php echo esc_attr( $_class ); ?> animated-section">
	<div class="testimonial-icon"><!--keep this --></div>
  <blockquote class="testimonial-blockquote">
		<div class="testimonial-text">
		<?php if ( $_text ) : ?>
			<?php echo $_text; ?>
		<?php else : ?>
			<p>Lorem ipsum dolor sit amet, <strong>consectetuer adipiscing</strong> elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		<?php endif; ?>
		</div>
	<div class="testimonial-meta">
		<div class="testimonial-image animated-item">
			<?php if ( $_image ) : ?>
				<div class="image"><?php echo wp_get_attachment_image( $_image, 'thumbnail' ); ?></div>
			<?php else : ?>
				<div class="image"><?php echo $_placeholder; ?></div>
			<?php endif; ?>
		</div>
		<div class="testimonial-wrapper">
			<div class="testimonial-author animated-item">
				<?php if ( $_author ) : ?>
					<?php echo $_author; ?>
				<?php else : ?>
					Lorem Ipsum
				<?php endif; ?>
			</div>
			<div class="testimonial-role animated-item">
				<?php if ( $_role ) : ?>
					<?php echo $_role; ?>
				<?php else : ?>
					Lorem Ipsum
				<?php endif; ?>
			</div>
			<?php if ( "portfolio" === $_post_type ) : ?>
				<?php return false ?>
			<?php else : ?>
				<div class="company">
				<?php if ( $_company ) : ?>
					<?php echo $_company; ?>
				<?php else : ?>
					Lorem Ipsum
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
</blockquote>
</div>
