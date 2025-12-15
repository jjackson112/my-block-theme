<?php
/**
 * Explicit post context is required in archives, blocks, and query loops.
 * Passing the post ID ensures each event reads its own ACF fields.
 */

$post_id = get_the_ID();

$date = get_field('date', $post_id);
$time = get_field('time', $post_id);
?>

<div class="event-details space-y-2">

    <?php if ( $date ) : ?>
        <h4 class="text-lg font-semibold flex items-center gap-2">
            <i class="fa-regular fa-calendar text-sky-950"></i>
            <?php echo esc_html( $date ); ?>
        </h4>
    <?php endif; ?>

    <?php if ( $time ) : ?>
        <p class="text-lg flex items-center gap-2">
            <i class="fa-regular fa-clock text-sky-950"></i>
            <?php echo esc_html( $time ); ?>
        </p>
    <?php endif; ?>

</div>
