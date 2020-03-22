<?php $__env->startSection('content'); ?>

  <?php echo $__env->make('posts/_search_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <?php echo $__env->make('posts/_list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          
        </div>
      </div>
    </div>

  <!-- <div class="d-flex justify-content-between">
    <div class="p-2">
      <?php if(request()->has('q')): ?>
        <h2><?php echo e(trans_choice('posts.search_results', $posts->count(), ['query' => request()->input('q')])); ?></h2>
      <?php else: ?>
        <h2><?php echo app('translator')->get('posts.last_posts'); ?></h2>
      <?php endif; ?>
    </div>

    <div class="p-2">
      <a href="<?php echo e(route('posts.feed')); ?>" class="pull-right" data-turbolinks="false">
          <i class="fa fa-rss" aria-hidden="true"></i>
      </a>
    </div>
  </div> -->

  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/posts/index.blade.php ENDPATH**/ ?>