<nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-lg">
    <div class="container">
        <!-- Branding Image -->
        <?php echo e(link_to_route('home', config('app.name', 'Laravel'), [], ['class' => 'navbar-brand'])); ?>


        <!-- Collapsed Hamburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php echo $__env->make('admin/shared/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?>

                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <?php echo e(link_to_route('users.show', __('users.public_profile'), Auth::user(), ['class' => 'dropdown-item'])); ?>

                        <?php echo e(link_to_route('users.edit', __('users.settings'), [], ['class' => 'dropdown-item'])); ?>


                        <div class="dropdown-divider"></div>

                        <a href="<?php echo e(url('/logout')); ?>"
                            class="dropdown-item"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            <?php echo app('translator')->get('auth.logout'); ?>
                        </a>

                        <form id="logout-form" class="d-none" action="<?php echo e(url('/logout')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/shared/navbar.blade.php ENDPATH**/ ?>