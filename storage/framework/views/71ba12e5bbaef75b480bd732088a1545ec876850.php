<?php $__env->startSection('content'); ?>
    <p><?php echo app('translator')->get('posts.show'); ?> : <?php echo e(link_to_route('posts.show', route('posts.show', $comment->post), $comment->post)); ?></p>
    <?php echo $__env->make('admin/comments/_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/comments/edit.blade.php ENDPATH**/ ?>