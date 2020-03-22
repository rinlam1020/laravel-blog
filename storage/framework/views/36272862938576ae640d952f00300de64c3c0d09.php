<?php $__env->startSection('content'); ?>
<div class="row justify-content-md-center m-3">
    <div class="col-md-6">
        <h1><?php echo app('translator')->get('auth.reset_password'); ?></h1>

        <?php if(session('status')): ?>
             <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = app()->make(App\View\Components\Alert::class, ['type' => 'success','dismissible' => true]); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                <?php echo e(session('status')); ?>

             <?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <?php endif; ?>

        <?php echo Form::open(['route' => 'password.email', 'role' => 'form', 'method' => 'POST']); ?>

            <div class="form-group">
                <?php echo Form::label('email', __('validation.attributes.email'), ['class' => 'control-label']); ?>

                <?php echo Form::email('email', old('email'), ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'required']); ?>


                <?php $__errorArgs = ['email'];
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
                <?php echo Form::submit(__('auth.send_password_reset_link'), ['class' => 'btn btn-primary']); ?>

            </div>

        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>