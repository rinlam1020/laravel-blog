<table class="table table-striped table-sm">
    <caption><?php echo e(trans_choice('users.count', $users->total())); ?></caption>
    <thead>
        <tr>
            <th><?php echo app('translator')->get('users.attributes.name'); ?></th>
            <th><?php echo app('translator')->get('users.attributes.email'); ?></th>
            <th><?php echo app('translator')->get('users.attributes.registered_at'); ?></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(link_to_route('admin.users.edit', $user->fullname, $user)); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e(humanize_date($user->registered_at, 'd/m/Y H:i:s')); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.users.edit', $user)); ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<div class="d-flex justify-content-center">
    <?php echo e($users->links()); ?>

</div>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/users/_list.blade.php ENDPATH**/ ?>