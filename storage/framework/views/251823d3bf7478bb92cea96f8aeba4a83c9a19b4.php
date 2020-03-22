<?php $__env->startSection('content'); ?>
    <p><?php echo app('translator')->get('posts.show'); ?> : <?php echo e(link_to_route('posts.show', route('posts.show', $post), $post)); ?></p>

    <?php echo $__env->make('admin/posts/_thumbnail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo Form::model($post, ['route' => ['admin.posts.update', $post], 'method' =>'PUT']); ?>

        <?php echo $__env->make('admin/posts/_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="pull-left">
            <?php echo e(link_to_route('admin.posts.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary'])); ?>

            <?php echo Form::submit(__('forms.actions.update'), ['class' => 'btn btn-primary']); ?>

        </div>
    <?php echo Form::close(); ?>


    <?php echo Form::model($post, ['method' => 'DELETE', 'route' => ['admin.posts.destroy', $post], 'class' => 'form-inline pull-right', 'data-confirm' => __('forms.posts.delete')]); ?>

        <?php echo Form::button('<i class="fa fa-trash" aria-hidden="true"></i> ' . __('posts.delete'), ['class' => 'btn btn-link text-danger', 'name' => 'submit', 'type' => 'submit']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/posts/edit.blade.php ENDPATH**/ ?>