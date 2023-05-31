
<?php $__env->startSection('title', 'Admin Home'); ?>

<?php $__env->startSection('content2'); ?>
    <link rel="stylesheet" href="/css/adminhome.css">
    <div class="kontainer">
        <a href="/">Home</a>
        <a href="/tableHomestay">Homestay</a>
        <a href="/tableCulinary">Culinary</a>
        <a href="/tableDestination">Destination</a>
        <a href="/tablePromo">Promo</a>
        <a href="/tableSouvenir">Souvenirs</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admintemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Binus\RumahLestariHijau\resources\views/admin/home.blade.php ENDPATH**/ ?>