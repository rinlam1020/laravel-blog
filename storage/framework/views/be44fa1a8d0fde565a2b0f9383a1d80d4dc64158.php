 <?php if (isset($component)) { $__componentOriginal5f1c24da064cdf37917762bf37a30d0804319ee8 = $component; } ?>
<?php $component = app()->make(App\View\Components\Card::class, []); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['class' => 'bg-warning text-light m-2']); ?>
    <div class="row justify-content-between">
        <i class="fa fa-users fa-5x" aria-hidden="true"></i>
        <div class="text-right">
            <div class="huge"><?php echo e($users->count()); ?></div>
            <div><?php echo e(trans_choice('users.new_users', $users->count())); ?></div>
        </div>
    </div>

     <?php $__env->slot('footer'); ?> 
        <a href="<?php echo e(route('admin.users.index')); ?>" class="d-flex justify-content-between text-light">
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
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/dashboard/_users.blade.php ENDPATH**/ ?>