

<?php $__env->startSection('title', 'Homestay - Rumah Hijau'); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<style>
    .untukBorderHomeStayDetail {
        border-left: 1px solid gray;
        padding-left: 5%;
    }

    .untukIconHomeStay {
        text-align: center;
        font-size: 200%;
    }
</style>
<!-- Kotak 1 Start -->
<div style="margin-top: 2%; margin-bottom: 2%; padding-left: 10%; padding-right: 10%; display: flex">
    <div style="width : 100%; height: 100%; border: groove 2px; border-radius:35px">
        <div style="display: flex; margin: 1%;">
            <ul style="width : 25%; border-right: 1px solid; border-color: #25b448; margin: 1%;">
                <li style="list-style: none; color: #25b448; margin-right: 20%;">
                    Location
                </li>

                <li style="list-style: none">
                    Jakarta, Indonesia
                </li>
            </ul>

            <ul style="width : 25%; border-right: 1px solid; border-color: #25b448; margin: 1%;">
                <li style="list-style: none; margin-right: 20%; color: #25b448;">
                    Check In:
                </li>

                <li style="list-style: none">
                    <form action="/action_page.php">
                        <input type="date" id="birthday" name="birthday" style="border: solid 0px;">
                    </form>
                </li>
            </ul>

            <ul style="width : 25%; border-right: 1px solid; border-color: #25b448; margin: 1%">
                <li style="list-style: none; margin-right: 20%; color: #25b448;">
                    Check Out:
                </li>

                <li style="list-style: none">
                    <form action="/action_page.php">
                        <input type="date" id="birthday" name="birthday" style="border: solid 0px;">
                    </form>
                </li>
            </ul>

            <ul style="width : 25%">
                <li style="list-style: none; margin-left: -60px; color: #25b448; display: flex;">
                    <button type="submit" class="btn btn-primary mb-2"
                        style="width : 200px; margin-top: 20px; margin-left: 50px; background: linear-gradient(to right, #f0572e, #f0312e); border-top-left-radius: 15px; border-top-right-radius: 15px; border-bottom-right-radius: 15px; border-bottom-left-radius: 15px">
                        Search </button>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Kotak 1 End -->

