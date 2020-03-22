 <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = app()->make(App\View\Components\Card::class, []); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'bg-success text-light m-2']); ?>
    <div class="row justify-content-between">
        <i class="fa fa-file-text fa-5x" aria-hidden="true"></i>
        <div class="text-right">
            <div class="huge"><?php echo e($posts->count()); ?></div>
            <div><?php echo e(trans_choice('posts.new_posts', $posts->count())); ?></div>
        </div>
    </div>

     <?php $__env->slot('footer'); ?> 
        <a href="<?php echo e(route('admin.posts.index')); ?>" class="d-flex justify-content-between text-light">
            <span><?php echo app('translator')->get('dashboard.details'); ?></span>
            <span><i class="fa fa-arrow-circle-right"></i></span>
        </a>
     <?php $__env->endSlot(); ?>
 <?php if (isset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8)): ?>
<?php $component = $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8; ?>
<?php unset($__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/dashboard/_posts.blade.php ENDPATH**/ ?>