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
$block_id = 'clients-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$block_class = 'clients';
if ( ! empty( $block['className'] ) ) {
	$block_class .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$block_class .= ' align' . $block['align'];
}


$content                 = get_field( 'client_content' );
$client_kicker           = get_field( 'client_content' )['kicker'];
$client_title            = get_field( 'client_content' )['title'];
$client_text             = get_field( 'client_content' )['text'];
$client_primary_button   = get_field( 'client_content' )['primaryButton'];
$client_secondary_button = get_field( 'client_content' )['secondaryButton'];

?>

<div id="<?php echo esc_attr( $block_id ); ?>" class="acf-block acf-block__clients acf-block__dual <?php echo esc_attr( $block_class ); ?>">

	<div class="content">

		<div class="kicker">
		<?php if ( $client_kicker ) : ?>
			<?php echo $client_kicker; ?>
		<?php else : ?>
			Aenean imperdiet
		<?php endif; ?>
		</div>

		<h2 class="title">
		<?php if ( $client_title ) : ?>
			<?php echo $client_title; ?>
		<?php else : ?>
			In enim justo, rhoncus ut
		<?php endif; ?>
		</h2>

		<div class="text">
		<?php if ( $client_text ) : ?>
			<?php echo $client_text; ?>
		<?php else : ?>
			<p>Lorem ipsum dolor sit amet, <strong>consectetuer adipiscing</strong> elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
		<?php endif; ?>
		</div>


		<div class="buttons">
		<?php if ( $client_primary_button ) : ?>
			<a class="btn" href="<?php echo $client_primary_button['url']; ?>"><?php echo $client_primary_button['title']; ?></a>
		<?php endif; ?>

		<?php if ( $client_secondary_button ) : ?>
			<a class="btn" href="<?php echo $client_secondary_button['url']; ?>"><?php echo $client_secondary_button['title']; ?></a>
		<?php endif; ?>
		</div>

	</div>

	<div>
		<?php if ( have_rows( 'clientLogos', 'option' ) ) : ?>
			<ul class="client-logos">
				<?php while ( have_rows( 'clientLogos', 'option' ) ) : the_row(); ?>
					<li><?php echo wp_get_attachment_image( get_sub_field('clientLogo')['id'], 'medium' ); ?></li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>

</div>

