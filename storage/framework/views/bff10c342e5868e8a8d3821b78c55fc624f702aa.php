<?php $__env->startSection('content'); ?>
<div class="row justify-content-md-center m-3">
    <div class="col-md-6">
        <h1><?php echo app('translator')->get('auth.reset_password'); ?></h1>

        <?php echo Form::open(['route' => 'password.request', 'role' => 'form', 'method' => 'POST']); ?>

        <?php echo Form::hidden('token', $token); ?>

            <div class="form-group">
                <?php echo Form::label('email', __('validation.attributes.email'), ['class' => 'control-label']); ?>

                <?php echo Form::email('email', $email ?? old('email'), ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'required']); ?>


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
                <?php echo Form::label('password', __('validation.attributes.password'), ['class' => 'control-label']); ?>

                <?php echo Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'required']); ?>


                <?php $__errorArgs = ['password'];
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
                <?php echo Form::label('password_confirmation', __('validation.attributes.password_confirmation'), ['class' => 'control-label']); ?>

                <?php echo Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''), 'required']); ?>


                <?php $__errorArgs = ['password_confirmation'];
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
                <?php echo Form::submit(__('auth.reset_password'), ['class' => 'btn btn-primary']); ?>

            </div>

        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/auth/passwords/reset.blade.php ENDPATH**/ ?>