<!DOCTYPE html>
<html>
<head>
    <title>Custom Auth in Laravel 9 </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand mr-auto" href="#">Laravel 9</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if(auth()->guard()->guest()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('register-user')); ?>">Register</a>
                    </li> -->
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('signout')); ?>">Logout</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <?php echo $__env->yieldContent('content'); ?>

		 <div class="container">

			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

     <p> WelCome :  <?php echo e($user->email); ?> </p>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\dhiren\laravel\laravel_demo_app\resources\views/dashboard.blade.php ENDPATH**/ ?>