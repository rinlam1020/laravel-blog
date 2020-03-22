<item>
    <title><?php echo e($post->title); ?></title>
    <guid><?php echo e(route('posts.show', $post)); ?></guid>
    <pubDate><?php echo e($post->posted_at->format('r')); ?></pubDate>
    <author><?php echo e($post->author->email); ?> (<?php echo e($post->author->fullname); ?>)</author>
    <description><?php echo e($post->excerpt()); ?></description>
</item>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/posts_feed/_show.blade.php ENDPATH**/ ?>