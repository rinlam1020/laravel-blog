<?php $__env->startSection('content'); ?>
    <p><?php echo app('translator')->get('users.show'); ?> : <?php echo e(link_to_route('users.show', route('users.show', $user), $user)); ?></p>

    <?php echo $__env->make('admin/users/_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/users/edit.blade.php ENDPATH**/ ?>