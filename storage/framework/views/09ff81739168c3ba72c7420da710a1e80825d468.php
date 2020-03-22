<?php echo Form::model($comment, ['route' => ['admin.comments.update', $comment], 'method' =>'PUT' ]); ?>


    <div class="form-row">
        <div class="form-group col-md-6">
            <?php echo Form::label('author_id', __('comments.attributes.author')); ?>

            <?php echo Form::select('author_id', $users, null, ['class' => 'form-control' . ($errors->has('author_id') ? ' is-invalid' : ''), 'required']); ?>


            <?php $__errorArgs = ['author_id'];
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
            <?php echo Form::label('posted_at', __('comments.attributes.posted_at')); ?>

            <input type="datetime-local" name="posted_at" class="form-control <?php echo e(($errors->has('posted_at') ? ' is-invalid' : '')); ?>" required value="<?php echo e(old('posted_at') ?? $comment->posted_at->format('Y-m-d\TH:i')); ?>">

            <?php $__errorArgs = ['posted_at'];
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
        <?php echo Form::label('content', __('comments.attributes.content')); ?>

        <?php echo Form::textarea('content', null, ['class' => 'form-control' . ($errors->has('content') ? ' is-invalid' : ''), 'required']); ?>


        <?php $__errorArgs = ['content'];
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

    <div class="pull-left">
        <?php echo e(link_to_route('admin.comments.index', __('forms.actions.back'), [], ['class' => 'btn btn-secondary'])); ?>

        <?php echo Form::submit(__('forms.actions.update'), ['class' => 'btn btn-primary']); ?>

    </div>

<?php echo Form::close(); ?>


<?php echo Form::model($comment, ['method' => 'DELETE', 'route' => ['admin.comments.destroy', $comment], 'class' => 'form-inline pull-right', 'data-confirm' => __('forms.comments.delete')]); ?>

    <?php echo Form::button('<i class="fa fa-trash" aria-hidden="true"></i> ' . __('comments.delete'), ['class' => 'btn btn-link text-danger', 'name' => 'submit', 'type' => 'submit']); ?>

<?php echo Form::close(); ?>

<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/comments/_form.blade.php ENDPATH**/ ?>