<!-- Price Range Start -->
<div style="display: flex; box-sizing: border-box; padding: 0 20px;" id="homeStay">
<!-- <div style="display: flex; box-sizing: border-box; padding: 0 20px; border: 1px solid #ddd; border-radius: 5px;" id="homeStay"> -->
    <ul style="width : 25%">
        <li style="list-style: none">
            <P style="color: #25b448">
                <b>
                    Price Range
                </b>
            </P>

            <div style="width: 100%; display: flex">
                <input type="text" class="form-control" id="inputPrice1" placeholder="min"
                    style="width: 100px; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px">
                <input type="text" class="form-control" id="inputPrice2" placeholder="max"
                    style="margin-left: 20px; width: 100px; border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px">
            </div>

            <p style="margin-top: 5%; color: #25b448">
                <b>
                    Sort by
                </b>
            </p>

            <div style="width: 100%; margin-top: -5%; display: flex; align-items:center;">
                <input type="radio" class="form-control" name="sort_by" id="price" placeholder="min"
                    style="width: 15px;" value="1">
                <p style="margin-top: 2.2%; margin-left: 3%">
                    Lower Price
                </p>
            </div>

            <div style="width: 100%; margin-top: -5%; display: flex; align-items:center;">
                <input type="radio" class="form-control" name="sort_by" id="price" placeholder="min"
                    style="width: 15px;" value="2">
                <p style="margin-top: 2.2%; margin-left: 3%">
                    High Price
                </p>
            </div>


            <div style="width: 100%; margin-top: -5%; display: flex; align-items:center;">
                <input type="radio" class="form-control" name="sort_by" id="like" placeholder="min"
                    style="width: 15px;" value="2">
                <p style="margin-top: 2.2%; margin-left: 3%">
                    Most Likes
                </p>
            </div>

            <p style="margin-top: 2%; color: #25b448">
                <b>
                    Facilities
                </b>
            </p>

            <div style="width: 100%; margin-top: -5%; display: flex; align-items:center;">
                <input type="radio" class="form-control" name="facilities" id="1" placeholder="min"
                    style="width: 15px;">
                <p style="margin-top: 2.2%; margin-left: 3%">
                    Wifi
                </p>
            </div>

            <div style="width: 100%; margin-top: -5%; display: flex; align-items:center;">
                <input type="radio" class="form-control" name="facilities" id="2" placeholder="min"
                    style="width: 15px;">
                <p style="margin-top: 2.2%; margin-left: 3%">
                    Parking
                </p>
            </div>

            <div style="width: 100%; margin-top: -5%; display: flex; align-items:center;">
                <input type="radio" class="form-control" name="facilities" id="3" placeholder="min"
                    style="width: 15px;">
                <p style="margin-top: 2.2%; margin-left: 3%">
                    AC
                </p>
            </div>
            <div style="width: 100%; margin-top: -5%; display: flex; align-items:center;">
                <input type="radio" class="form-control" name="facilities" id="4" placeholder="min"
                    style="width: 15px;">
                <p style="margin-top: 2.2%; margin-left: 3%">
                    Restaurant
                </p>
            </div>
        </li>
    </ul>
                
    <ul id="list-item" style="width : 75%">
        
        <?php $__currentLoopData = $hs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li style="list-style: none; width: 100%; border: outset 3px; border-radius: 35px; margin-bottom: 5%">
            <div style="width: 100%; height: 100%">
                <div style="display: flex">
                    <ul style="width: 45%; padding-left: 1%">
                        <li style="list-style: none; width: 100%;">
                            <!-- <div style="">
                                <img src="<?php echo e(Storage::url($data->thumbnail)); ?>" alt=""
                                    style="width: 100%; padding-top: 5%; padding-left: 2%; padding-bottom: 5%">
                            </div> -->
                            <div style="max-width: 100%; height: auto; text-align: center;">
                                <img src="<?php echo e(Storage::url($data->homestay_photo[0]->path)); ?>" alt="Thumbnail" style="max-width: 100%; height: auto;">
                            </div>
                        </li>
                    </ul>
                    <ul style="width: 35%; padding-left: 2%; padding-top: 2%">
                        <li style="list-style: none;">
                            <h5>
                                <?php echo e($data->name); ?>

                            </h5>
                        </li>
                        <li style="list-style: none;">
                            <?php
                            $idx = 5-$data->rating;
                            ?>

                            <?php for($i=1; $i<=$data->rating; $i++): ?>
                                <i style="color:#ffdf00" class="bi bi-star-fill"></i>
                                <?php if(fmod($data->rating, 1) !== 0.00 && $i+0.5==$data->rating): ?>
                                <i style="color:#ffdf00" class="bi bi-star-half"></i>
                                <?php endif; ?>
                                <?php endfor; ?>
                                <?php for($i=1; $i<=$idx; $i++): ?> <i style="color:#ffdf00" class="bi bi-star"></i>
                                    <?php endfor; ?>
                        </li>
                        <li style="list-style: none;">
                            <h5>
                                <?php if($data->wifi==1): ?>
                                <i class="fa fa-wifi"></i>
                                <?php endif; ?>
                                <?php if($data->restaurant==1): ?>
                                <i class="fa fa-cutlery"></i>
                                <?php endif; ?>
                                <?php if($data->parking==1): ?>
                                <i class="fa fa-product-hunt"></i>
                                <?php endif; ?>
                                <?php if($data->ac==1): ?>
                                <img width="18px" src="/gambar/Vector.svg" alt="">
                                <?php endif; ?>
                            </h5>
                        </li>
                    </ul>

                    
                    <ul style="width: 20%; margin-right: 2%; padding-top: 17%">
                        <li style="list-style: none;">
                            <h5>
                                IDR <?php echo e($data->price); ?>/night
                            </h5>
                        </li>

                        <li style="list-style: none; display: flex;">
                            <button type="submit"
                                onclick="document.getElementById('homeStayDetail<?php echo e($data->id); ?>').style.display='block'; document.getElementById('homeStay').style.display='none'"
                                
                                class="btn btn-primary mb-2 butto"
                                style="width: 100%; background: linear-gradient(to right, #27b448, #72b426); border-radius: 15px">
                                Details </button>
                        </li>
                    </ul>
                </div>
            </div>
        </li>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
    </ul>
</div>

