<?php $__env->startSection('content'); ?>
    <div class="page-header d-flex justify-content-between">
      <h1><?php echo app('translator')->get('dashboard.posts'); ?></h1>
      <a href="<?php echo e(route('admin.posts.create')); ?>" class="btn btn-primary btn-sm align-self-center">
        <i class="fa fa-plus-square" aria-hidden="true"></i> <?php echo app('translator')->get('forms.actions.add'); ?>
      </a>
    </div>

    <?php echo $__env->make('admin/posts/_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/posts/index.blade.php ENDPATH**/ ?>