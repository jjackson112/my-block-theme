<?php

$date = get_field('date', get_the_ID());
$time = get_field('time', get_the_ID());

?>

<?php if ( $date ) : ?>
    <h4 class="text-lg font-semibold flex items-center gap-2">
        <i class="fa-regular fa-calendar text-sky-950"></i>
        <?php echo esc_html($date); ?>
    </h4>
<?php endif; ?>

<?php if ( $time ) : ?>
    <?php if ($time) : ?>
        <p class="text-lg flex items-center gap-2">
            <i class="fa-regular fa-clock text-sky-950"></i>
            <?php echo esc_html($time); ?>
        </p>
    <?php endif; ?>

