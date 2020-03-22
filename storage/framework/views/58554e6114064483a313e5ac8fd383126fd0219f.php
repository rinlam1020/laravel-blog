<?php $__env->startSection('main_content'); ?>
  <div class="card">
    <div class="card-body">
      <h1><?php echo app('translator')->get('users.attributes.api_token'); ?></h1>
      <hr class="my-4">

      <div class="form-group">
        <?php echo Form::label('api_token', __('users.attributes.api_token')); ?>

        <?php echo Form::text('api_token', $user->api_token ?? __('users.empty_api_token'), ['class' => 'form-control', 'readonly']); ?>

      </div>

      <div class="d-flex justify-content-start">
        <?php echo Form::model($user, ['method' => 'PATCH', 'route' => ['users.token.update', $user], 'class' => 'ml-auto']); ?>

          <?php echo Form::submit(__('forms.actions.generate'), ['class'=> 'btn btn-success', 'data-confirm' => __('forms.tokens.generate')]); ?>

        <?php echo Form::close(); ?>

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('users.layout', ['tab' => 'api_token'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/users/token.blade.php ENDPATH**/ ?>