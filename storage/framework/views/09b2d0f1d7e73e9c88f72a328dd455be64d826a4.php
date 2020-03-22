<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <?php if(auth()->guard()->check()): ?>
        <meta name="api-token" content="<?php echo e(auth()->user()->api_token); ?>">
    <?php endif; ?>

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(mix('/css/admin.css')); ?>" rel="stylesheet">
</head>
<body class="admin-body bg-dark">
    <?php echo $__env->make('admin/shared/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="content-wrapper bg-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <?php echo $__env->make('shared/alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <div class="card">
                        <div class="card-body">
                            <?php echo $__env->yieldContent('content'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(mix('/js/app.js')); ?>"></script>
    <script src="<?php echo e(mix('/js/admin.js')); ?>"></script>
</body>
</html>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/layouts/app.blade.php ENDPATH**/ ?>