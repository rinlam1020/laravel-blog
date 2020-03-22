<div class="alert alert-<?php echo e($type); ?> alert-dismissible" role="alert">
    <?php if(isset($dismissible) && $dismissible): ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <?php endif; ?>

    <?php if(isset($title)): ?>
        <strong><?php echo e($title); ?></strong>
    <?php endif; ?>

    <?php echo e($slot); ?>

</div>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/components/alert.blade.php ENDPATH**/ ?>