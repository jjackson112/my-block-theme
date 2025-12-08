<div class="max-w-3xl mx-auto px-6 mt-12 pb-10 flex justify-between font-semibold">
<?php if (is_singular('post')) : ?>
    <div class="hover:text-sky-300"><?php previous_post_link('%link', '← Previous'); ?></div>
    <div class="hover:text-sky-300"><?php next_post_link('%link', 'Next →'); ?></div>
<?php else : ?>
    <div class="hover:text-sky-300"><?php previous_posts_link('← Previous'); ?></div>
    <div class="hover:text-sky-300"><?php next_posts_link('Next →'); ?></div>
<?php endif; ?>
</div>

