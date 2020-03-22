<?php echo Form::model($user, ['method' => 'PATCH', 'route' => ['admin.users.update', $user]]); ?>


  <div class="form-row">
    <div class="form-group col-md-6">
      <?php echo Form::label('name', __('users.attributes.name')); ?>

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

    <div class="form-group col-md-6">
      <?php echo Form::label('email', __('users.attributes.email')); ?>

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

  <div class="form-row">
    <div class="form-group col-md-6">
      <?php echo Form::label('password', __('users.attributes.password')); ?>

      <?php echo Form::password('password', ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => __('users.placeholder.password')]); ?>


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

    <div class="form-group col-md-6">
      <?php echo Form::label('password_confirmation', __('users.attributes.password_confirmation')); ?>

      <?php echo Form::password('password_confirmation', ['class' => 'form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''), 'placeholder' => __('users.placeholder.password_confirmation')]); ?>


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

  <div class="form-group">
    <?php echo Form::label('roles', __('users.attributes.roles')); ?>


    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="checkbox">
        <label>
          <?php echo Form::checkbox("roles[$role->id]", $role->id, $user->hasRole($role->name)); ?>

          <?php if(Lang::has('roles.' . $role->name)): ?>
            <?php echo __('roles.' . $role->name); ?>

          <?php else: ?>
            <?php echo e(ucfirst($role->name)); ?>

          <?php endif; ?>
        </label>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  <?php echo e(link_to_route('admin.users.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary'])); ?>

  <?php echo Form::submit(__('forms.actions.update'), ['class' => 'btn btn-primary']); ?>


<?php echo Form::close(); ?>

<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/users/_form.blade.php ENDPATH**/ ?>