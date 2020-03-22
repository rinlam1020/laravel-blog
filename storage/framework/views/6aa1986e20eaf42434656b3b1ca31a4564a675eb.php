<?php $__env->startSection('content'); ?>
    <div class="page-header">
      <h1><?php echo app('translator')->get('dashboard.users'); ?></h1>
    </div>

    <?php echo $__env->make('admin/users/_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/users/index.blade.php ENDPATH**/ ?>