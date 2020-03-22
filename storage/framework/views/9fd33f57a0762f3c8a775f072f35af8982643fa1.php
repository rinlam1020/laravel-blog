<?php $__env->startSection('content'); ?>
  <div class="bg-white p-3 post-card">
    <?php if($post->hasThumbnail()): ?>
      <?php echo e(Html::image($post->thumbnail->getUrl(), $post->thumbnail->name, ['class' => 'card-img-top'])); ?>

    <?php endif; ?>

    <h1 v-pre><?php echo e($post->title); ?></h1>

    <div class="mb-3">
      <small v-pre class="text-muted"><?php echo e(link_to_route('users.show', $post->author->fullname, $post->author)); ?></small>,
      <small class="text-muted"><?php echo e(humanize_date($post->posted_at)); ?></small>
    </div>

    <div v-pre class="post-content">
      <?php echo $post->content; ?>

    </div>

    <p class="mt-3">
      <like
        :likes-count="<?php echo e($post->likes_count); ?>"
        :liked="<?php echo e(json_encode($post->isLiked())); ?>"
        :item-id="<?php echo e($post->id); ?>"
        item-type="posts"
        :logged-in="<?php echo e(json_encode(Auth::check())); ?>"
      />
    </p>
  </div>

  <?php echo $__env->make('comments/_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/posts/show.blade.php ENDPATH**/ ?>