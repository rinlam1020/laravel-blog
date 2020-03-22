<?php $__env->startSection('main_content'); ?>
  <div class="card">
    <div class="card-body">
      <h1><?php echo app('translator')->get('users.profile'); ?></h1>
      <hr class="my-4">

      <?php echo Form::model($user, ['method' => 'PATCH', 'route' => ['users.update']]); ?>


        <div class="form-group row">
          <?php echo Form::label('name', __('users.attributes.name'), ['class' => 'col-sm-2 col-form-label']); ?>


          <div class="col-sm-5">
            <?php echo Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => __('users.placeholder.name'), 'required']); ?>


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
        </div>

        <div class="form-group row">
          <?php echo Form::label('email', __('users.attributes.email'), ['class' => 'col-sm-2 col-form-label']); ?>


          <div class="col-sm-5">
            <?php echo Form::text('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => __('users.placeholder.email'), 'required']); ?>


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
        </div>

        <div class="form-group offset-sm-2">
          <?php echo Form::submit(__('forms.actions.save'), ['class' => 'btn btn-success']); ?>

        </div>

      <?php echo Form::close(); ?>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('users.layout', ['tab' => 'profile'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/users/edit.blade.php ENDPATH**/ ?>