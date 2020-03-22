<h2 class="mt-2"><?php echo e(trans_choice('comments.count', $post->comments_count)); ?></h2>

<?php echo $__env->make('comments/_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<comment-list
    :post-id="<?php echo e($post->id); ?>"
    loading-comments="<?php echo app('translator')->get('comments.loading_comments'); ?>"
    data-confirm="<?php echo app('translator')->get('forms.comments.delete'); ?>">
</comment-list>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/comments/_list.blade.php ENDPATH**/ ?>