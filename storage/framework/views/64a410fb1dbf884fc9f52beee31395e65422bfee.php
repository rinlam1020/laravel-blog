<?php $__env->startSection('content'); ?>
  <div class="page-header">
    <h1><?php echo app('translator')->get('dashboard.this_week'); ?></h1>
  </div>

  <div class="row">
    <div class="col-xl-4 col-sm-6 mb-3">
      <?php echo $__env->make('admin/dashboard/_posts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-xl-4 col-sm-6 mb-3">
      <?php echo $__env->make('admin/dashboard/_comments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col-xl-4 col-sm-6 mb-3">
      <?php echo $__env->make('admin/dashboard/_users', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/dashboard/index.blade.php ENDPATH**/ ?>