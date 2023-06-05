

<?php $__env->startSection('title', 'Culinary - Rumah Hijau'); ?>

<?php $__env->startSection('content'); ?>
<!-------------------------- Sort-Start -------------------------------->
<div style="margin-left: 5px; margin-top: 100px">
    <ul style="display: flex">
        <li style="list-style: none; min-width: 250px;">
            

            <p style="margin-top: 20px; color: #25b448">
                <b>
                    Sort by
                </b>
            </p>

            <div style="width: 100%; margin-top: 0px; display: flex">
                <input type="radio" class="form-control" id="price" placeholder="min" style="width: 15px;"
                    name="sort_by" value="1">
                <p style="margin-top: 6px; margin-left: 10px">
                    Lower Price
                </p>
            </div>

            <div style="width: 100%; margin-top: 0px; display: flex">
                <input type="radio" class="form-control" id="price" placeholder="min" style="width: 15px;"
                    name="sort_by" value="2">
                <p style="margin-top: 6px; margin-left: 10px">
                    High Price
                </p>
            </div>


            <div style="width: 100%; margin-top: 0px; display: flex">
                <input type="radio" class="form-control" id="like" placeholder="min" style="width: 15px;"
                    name="sort_by" value="2">
                <p style="margin-top: 6px; margin-left: 10px">
                    Most Like
                </p>
            </div>
        </li>

        <!-------------------------- Sort-End -------------------------------->

        <!-------------------------- Menu-Start -------------------------------->
        <li  style="list-style: none; margin-left: 200px">
            <h3>
                <div style="width: 50%; float: left;">
                    <b style="color: #25b448">
                        What's
                    </b>
                    <b style="color: #094222">
                        NEW!
                    </b>
                </div>
                <div style="width: 40%; float: left;">
                    <form class="example" action="/action_page.php" style="margin:auto;">
                        <input type="text" placeholder="Search.." name="search2">
                        <button type="submit"><i class="fa fa-search" style="font-size: 225%"></i></button>
                    </form>
                </div>
            </h3>

            <br> <br> <br>
            <img src="gambar/cul.svg" width="90%" style="border-radius: 30px;">

            <br> <br>

            <div id="list-item" style="width: 90%; display:inline-block">
                <?php $__currentLoopData = $culi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div style="width: 30%; margin: 1%; display:inline-block">
                    
                    <td><img src="<?php echo e(Storage::url($data->photo[0]->path)); ?>" alt="" width="100px"></td>
                    <p style="font-weight: bold"><?php echo e($data->name); ?></p>
                    <button class="openbtnCulinary" onclick="openForm(<?php echo e($data->id); ?>)">More</button>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </li>
    </ul>

    <!------------------------------------- Popup-Gambar-Start -------------------------->


<?php $__currentLoopData = $culi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div id="myOverlay<?php echo e($data->id); ?>" class="overlayCulinary">
    <div class="wrapCulinary">
        <span class="ratingCulinary" title="Rating">
        </span>

        <span class="closebtnCulinary" onclick="closeForm(<?php echo e($data->id); ?>)" title="Close"> X </span>
        <div class="rates">
            <?php echo e($data->like/1000); ?>K <i class="fa fa-thumbs-up"></i>
        </div>
        <div style="text-align: center">
            <b style="color:black; font-size: 200%">Menu Description</b>
        </div>
        <div class="cons">
        <td><img src="<?php echo e(Storage::url($data->photo[0]->path)); ?>" alt="" width="100px"></td>
            <div style="text-align: center; width: 400px">
                <h3><?php echo e($data->name); ?></h3>
                <p style="text-align: justify">
                    <?php echo e($data->description); ?>

                </p>
            </div>
        </div>
        <form>
            <div class="con2">
                <div>
                    Rp. <?php echo e($data->price); ?>

                    <a href="https://api.whatsapp.com/send?phone=6285155488011&text=Saya%20Ingin%20Memesan%20Makanan%20<?php echo e($data->name); ?>" target="_blank"><button type="button">Order Food</button></a>
                </div>
            </div>
        </form>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<script>
    function openForm(id) {
        console.log(id);
        namess = "myOverlay" + id;
        document.getElementById(namess).style.display = "block";
    }

</script>

<script>
    function closeForm(id) {
        namess = "myOverlay" + id;
        document.getElementById(namess).style.display = "none";
    }

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
        $('input[type=radio][name=sort_by]').on('click', function(){
            var tes = $(this).val();
            var params = this.id;
            $.ajax({
                url: "<?php echo e(route('filterc')); ?>",
                type: 'GET',
                data: {'tes': tes},
                success: function(data, data1){
                    //console.log(data);
                    data.homes.sort(dynamicSort(params, tes));
                    var html = "";
                    var home = data.homes;
                    var photo = data.pho;
                    var idx = 0;
                    for(let i = 0; i<home.length; i++){
                        if(home.length > 0){
                            for(let y = 0; y<photo.length; y++){
                                if(photo[y].table_id == home[i].id){
                                    idx = y;
                                }
                            }
                            html += "<div style='width: 30%; margin: 1%; display:inline-block'><img src='assets/img/" + photo[idx].path + "' style='width: 70%; border-radius: 10px'><p style='font-weight: bold'>" + home[i].name + "</p><button class='openbtnCulinary' onclick='openForm("+ home[i].id +")'>More</button></div>"

                        }
                    }
                    $("#list-item").html(html);
                    console.log(data)
                
                }
            })
        });
    });

</script>
<!------------------------------------- Popup-Gambar-End -------------------------->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Downloads\Binus\RumahLestariHijau\resources\views/culinary.blade.php ENDPATH**/ ?>