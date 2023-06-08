

<?php $__env->startSection('title', 'Edit Homestay - Rumah Hijau'); ?>

<?php $__env->startSection('content2'); ?>


<style>
    form {
        box-sizing: border-box;
        padding: 30px 50px;
    }

</style>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="alert alert-danger">
      <p><?php echo e($error); ?></p>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php if(Auth::check()): ?>
<form method='POST' action="<?php echo e(route('ediths', $data->id)); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label for="name">Homestay Name</label>
        <input id="name" type="text" class="form-control" name='name' placeholder="Homestay" value="<?php echo e($data->name); ?>">
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
        <label for="host">Homestay Host</label>
        <input id="host" type="text" class="form-control" name='host' value="<?php echo e($data->host); ?>" placeholder="Host">
        <?php $__errorArgs = ['host'];
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
        <label for="location">Homestay Location</label>
        <input id="location" value="<?php echo e($data->location); ?>" type="text" class="form-control" name='location'
            placeholder="Jakarta">
        <?php $__errorArgs = ['location'];
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
        <label for="address">Homestay Address</label>
        <input id="address" type="text" class="form-control" name='address' placeholder="Jl. Anggrek No. 71"
            value="<?php echo e($data->address); ?>">
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
        <label for="price">Homestay Price / Night</label>
        <input id="price" type="text" class="form-control" name='price' placeholder="300000" value="<?php echo e($data->price); ?>">
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
        <label for="rating">Rating Homestay</label>
        <input id="rating" type="text" class="form-control" name='rating' placeholder="5" value="<?php echo e($data->rating); ?>">
        <?php $__errorArgs = ['rating'];
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
        <label for="like">Like Homestay</label>
        <input id="like" type="text" class="form-control" name='like' placeholder="5" value="<?php echo e($data->like); ?>">
        <?php $__errorArgs = ['like'];
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
        <label for="guest">Guest Room Capacity</label>
        <input id="guest" type="number" class="form-control" name='guest' placeholder="5" value="<?php echo e($data->guest); ?>">
        <?php $__errorArgs = ['guest'];
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
        <label for="bedroom">Bedroom Capacity</label>
        <input id="bedroom" type="number" class="form-control" name='bedroom' placeholder="2"
            value="<?php echo e($data->bedroom); ?>">
        <?php $__errorArgs = ['bedroom'];
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
        <label for="bed">Bed/room</label>
        <input id="bed" type="number" class="form-control" name='bed' placeholder="2" value="<?php echo e($data->bed); ?>">
        <?php $__errorArgs = ['bed'];
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
        <label for="bath">Bath/room</label>
        <input id="bath" type="number" class="form-control" name='bath' placeholder="2" value="<?php echo e($data->bath); ?>">
        <?php $__errorArgs = ['bath'];
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

    <?php
    $idx = 0;
    ?>

    <?php $__currentLoopData = $np; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nearbyplace): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <strong>Nearby Place <?php echo e($loop->index+1); ?></strong><br>
    <div class="form-group">
        <label for="nearbyplace<?php echo e($loop->index+1); ?>">Place name</label>
        <?php if(empty($np)): ?>
        <input id="nearbyplace<?php echo e($loop->index+1); ?>" type="text" class="form-control" name='nearbyplace<?php echo e($loop->index+1); ?>'
            placeholder="Nearby Place <?php echo e($loop->index+1); ?>">
        <?php else: ?>
        <input id="nearbyplace<?php echo e($loop->index+1); ?>" type="text" class="form-control" name='nearbyplace<?php echo e($loop->index+1); ?>'
            placeholder="Nearby Place <?php echo e($loop->index+1); ?>" value="<?php echo e($np[$loop->index]->name); ?>">
        <?php endif; ?>

        <?php $__errorArgs = ['place<?php echo e($loop->index+1); ?>'];
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
        <label for="nearbydistance<?php echo e($loop->index+1); ?>">Place Distance (km)</label>
        <?php if(empty($np)): ?>
        <input id="nearbydistance<?php echo e($loop->index+1); ?>" type="text" class="form-control" name='nearbydistance<?php echo e($loop->index+1); ?>'
            placeholder="3">
        <?php else: ?>
        <input id="nearbydistance<?php echo e($loop->index+1); ?>" type="text" class="form-control" name='nearbydistance<?php echo e($loop->index+1); ?>'
            placeholder="3" value="<?php echo e($np[$loop->index]->distance); ?>">
        <?php endif; ?>
        <?php $__errorArgs = ['nearbydistance<?php echo e($loop->index+1); ?>'];
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

    <?php
    $idx+=1;
    ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php for($idx; $idx<4; $idx++): ?>
        <strong>Nearby Place <?php echo e($idx+1); ?></strong><br>
        <div class="form-group">
            <label for="nearbyplace<?php echo e($idx+1); ?>">Place name</label>

            <input id="nearbyplace<?php echo e($idx+1); ?>" type="text" class="form-control" name='nearbyplace<?php echo e($idx+1); ?>'
                placeholder="Place <?php echo e($idx+1); ?>">

            <?php $__errorArgs = ['place<?php echo e($idx+1); ?>'];
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

        <label for="nearbydistance<?php echo e($idx+1); ?>">Place Distance (km)</label>
        <input id="nearbydistance<?php echo e($idx+1); ?>" type="text" class="form-control" name='nearbydistance<?php echo e($idx+1); ?>' placeholder="3">
        <?php $__errorArgs = ['nearbydistance<?php echo e($idx+1); ?>'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <?php endfor; ?>

    <?php
    $idx = 0;
    ?>

    <?php $__currentLoopData = $pp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $popularplace): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <strong>Popular Place <?php echo e($loop->index+1); ?></strong><br>
    <div class="form-group">
        <label for="popularplace<?php echo e($loop->index+1); ?>">Place name</label>
        <?php if(empty($pp)): ?>
        <input id="popularplace<?php echo e($loop->index+1); ?>" type="text" class="form-control" name='popularplace<?php echo e($loop->index+1); ?>'
            placeholder="Popular Place <?php echo e($loop->index+1); ?>">
        <?php else: ?>
        <input id="popularplace<?php echo e($loop->index+1); ?>" type="text" class="form-control" name='popularplace<?php echo e($loop->index+1); ?>'
            placeholder="Popular Place <?php echo e($loop->index+1); ?>" value="<?php echo e($pp[$loop->index]->name); ?>">
        <?php endif; ?>

        <?php $__errorArgs = ['place<?php echo e($loop->index+1); ?>'];
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
        <label for="populardistance<?php echo e($loop->index+1); ?>">Place Distance (km)</label>
        <?php if(empty($pp)): ?>
        <input id="populardistance<?php echo e($loop->index+1); ?>" type="text" class="form-control" name='populardistance<?php echo e($loop->index+1); ?>'
            placeholder="3">
        <?php else: ?>
        <input id="populardistance<?php echo e($loop->index+1); ?>" type="text" class="form-control" name='populardistance<?php echo e($loop->index+1); ?>'
            placeholder="3" value="<?php echo e($pp[$loop->index]->distance); ?>">
        <?php endif; ?>
        <?php $__errorArgs = ['distance<?php echo e($loop->index+1); ?>'];
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

    <?php
    $idx += 1;
    ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php for($idx; $idx<4; $idx++): ?>
        <strong>Popular Place <?php echo e($idx+1); ?></strong><br>
        <div class="form-group">
            <label for="popularplace<?php echo e($idx+1); ?>">Place name</label>

            <input id="popularplace<?php echo e($idx+1); ?>" type="text" class="form-control" name='popularplace<?php echo e($idx+1); ?>'
                placeholder="Popular Place <?php echo e($idx+1); ?>">

            <?php $__errorArgs = ['popularplace<?php echo e($idx+1); ?>'];
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

        <label for="populardistance<?php echo e($idx+1); ?>">Place Distance (km)</label>
        <input id="populardistance<?php echo e($idx+1); ?>" type="text" class="form-control" name='populardistance<?php echo e($idx+1); ?>' placeholder="3">
        <?php $__errorArgs = ['populardistance<?php echo e($idx+1); ?>'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="alert alert-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    <?php endfor; ?>

    <?php
    $idx=0;
    ?>

    <div class="form-group">
        <p>Resource</p>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="wifi" name="wifi" <?php if($data->wifi==1): ?>
            checked
            <?php endif; ?> value="1">
            <label class="form-check-label" for="wifi">Wifi</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="parking" name="parking" <?php if($data->parking==1): ?>
            checked
            <?php endif; ?> value="1">
            <label class="form-check-label" for="parking">Parking</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="restaurant" name="restaurant" <?php if($data->restaurant==1): ?>
            checked
            <?php endif; ?> value="1">
            <label class="form-check-label" for="restaurant">Restaurant</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="ac" name="ac" <?php if($data->ac==1): ?>
            checked
            <?php endif; ?> value="1">
            <label class="form-check-label" for="ac">AC</label>
        </div>
    </div>


    <div class="form-group">
        <label for="thumbnail">Upload Gambar Thumbnail</label>
        <input id="thumbnail" type="file" class="form-control" name='thumbnail' placeholder="Example input"
            accept=".png,.jpg,.jpeg">
        <?php $__errorArgs = ['thumbnail'];
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
        <label for="upload">Upload Gambar 1</label>
        <input id="upload" type="file" class="form-control" name='upload' placeholder="Example input"
            accept=".png,.jpg,.jpeg">
        <?php $__errorArgs = ['upload'];
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
        <label for="upload2">Upload Gambar 2</label>
        <input id="upload2" type="file" class="form-control" name='upload2' placeholder="Example input"
            accept=".png,.jpg,.jpeg">
        <?php $__errorArgs = ['upload2'];
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
        <label for="upload3">Upload Gambar 3</label>
        <input id="upload3" type="file" class="form-control" name='upload3' placeholder="Example input"
            accept=".png,.jpg,.jpeg">
        <?php $__errorArgs = ['upload3'];
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
        <label for="upload4">Upload Gambar 4</label>
        <input id="upload4" type="file" class="form-control" name='upload4' placeholder="Example input"
            accept=".png,.jpg,.jpeg">
        <?php $__errorArgs = ['upload4'];
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

    <button type="submit" class="btn btn-primary"><?php echo e(__('Edit Homestay')); ?></button>
</form>
<?php endif; ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admintemplate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Binus\RumahLestariHijau\resources\views/admin/editHomestay.blade.php ENDPATH**/ ?>