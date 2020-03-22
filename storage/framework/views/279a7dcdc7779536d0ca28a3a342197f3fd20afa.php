<?php if(auth()->guard()->check()): ?>
  <comment-form
      :post-id="<?php echo e($post->id); ?>"
      placeholder="<?php echo app('translator')->get('comments.placeholder.content'); ?>"
      button="<?php echo app('translator')->get('comments.comment'); ?>">
  </comment-form>
<?php else: ?>
   <?php if (isset($component)) { $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975 = $component; } ?>
<?php $component = app()->make(App\View\Components\Alert::class, ['type' => 'warning']); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php echo app('translator')->get('comments.sign_in_to_comment'); ?>
   <?php if (isset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975)): ?>
<?php $component = $__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975; ?>
<?php unset($__componentOriginald4c8f106e1e33ab85c5d037c2504e2574c1b0975); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/comments/_form.blade.php ENDPATH**/ ?>