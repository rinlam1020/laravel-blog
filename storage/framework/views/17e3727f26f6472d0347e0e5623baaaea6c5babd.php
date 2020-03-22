<div class="card mb-2">
  <?php if($post->hasThumbnail()): ?>
    <a href="<?php echo e(route('posts.show', $post)); ?>">
      <?php echo e(Html::image($post->thumbnail->getUrl('thumb'), $post->thumbnail->name, ['class' => 'card-img-top'])); ?>

    </a>
  <?php endif; ?>

  <div class="card-body">
    <h4 v-pre class="card-title">
      <?php echo e(link_to_route('posts.show', $post->title, $post)); ?>

    </h4>

    <p class="card-text">
      <small class="text-muted"><?php echo e(humanize_date($post->posted_at)); ?></small><br>
      <small class="text-muted">
        <i class="fa fa-comments-o" aria-hidden="true"></i> <?php echo e($post->comments_count); ?>

        <i class="fa fa-heart-o ml-2" aria-hidden="true"></i> <?php echo e($post->likes_count); ?>

      </small>
    </p>
  </div>
</div>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/users/_post.blade.php ENDPATH**/ ?>