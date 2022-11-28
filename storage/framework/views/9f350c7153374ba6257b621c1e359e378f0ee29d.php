<?php $__env->startSection('title', 'PUBLISHER'); ?>

<?php $__env->startSection('content'); ?>
    <div style="background-color: lightskyblue">
        <h3 class="ms-5 ps-5 pt-2 pb-2">Publisher Data</h3>
    </div>

    <div class="container pb-3" style="background-color: cornsilk">
        <div class="row p-md-2 juicy-peach-gradient">
            <?php $__currentLoopData = $postP; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PP): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 pt-3">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="<?php echo e($PP->publisher_image); ?>" style="height: 200px" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo e($PP->publisher_name); ?></h4>
                        <br>
                        <h6 style="color: gray"><?php echo e($PP->publisher_address); ?></h5>
                        <a href="" class="btn btn-primary" style="background-color: darkgoldenrod; border-color: darkgoldenrod">More</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 5\UTS\app\GiantBookSup\resources\views/publisher.blade.php ENDPATH**/ ?>