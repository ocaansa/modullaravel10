<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="p-6 m-20 bg-white rounded shadow">
        <?php echo $chart->container(); ?>

    </div>

    <script src="<?php echo e($chart->cdn()); ?>"></script>

    <?php echo e($chart->script()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ulfad\ocalaravel10\resources\views/home.blade.php ENDPATH**/ ?>