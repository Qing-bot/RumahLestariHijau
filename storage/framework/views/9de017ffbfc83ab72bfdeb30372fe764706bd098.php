

<?php $__env->startSection('title', 'Create Destination - Rumah Hijau'); ?>

<?php $__env->startSection('content2'); ?>
<style>
    form {
        box-sizing: border-box;
        padding: 30px 50px;
    }

</style>


<?php if(Auth::check()): ?>
<form method='POST' enctype="multipart/form-data" action="<?php echo e(route('editd',$data->id)); ?>">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name">Name Destination</label>
        <input id="name" type="text" value="<?php echo e($data->name); ?>"class="form-control" name='name' placeholder="Outbond Kuta Bali">
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
        <label for="description">Description Destination</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"><?php echo e($data->description); ?></textarea>
        <?php $__errorArgs = ['description'];
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
        <label for="rundown">Rundown Destination</label>
        <textarea class="form-control" name="rundown" id="rundown" cols="30" rows="10"><?php echo e($data->rundown); ?></textarea>
        <?php $__errorArgs = ['rundown'];
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
        <label for="address">Address Destination</label>
        <input class="form-control" name="address" value="<?php echo e($data->address); ?>" id="address" placeholder="Jl. Anggrek No. 21">
        <?php $__errorArgs = ['address'];
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
        <label for="address">Price Destination</label>
        <input id="price" type="number" class="form-control" name='price' value="<?php echo e($data->price); ?>" placeholder="100000">
        <?php $__errorArgs = ['price'];
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
        <label for="image">Image Destination</label>
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

    <!--
    <?php $__currentLoopData = $price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="form-group">
        <label for="person<?php echo e($loop->index+1); ?>"> Price Destination for </label>
            
        <div id="parent" style="display: flex;">
            <div id="left" style="flex-basis: 50%; flex-grow: 1; flex-shrink: 10; border: 1px;">
                <input id="minp<?php echo e($loop->index+1); ?>" type="number" class="form-control" name='minp<?php echo e($loop->index+1); ?>' 
                style='width:10em' placeholder="100000" value="<?php echo e($price[$loop->index]->min_person); ?>">
            </div>
            -
            <div id="right" style="flex-basis: 50%; flex-grow: 1; flex-shrink: 1; border: 1px;">
                <input id="maxp<?php echo e($loop->index+1); ?>" type="number" class="form-control" name='maxp<?php echo e($loop->index+1); ?>' 
                style='width:10em' placeholder="100000" value="<?php echo e($price[$loop->index]->max_person); ?>">
            </div>
            Pax
        </div>
         
        <input id="price<?php echo e($loop->index+1); ?>" type="number" class="form-control" name='price<?php echo e($loop->index+1); ?>' 
            placeholder="100000" value="<?php echo e($price[$loop->index]->price); ?>">
        
        <?php $__errorArgs = ['price<?php echo e($loop->index+1); ?>'];
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="form-group">
        <label for="personnew"> Left if empty if dont want. Add new Price Destination for </label>
            
        <div id="parent" style="display: flex;">
            <div id="left" style="flex-basis: 50%; flex-grow: 1; flex-shrink: 10; border: 1px;">
                <input id="minpnew" type="number" class="form-control" name='minpnew' 
                style='width:10em' placeholder="2">
            </div>
            -
            <div id="right" style="flex-basis: 50%; flex-grow: 1; flex-shrink: 1; border: 1px;">
                <input id="maxpnew" type="number" class="form-control" name='maxpnew' 
                style='width:10em' placeholder="3">
            </div>
            Pax
        </div>
    </div>
    -->

    <button type="submit" class="btn btn-primary"><?php echo e(__('Edit Destination')); ?></button>
    <?php endif; ?>
</form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admintemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Binus\RumahLestariHijau\resources\views/admin/editDestination.blade.php ENDPATH**/ ?>