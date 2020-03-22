<div class="card mb-2">
  <div class="card-body">
    <div class="card-title">
      <?php echo app('translator')->get('comments.posted_on'); ?> <a v-pre href="<?php echo e(route('posts.show', $comment->post)); ?>"><?php echo e($comment->post->title); ?></a>
    </div>

    <p v-pre class="card-text"><?php echo e($comment->content); ?></p>
    <p class="card-text">
      <small class="text-muted"><?php echo e(humanize_date($comment->posted_at)); ?></small>
    </p>
  </div>
</div>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/users/_comment.blade.php ENDPATH**/ ?>