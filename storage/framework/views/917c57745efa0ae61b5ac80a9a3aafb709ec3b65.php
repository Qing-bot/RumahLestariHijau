

<?php $__env->startSection('title', 'Promo - Rumah Hijau'); ?>

<?php $__env->startSection('content'); ?>



<div style="text-align: center; font-size: 250%; font-weight: bold; margin-top: 10%; margin-bottom: 5%; color:#3bb143">Check Our <b style="color: #FF6700">Promos</b> To Get Special<br>Accommondation Prices Here</div>


<div style="font-size: 250%; margin-left: 5%; color: #3bb143; font-weight: bold; margin-bottom: 2%">What's <b style="color: #006400">NEW!</b></div>

<div id="carousel">
    
    
    
    <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="slidePromo"><a href="#"><img src="<?php echo e(Storage::url($data->photo)); ?>" class="promoImage"></a></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
</div>



<div style="font-size: 250%; margin-left: 5%; color: #3bb143; font-weight: bold; margin-bottom: 2%">Last<b style="color: #006400"> Activity!</b></div>
<div id="carousel2">
  

  
  <?php $__currentLoopData = $pro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="slidePromo"><a href="#"><img src="<?php echo e(Storage::url($data->photo)); ?>" class="promoImage"></a></div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<div style="margin-bottom: 10%"></div>


<script>
    // Script Carousel 1
    const carousel = document.querySelector('#carousel');
    let isDown = false;
    let startX;
    let scrollLeft;

    carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        carousel.classList.add('active');
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
    });
    carousel.addEventListener('mouseleave', () => {
        isDown = false;
        carousel.classList.remove('active');
    });
    carousel.addEventListener('mouseup', () => {
        isDown = false;
        carousel.classList.remove('active');
    });
    carousel.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 2;
        carousel.scrollLeft = scrollLeft - walk;
    });

    // Script Carousel 2
    const carousel2 = document.querySelector('#carousel2');
    let isDown2 = false;
    let startX2;
    let scrollLeft2;

    carousel2.addEventListener('mousedown', (e) => {
      isDown2 = true;
      carousel2.classList.add('active');
      startX2 = e.pageX - carousel2.offsetLeft;
      scrollLeft2 = carousel2.scrollLeft;
    });
    carousel2.addEventListener('mouseleave', () => {
      isDown2 = false;
      carousel2.classList.remove('active');
    });
    carousel2.addEventListener('mouseup', () => {
      isDown2 = false;
      carousel2.classList.remove('active');
    });
    carousel2.addEventListener('mousemove', (e) => {
      if(!isDown2) return;
      e.preventDefault();
      const x2 = e.pageX - carousel2.offsetLeft;
      const walk2 = (x2 - startX2) * 2;
      carousel2.scrollLeft = scrollLeft2 - walk2;
    });
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Binus\RumahLestariHijau\resources\views/promo.blade.php ENDPATH**/ ?>