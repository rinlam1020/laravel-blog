<ul class="navbar-nav navbar-sidenav">
    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="<?php echo app('translator')->get('dashboard.dashboard'); ?>">
        <a class="nav-link <?php echo e(request()->route()->named('admin.dashboard') ? 'active' : ''); ?>" href="<?php echo e(route('admin.dashboard')); ?>">
            <i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;
            <span class="nav-link-text"><?php echo app('translator')->get('dashboard.dashboard'); ?></span>
        </a>
    </li>

    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="<?php echo app('translator')->get('dashboard.posts'); ?>">
        <a class="nav-link <?php echo e(request()->route()->named('admin.posts.*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.posts.index')); ?>">
            <i class="fa fa-file-text" aria-hidden="true"></i>&nbsp;
            <span class="nav-link-text"><?php echo app('translator')->get('dashboard.posts'); ?></span>
        </a>
    </li>

    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="<?php echo app('translator')->get('dashboard.comments'); ?>">
        <a class="nav-link <?php echo e(request()->route()->named('admin.comments.*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.comments.index')); ?>">
            <i class="fa fa-comments" aria-hidden="true"></i>&nbsp;
            <span class="nav-link-text"><?php echo app('translator')->get('dashboard.comments'); ?></span>
        </a>
    </li>

    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="<?php echo app('translator')->get('dashboard.users'); ?>">
        <a class="nav-link <?php echo e(request()->route()->named('admin.users.*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.users.index')); ?>">
            <i class="fa fa-users" aria-hidden="true"></i>&nbsp;
            <span class="nav-link-text"><?php echo app('translator')->get('dashboard.users'); ?></span>
        </a>
    </li>

    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="<?php echo app('translator')->get('dashboard.media'); ?>">
        <a class="nav-link <?php echo e(request()->route()->named('admin.media.*') ? 'active' : ''); ?>" href="<?php echo e(route('admin.media.index')); ?>">
            <i class="fa fa-file" aria-hidden="true"></i>&nbsp;
            <span class="nav-link-text"><?php echo app('translator')->get('dashboard.media'); ?></span>
        </a>
    </li>

</ul>

<ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
        </a>
    </li>
</ul>
<?php /**PATH /Users/rin/Sites/laravel-blog/resources/views/admin/shared/sidebar.blade.php ENDPATH**/ ?>