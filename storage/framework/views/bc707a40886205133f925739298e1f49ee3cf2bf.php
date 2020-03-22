<table class="table table-striped table-sm table-responsive-md">
    <caption><?php echo e(trans_choice('posts.count', $posts->total())); ?></caption>
    <thead>
        <tr>
            <th><?php echo app('translator')->get('posts.attributes.title'); ?></th>
            <th><?php echo app('translator')->get('posts.attributes.author'); ?></th>
            <th><?php echo app('translator')->get('posts.attributes.posted_at'); ?></th>
            <th><i class="fa fa-comments" aria-hidden="true"></i></th>
            <th><i class="fa fa-heart" aria-hidden="true"></i></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($post->title); ?></td>
                <td><?php echo e(link_to_route('admin.users.edit', $post->author->fullname, $post->author)); ?></td>
                <td><?php echo e(humanize_date($post->posted_at, 'd/m/Y H:i:s')); ?></td>
                <td><span class="badge badge-pill badge-secondary"><?php echo e($post->comments_count); ?></span></td>
                <td><span class="badge badge-pill badge-secondary"><?php echo e($post->likes_count); ?></span></td>
                <td>
                    <a href="<?php echo e(route('admin.posts.edit', $post)); ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>

                    <?php echo Form::model($post, ['method' => 'DELETE', 'route' => ['admin.posts.destroy', $post], 'class' => 'form-inline', 'data-confirm' => __('forms.posts.delete')]); ?>

                        <?php echo Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['class' => 'btn btn-danger btn-sm', 'name' => 'submit', 'type' => 'submit']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<div class="d-flex justify-content-center">
    <?php echo e($posts->links()); ?>

</div>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/posts/_list.blade.php ENDPATH**/ ?>