<?php $__currentLoopData = $hs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div id="homeStayDetail<?php echo e($data->id); ?>" style="width:100%;box-sizing: border-box;padding: 5%; display: none">
    <button type="submit"
        onclick="document.getElementById('homeStayDetail<?php echo e($data->id); ?>').style.display='none'; document.getElementById('homeStay').style.display='flex'"
        class="btn btn-primary mb-2"
        style="width: 10%; background: linear-gradient(to right, #27b448, #72b426); border-radius: 15px"> Go Back
    </button>

    <p style="font-size: 150%; font-weight: bold"><?php echo e($data->name); ?></p>
    <p style="font-weight: bold"><i class="fa fa-map-marker"></i> <?php echo e($data->location); ?></p>
    <div style="font-weight: bold">
        <?php
        $idx = 5-$data->rating;
        ?>
        <?php for($i=1; $i<=$data->rating; $i++): ?>
            <i style="color:#ffdf00" class="bi bi-star-fill"></i>
            <?php if(fmod($data->rating, 1) !== 0.00 && $i+0.5==$data->rating): ?>
            <i style="color:#ffdf00" class="bi bi-star-half"></i>
            <?php endif; ?>
            <?php endfor; ?>
            <?php for($i=1; $i<=$idx; $i++): ?> <i style="color:#ffdf00" class="bi bi-star"></i>
                <?php endfor; ?>
                
                <?php echo e($data->like/1000); ?>K
                <i class="fa fa-thumbs-up"></i>
                <div style="text-align: right; translate: 0% -110%">
                    <a href="https://api.whatsapp.com/send?phone=6285155488011&text=Saya%20Ingin%20Booking%20Tempat%20<?php echo e($data->name); ?>" target="_blank"
                        class="btn btn-success mb-2"
                        style="background: linear-gradient(to right, #27b448, #72b426); border-radius: 15px; padding: 1%; padding-right: 5%; padding-left: 5%; font-weight: bold; font-size: 125%">
                        Reserve
                    </a>
                </div>

    </div>
    <div style="display: flex;justify-content:center;align-items: center;width: fit-content; height:fit-content;margin-bottom: 30px">
        <?php $__currentLoopData = $data->homestay_photo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pho): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($data->index == 1): ?>
            <img src="<?php echo e(Storage::url($pho->path)); ?>"
                style="width: 50%; float: left; margin: 1%; border-top-left-radius: 20px; border-bottom-left-radius: 20px">
            <?php else: ?>
            <div class="tes" style="width:100;display:grid;grid-template-columns: 1fr 1fr ;grid-template-rows: 1fr 1fr; row-gap: 10px; column-gap: 30px">
                <img src="<?php echo e(Storage::url($pho->path)); ?>" style="width: 100%; float: left; margin: 1%">
            </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div style="display: flex;">
        <ul style="list-style: none; width: 40%">
            <li>
                <b>
                    <p style="margin: 1%; font-size: 125%">Entire hotel hosted by <?php echo e($data->host); ?></p>
                    <p style="margin-bottom: 7%"><?php echo e($data->guest); ?> guest - <?php echo e($data->bedroom); ?> bedrooms - <?php echo e($data->bed); ?>

                        beds - <?php echo e($data->bath); ?> baths</p>
                    <p style="font-size: 125%">What this places offers</p>
                    <div style="display: flex; width: 100%; translate: -5% 0%">
                        <?php if($data->wifi==1): ?>
                        <div style="width: 20%; text-align:center">
                            <i class="fa fa-wifi" style="font-size: 250%"></i>
                            <p>Wifi</p>
                        </div>
                        <?php endif; ?>
                        <?php if($data->parking==1): ?>
                        <div style="width: 20%; text-align:center">
                            <i style="font-size: 250%" class="fa fa-product-hunt"></i>
                            <p>Parking</p>
                        </div>
                        <?php endif; ?>
                        <?php if($data->restaurant==1): ?>
                        <div style="width: 20%; text-align:center">
                            <i style="font-size: 250%" class="fa fa-cutlery"></i>
                            <p>Restaurant</p>
                        </div>
                        <?php endif; ?>
                        <?php if($data->ac==1): ?>
                        <div style="width: 20%; text-align:center">

                            <img width="27%" src="/gambar/Vector.svg" alt="">
                            <p>AC</p>
                        </div>
                        <?php endif; ?>
                    </div>
                </b>
            </li>
        </ul>
        <ul style="list-style: none; width: 60%">
            <table style="width: 100%" cellpadding="10">
                <tr style="font-size: 150%">
                    <th>Nearby Place</th>
                    <th></th>
                    <th class="untukBorderHomeStayDetail">Popular in the Area</th>
                    <th></th>
                </tr>
                <?php if(!$data->nearby_place->isEmpty()): ?>
                <?php $__currentLoopData = $data->nearby_place; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $np): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($np->name); ?></td>
                    <td style="color: gray"><?php echo e($np->distance); ?> Km</td>
                    <td class="untukBorderHomeStayDetail"><?php echo e($np->name); ?></td>
                    <td style="color: gray"><?php echo e($np->distance); ?> Km</td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                
                <?php endif; ?>
            </table>
        </ul>


    </div>
    <div style="width: 100%">
        <p style="font-weight: bold; font-size: 150%">Location info</p>
        <p style="font-weight: bold"><i class="fa fa-map-marker"></i> <?php echo e($data->location); ?></p>
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="100%" height="510" id="gmap_canvas"
                    src="https://maps.google.com/maps?q=<?php echo e($data->maps); ?>&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                    href="https://2yu.co">2yu</a><br>
                <style>
                    .mapouter {
                        position: relative;
                        text-align: right;
                        height: 510px;
                        width: 100%;
                    }

                </style><a href="https://embedgooglemap.2yu.co">html embed google map</a>
                <style>
                    .gmap_canvas {
                        overflow: hidden;
                        background: none !important;
                        height: 510px;
                        width: 100%;
                    }

                </style>
            </div>
        </div>
        
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
    // SORTING
    
    //tester two start
    $('input[type=radio][name=sort_by]').change(function() {
        var url = "<?php echo e(url('/homestay')); ?>";
        var sort_by = $('input[type=radio][name=sort_by]:checked').val();
        window.location.href = url + "?sort_by=" + sort_by;
    });
    //tester two end
    
    function dynamicSort(property, sorting) {
        var sortOrder = 1;
        if (property[0] === "-") {
            sortOrder = -1;
            property = property.substr(1);
        }
        return function (a, b) {
            // kecil gede
            if (sorting == 1) {
                var result = (a[property] < b[property]) ? -1 : (a[property] > b[property]) ? 1 : 0;
            }

            // gede kecil
            else if (sorting == 2) {
                var result = (a[property] > b[property]) ? -1 : (a[property] < b[property]) ? 1 : 0;
            }
            return result * sortOrder;
        }
    }

    $(document).ready(function(){
        $('input[type=radio][name=facilities]').on('click', function(){
            var tes = $(this).val();
            var params = this.id;
                    // console.log(params)
            $.ajax({
                url: "<?php echo e(route('filter')); ?>",
                type: 'GET',
                data: {'id': params},
                success: function(data){
                    // console.log(data);
                    // data.homes.sort(dynamicSort(params, tes));
                    var html = "";
                    var home = data.homes;
                    if(home.length > 0){
                        for(let i = 0; i<home.length; i++){
                            var star = "";
                            for(let y=1; y <= home[i].rating; y++){
                                star += "<i style='color:#ffdf00' class='bi bi-star-fill'></i>"
                                if(home[i].rating % 1 != 0 && y+0.5==home[i].rating){
                                    star += "<i style='color:#ffdf00' class='bi bi-star-half'></i>"
                                }
                            }
                            for(let y=1; y<5-home[i].rating; y++){
                                if(y+0.5 != home[i].rating){
                                    star+="<i style='color:#ffdf00' class='bi bi-star'></i>"
                                }
                            }

                            var wifi=""
                            if(home[i].wifi==1){
                                wifi+="<i class='fa fa-wifi'></i>"
                            }
                            var res=""
                            if(home[i].restaurant==1){
                                resss+=" <i class='fa fa-cutlery'></i>"
                            }
                            var park=""
                            if(home[i].parking==1){
                                park+="<i class='fa fa-product-hunt'></i>"
                            }
                            var ac=""
                            if(home[i].ac==1){
                                ac+="<img width='18px' src='/gambar/Vector.svg'>"
                            }

                            html +="<li style='list-style: none; width: 100%; border: outset 3px; border-radius: 35px; margin-bottom: 5%'><div style='width: 100%; height: 100%'><div style='display: flex'><ul style='width: 45%; padding-left: 1%'><li style='list-style: none;'><img src='assets/img/"+ home[i].thumbnail+ "' style='width: 100%; padding-top: 5%;padding-left: 2%; padding-bottom: 5%'></li></ul>" + "<ul style='width: 35%; padding-left: 2%; padding-top: 2%'><li style='list-style: none;'><h5>" + home[i].name +"</h5></li><li style='list-style:none;'>" + star + "</li><li style='list-style: none;'><h5>" + wifi + res + park+ ac +"</h5></li></ul>" + "<ul style='width: 20%; margin-right: 2%; padding-top: 17%'><li style='list-style: none;'><h5>IDR " + home[i].price + "/night</h5> </li><li style='list-style: none; display: flex;'><button type='submit' onclick=" + "document.getElementById('homeStayDetail"+ home[i].id + "').style.display='block'; document.getElementById('homeStay').style.display='none'class='btn btn-primary mb-2'style='width: 100%; background:linear-gradient(to right, #27b448, #72b426); border-radius: 15px'>Details</button></li></ul></div></div></li>"
                        }
                        $("#list-item").html(html);
                        // console.log(html);
                    }
                    else {
                        var html = "No Record Available"
                        $("#list-item").html(html);
                    }
                }
            })
        });

        $('input[type=radio][name=sort_by]').on('click', function(){
            var tes = $(this).val();
            var params = this.id;
            $.ajax({
                url: "<?php echo e(route('filter')); ?>",
                type: 'GET',
                data: {'tes': tes},
                success: function(data){
                    // console.log(data);
                    data.homes.sort(dynamicSort(params, tes));
                    var html = "";
                    var home = data.homes;
                    if(home.length > 0){
                        for(let i = 0; i<home.length; i++){
                            var star = "";
                            for(let y=1; y <= home[i].rating; y++){
                                star += "<i style='color:#ffdf00' class='bi bi-star-fill'></i>"
                                if(home[i].rating % 1 != 0 && y+0.5==home[i].rating){
                                    star += "<i style='color:#ffdf00' class='bi bi-star-half'></i>"
                                }
                            }
                            for(let y=1; y<5-home[i].rating; y++){
                                if(y+0.5 != home[i].rating){
                                    star+="<i style='color:#ffdf00' class='bi bi-star'></i>"
                                }
                            }

                            var wifi=""
                            if(home[i].wifi==1){
                                wifi+="<i class='fa fa-wifi'></i>"
                            }
                            var res=""
                            if(home[i].restaurant==1){
                                resss+=" <i class='fa fa-cutlery'></i>"
                            }
                            var park=""
                            if(home[i].parking==1){
                                park+="<i class='fa fa-product-hunt'></i>"
                            }
                            var ac=""
                            if(home[i].ac==1){
                                ac+="<img width='18px' src='/gambar/Vector.svg'>"
                            }

                            html +="<li style='list-style: none; width: 100%; border: outset 3px; border-radius: 35px; margin-bottom: 5%'><div style='width: 100%; height: 100%'><div style='display: flex'><ul style='width: 45%; padding-left: 1%'><li style='list-style: none;'><img src='assets/img/"+ home[i].thumbnail+ "' style='width: 100%; padding-top: 5%;padding-left: 2%; padding-bottom: 5%'></li></ul>" + "<ul style='width: 35%; padding-left: 2%; padding-top: 2%'><li style='list-style: none;'><h5>" + home[i].name +"</h5></li><li style='list-style:none;'>" + star + "</li><li style='list-style: none;'><h5>" + wifi + res + park+ ac +"</h5></li></ul>" + "<ul style='width: 20%; margin-right: 2%; padding-top: 17%'><li style='list-style: none;'><h5>IDR " + home[i].price + "/night</h5> </li><li style='list-style: none; display: flex;'><button type='submit' onclick=" + "document.getElementById('homeStayDetail"+ home[i].id + "').style.display='block'; document.getElementById('homeStay').style.display='none'class='btn btn-primary mb-2'style='width: 100%; background:linear-gradient(to right, #27b448, #72b426); border-radius: 15px'>Details</button></li></ul></div></div></li>"
                        }
                        $("#list-item").html(html);
                        console.log(html);
                    }

                }
            })
        });
    });

</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Binus\RumahLestariHijau\resources\views/homestay.blade.php ENDPATH**/ ?>