<?php
    $currentRouteName = Route::currentRouteName();
?>

<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <div class="container">
        <a href="<?php echo e(route('home')); ?>" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i> Data Master</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('home')); ?>" class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="<?php echo e(route('employees.index')); ?>" class="nav-link <?php if($currentRouteName == 'employees.index'): ?> active <?php endif; ?>">Employee</a></li>
            </ul>
            <hr class="d-md-none text-white-50">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    <?php if(auth()->guard()->guest()): ?>
                        <?php if(Route::has('login')): ?>
                            <li class="nav-item">
                                <a class="btn btn-outline-light my-2 ms-md-auto" href="<?php echo e(route('login')); ?>"><i class="bi-person-circle me-1"></i><?php echo e(__('Login')); ?></a>
                            </li>
                        <?php endif; ?>

                        
                    <?php else: ?>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="btn btn-outline-light my-2 ms-md-auto" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="bi-person-circle me-1"></i>
                                <?php echo e(Auth::user()->name); ?>

                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item" href="<?php echo e(route('profile')); ?>"> <i class="bi bi-person-fill"></i>
                                    <?php echo e(__('My Profile')); ?>

                                </a>
                                <hr>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="bi bi-lock-fill"></i>
                                    <?php echo e(__('Logout')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>

            
        </div>
    </div>
</nav>
<?php /**PATH C:\Users\ulfad\ocalaravel4\resources\views/layouts/nav.blade.php ENDPATH**/ ?>