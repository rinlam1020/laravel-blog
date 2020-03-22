<div <?php echo e($attributes->merge(['class' => 'card'])); ?>>

    <?php if(isset($title)): ?>
        <div class="card-header">
            <?php echo e($title); ?>

        </div>
    <?php endif; ?>

    <div class="card-body">
        <?php echo e($slot); ?>

    </div>

    <?php if(isset($footer)): ?>
        <div class="card-footer">
            <?php echo e($footer); ?>

        </div>
    <?php endif; ?>
</div>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/components/card.blade.php ENDPATH**/ ?>