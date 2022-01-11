<?php $__env->startSection('title', 'Cakes'); ?>

<h1>TOP BAKERY</h1>
<?php $__env->startSection('content'); ?>

    <h2>Cakes</h2>
    <p>
    	Make your cake or order one directly
    </p>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>