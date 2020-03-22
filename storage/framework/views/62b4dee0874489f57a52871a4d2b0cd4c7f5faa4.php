<table class="table table-striped table-sm table-responsive-md">
    <caption><?php echo e(trans_choice('media.count', $media->count())); ?></caption>
    <thead>
        <tr>
            <th><?php echo app('translator')->get('media.attributes.image'); ?></th>
            <th><?php echo app('translator')->get('media.attributes.name'); ?></th>
            <th><?php echo app('translator')->get('media.attributes.url'); ?></th>
            <th><?php echo app('translator')->get('media.attributes.posted_at'); ?></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $media; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $medium): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <a href="<?php echo e($medium->getUrl()); ?>" target="_blank">
                        <img src="<?php echo e($medium->getUrl('thumb')); ?>" alt="<?php echo e($medium->name); ?>" width="100">
                    </a>
                </td>
                <td><?php echo e($medium->name); ?></td>
                <td>
                    <div class="input-group">
                        <?php echo e(Form::text(null, url($medium->getUrl()), ['class' => 'form-control', 'readonly' => true, 'id' => "medium-{$medium->id}"])); ?>

                        <div class="input-group-append">
                            <button class="input-group-text btn" data-clipboard-target="#medium-<?php echo e($medium->id); ?>">
                                <i class="fa fa-clipboard"></i>
                            </button>
                        </div>
                    </div>
                </td>
                <td><?php echo e(humanize_date($medium->posted_at, 'd/m/Y H:i:s')); ?></td>
                <td>
                    <a href="<?php echo e($medium->getUrl()); ?>" title="<?php echo e(__('media.show')); ?>" class="btn btn-primary btn-sm" target="_blank">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </a>

                    <a href="<?php echo e(route('admin.media.show', $medium)); ?>" title="<?php echo e(__('media.download')); ?>" class="btn btn-primary btn-sm">
                        <i class="fa fa-download" aria-hidden="true"></i>
                    </a>

                    <?php echo Form::model($medium, ['method' => 'DELETE', 'route' => ['admin.media.destroy', $medium], 'class' => 'form-inline', 'data-confirm' => __('forms.media.delete')]); ?>

                        <?php echo Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['class' => 'btn btn-danger btn-sm', 'name' => 'submit', 'type' => 'submit', 'title' => __('media.delete')]); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/media/_list.blade.php ENDPATH**/ ?>