<?php $__env->startSection('content'); ?>
    <h1><?php echo app('translator')->get('media.create'); ?></h1>

    <?php echo Form::open(['route' => ['admin.media.store'], 'method' =>'POST', 'files' => true]); ?>

        <div class="form-group">
            <?php echo Form::label('image', __('media.attributes.image')); ?>

            <?php echo Form::file('image', ['accept' => 'image/*', 'class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'required']); ?>


            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <?php echo Form::label('name', __('media.attributes.name')); ?>

            <?php echo Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '')]); ?>


            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="invalid-feedback"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        <?php echo e(link_to_route('admin.media.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary'])); ?>

        <?php echo Form::submit(__('forms.actions.save'), ['class' => 'btn btn-primary']); ?>

    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/media/create.blade.php ENDPATH**/ ?>