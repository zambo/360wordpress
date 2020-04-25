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
$id = 'image-grid-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'image-grid';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$images = get_field('imagens');
$size = 'full'; // (thumbnail, medium, large, full or custom size)

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> animated-section">



  <?php if ($images): ?>
  <div class="grid-container">
    <?php foreach ($images as $image_id): ?>
    <div class="grid-item">
      <?php echo wp_get_attachment_image($image_id, $size); ?>
    </div>
    <?php endforeach;?>
  </div>
  <?php endif;?>

</div>