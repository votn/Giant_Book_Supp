<?php $__env->startSection('title', 'BY CATEGORY'); ?>

<?php $__env->startSection('content'); ?>
    <div style="background-color: lightskyblue">
        <h3 class="ms-5 ps-5 pt-2 pb-2">Book List</h3>
    </div>

    <div class="container" style="background-color: cornsilk">
        <div class="row p-md-2 juicy-peach-gradient">
            <?php $__currentLoopData = $newPostC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $NPC): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-3 pt-3">
                <div class="card" style="width:300px">
                    <img class="card-img-top" src="<?php echo e($NPC->book->book_image); ?>" style="height: 440px" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo e($NPC->book->book_title); ?></h4>
                        <h5 style="color: gray">by</h5>
                        <h4><?php echo e($NPC->book->book_author); ?></h4>
                        <a href="/detailbook/<?php echo e($NPC->book->id); ?>" class="btn btn-primary" style="background-color: darkgoldenrod; border-color: darkgoldenrod">Detail</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 5\UTS\app\GiantBookSup\resources\views/category-dropdown.blade.php ENDPATH**/ ?>