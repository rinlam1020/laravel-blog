<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title><?php echo e(config('app.name', 'Laravel')); ?></title>
        <link><?php echo e(url()->current()); ?></link>
        <?php echo $__env->yieldContent('content'); ?>
    </channel>
</rss>

<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/layouts/rss.blade.php ENDPATH**/ ?>