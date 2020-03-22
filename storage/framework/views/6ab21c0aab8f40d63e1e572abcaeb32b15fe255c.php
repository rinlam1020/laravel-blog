<table class="table table-striped table-sm table-responsive-md">
    <caption><?php echo e(trans_choice('comments.count', $comments->total())); ?></caption>
    <thead>
        <tr>
            <th><?php echo app('translator')->get('comments.attributes.content'); ?></th>
            <th><?php echo app('translator')->get('comments.attributes.post'); ?></th>
            <th><?php echo app('translator')->get('comments.attributes.author'); ?></th>
            <th><?php echo app('translator')->get('comments.attributes.posted_at'); ?></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(Str::limit($comment->content, 50)); ?></td>
                <td><?php echo e(link_to_route('admin.posts.edit', $comment->post->title, $comment->post)); ?></td>
                <td><?php echo e(link_to_route('admin.users.edit', $comment->author->fullname, $comment->author)); ?></td>
                <td><?php echo e(humanize_date($comment->posted_at, 'd/m/Y H:i:s')); ?></td>
                <td>
                    <a href="<?php echo e(route('admin.comments.edit', $comment)); ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>

                    <?php echo Form::model($comment, ['method' => 'DELETE', 'route' => ['admin.comments.destroy', $comment], 'class' => 'form-inline', 'data-confirm' => __('forms.comments.delete')]); ?>

                        <?php echo Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['class' => 'btn btn-danger btn-sm', 'name' => 'submit', 'type' => 'submit']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<div class="d-flex justify-content-center">
    <?php echo e($comments->links()); ?>

</div>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/comments/_list.blade.php ENDPATH**/ ?>