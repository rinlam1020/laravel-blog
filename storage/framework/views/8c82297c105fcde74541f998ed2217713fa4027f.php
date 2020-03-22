<?php $__env->startSection('content'); ?>
    <h1><?php echo app('translator')->get('posts.create'); ?></h1>

    <?php echo Form::open(['route' => ['admin.posts.store'], 'method' =>'POST']); ?>

        <?php echo $__env->make('admin/posts/_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo e(link_to_route('admin.posts.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary'])); ?>

        <?php echo Form::submit(__('forms.actions.save'), ['class' => 'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/posts/create.blade.php ENDPATH**/ ?>