<?php $__env->startSection('main_content'); ?>
  <div class="card">
    <div class="card-body">
      <h1><?php echo app('translator')->get('users.security'); ?></h1>
      <hr class="my-4">

      <?php echo Form::model($user, ['method' => 'PATCH', 'route' => ['users.password.update', $user]]); ?>


        <div class="form-group row">
          <?php echo Form::label('current_password', __('users.attributes.current_password'), ['class' => 'col-sm-4 col-form-label']); ?>


          <div class="col-sm-8">
            <?php echo Form::password('current_password', ['class' => 'form-control' . ($errors->has('current_password') ? ' is-invalid' : ''), 'placeholder' => __('users.placeholder.current_password'), 'required']); ?>


            <?php $__errorArgs = ['current_password'];
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
        </div>

        <div class="form-group row">
          <?php echo Form::label('password', __('users.attributes.password'), ['class' => 'col-sm-4 col-form-label']); ?>


          <div class="col-sm-8">
            <?php echo Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => __('users.placeholder.password'), 'required']); ?>


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
        </div>

        <div class="form-group row">
          <?php echo Form::label('password_confirmation', __('users.attributes.password_confirmation'), ['class' => 'col-sm-4 col-form-label']); ?>


          <div class="col-sm-8">
            <?php echo Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''), 'placeholder' => __('users.placeholder.password_confirmation'), 'required']); ?>


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
        </div>

        <div class="form-group offset-sm-4">
          <?php echo Form::submit(__('forms.actions.save'), ['class' => 'btn btn-success']); ?>

        </div>

      <?php echo Form::close(); ?>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('users.layout', ['tab' => 'security'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/users/password.blade.php ENDPATH**/ ?>