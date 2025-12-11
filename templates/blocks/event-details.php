<?php
// Check if ACF is active
if( function_exists('get_field') ):
    $date = get_field('event_date');
    $location = get_field('event_location');
?>
<div class="event-details">
    <?php if($date): ?>
        <p class="event-date"><?php echo esc_html($date); ?></p>
    <?php endif; ?>
    <?php if($location): ?>
        <p class="event-location"><?php echo esc_html($location); ?></p>
    <?php endif; ?>
</div>
<?php endif; ?>
