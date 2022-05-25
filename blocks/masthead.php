<?php
$image = get_field('masthead_image');
?>

<section class="masthead">

    <?php
        if( !empty( $image ) ): ?>
         <img class="masthead__img w-100" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>

</section>
