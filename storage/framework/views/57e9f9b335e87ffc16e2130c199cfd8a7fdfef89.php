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

    <!-- <title><?php echo e(config('app.name', 'My Store')); ?></title> -->
    <title><?php echo e('My StoreX'); ?></title>
    <!-- Styles -->
    
    <link href="<?php echo e(mix('/css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e('/css/fontawesome.css'); ?>" rel="stylesheet">
    <link href="<?php echo e('/css/templatemo-sixteen.css'); ?>" rel="stylesheet">
    <link href="<?php echo e('/css/owl.css'); ?>" rel="stylesheet">
    <link href="<?php echo e('/css/app_modifier.css'); ?>" rel="stylesheet">
    <link href="<?php echo e('/css/templatemo-sixteen_modifier.css'); ?>" rel="stylesheet">
    <link href="<?php echo e('/css/dia-footer-templatemo.css'); ?>" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="debugx">
        <?php 
            //var_dump($__env);
        ?>
    </div>
    <div id="app">
        <?php echo $__env->make('shared/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="clear">
            <?php echo $__env->make('shared/alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="row">
                <div class="col-md-12">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>

        <?php echo $__env->make('shared/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(mix('/js/app.js')); ?>"></script>
    <script src="<?php echo e('/js/custom.js'); ?>"></script>
    <script src="<?php echo e('/js/owl.js'); ?>"></script>
    <script src="<?php echo e('/js/slick.js'); ?>"></script>
    <script src="<?php echo e('/js/isotope.js'); ?>"></script>
    <script src="<?php echo e('/js/accordions.js'); ?>"></script>
    <?php echo $__env->yieldPushContent('inline-scripts'); ?>
</body>
</html>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/layouts/app.blade.php ENDPATH**/ ?>