<?php
// Check if ACF is active
if( function_exists('get_field') ):
    $date = get_field('date');
    $time = get_field('time')
?>

<div class="event-details">
    <?php if($date); ?>
        <h4><i class="fa-regular fa-calendar text-sky-950"></i><?php echo esc_html($date); ?></h4>
    <?php endif; ?>
    <?php if($time); ?>
        <p class="text-lg font-medium"><i class="fa-regular fa-clock text-sky-950"></i><?php echo esc_html($time); ?></p>
    <?php endif; ?>
</div>
<?php endif; ?>
