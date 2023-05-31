

<?php $__env->startSection('title', 'Edit Promo - Rumah Hijau'); ?>

<?php $__env->startSection('content2'); ?>
<style>
    form {
        box-sizing: border-box;
        padding: 30px 50px;
    }

</style>


<?php if(Auth::check()): ?>
<form method='POST' enctype="multipart/form-data" action="<?php echo e(route('editp', $data->id)); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name">Name Promo</label>
        <input id="name" value="<?php echo e($data->name); ?>" type="text" class="form-control" name='name' placeholder="Promo diskon">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <div class="form-group">
        <label for="image">Image Promo</label>
        <input id="image" type="file" class="form-control" name='image'  accept=".png,.jpg,.jpeg">
        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>

    <button type="submit" class="btn btn-primary"><?php echo e(__('Edit Promo')); ?></button>
    <?php endif; ?>
</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admintemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Binus\RumahLestariHijau\resources\views/admin/editPromo.blade.php ENDPATH**/ ?>