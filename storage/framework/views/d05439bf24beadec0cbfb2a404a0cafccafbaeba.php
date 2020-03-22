<?php $__env->startSection('content'); ?>
    <?php echo $__env->renderEach('posts_feed/_show', $posts, 'post'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.rss', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/posts_feed/index.blade.php ENDPATH**/ ?>