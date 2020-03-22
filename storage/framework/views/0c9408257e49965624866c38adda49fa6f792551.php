<?php $__env->startSection('content'); ?>

<div class="row">
  <div class="col-md-12 mb-3">
    <a href="<?php echo e(route('users.show', $user)); ?>">
      <i class="fa fa-long-arrow-left" aria-hidden="true"></i> <?php echo app('translator')->get('users.public_profile'); ?>
    </a>
  </div>
</div>

<div class="row">
  <div class="col-md-3 mb-3">
    <div class="card">
      <div class="card-header"><?php echo app('translator')->get('users.profile'); ?></div>
      <div class="list-group list-group-flush">
        <a href="<?php echo e(route('users.edit')); ?>" class="list-group-item <?php echo e(($tab == 'profile') ? 'active' : ''); ?>">
          <i class="fa fa-user" aria-hidden="true"></i> <?php echo app('translator')->get('users.profile'); ?>
        </a>

        <a href="<?php echo e(route('users.password')); ?>" class="list-group-item <?php echo e(($tab == 'security') ? 'active' : ''); ?>">
          <i class="fa fa-lock" aria-hidden="true"></i> <?php echo app('translator')->get('users.security'); ?>
        </a>

        <a href="<?php echo e(route('users.token')); ?>" class="list-group-item <?php echo e(($tab == 'api_token') ? 'active' : ''); ?>">
          <i class="fa fa-key" aria-hidden="true"></i> <?php echo app('translator')->get('users.api_token'); ?>
        </a>
      </div>
    </div>
  </div>

  <div class="col-md-9">
      <?php echo $__env->yieldContent('main_content'); ?>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/users/layout.blade.php ENDPATH**/ ?>