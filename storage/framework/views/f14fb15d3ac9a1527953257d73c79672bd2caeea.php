<?php if($post->hasThumbnail()): ?>
    <?php echo e(Html::image($post->thumbnail->getUrl('thumb'), $post->thumbnail->name, ['class' => 'img-thumbnail', 'width' => '350'])); ?>


    <?php echo Form::model($post, ['method' => 'DELETE', 'route' => ['admin.posts_thumbnail.destroy', $post], 'data-confirm' => __('forms.posts.delete_thumbnail')]); ?>

        <?php echo Form::button('<i class="fa fa-trash" aria-hidden="true"></i> ' . __('posts.delete_thumbnail'), ['class' => 'btn btn-link text-danger', 'name' => 'submit', 'type' => 'submit']); ?>

    <?php echo Form::close(); ?>

<?php endif; ?>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/posts/_thumbnail.blade.php ENDPATH**/ ?>