<?php $__env->startSection('title', 'DETAIL BOOK'); ?>

<?php $__env->startSection('content'); ?>
    <div style="background-color: lightskyblue">
        <h3 class="ms-5 ps-5 pt-2 pb-2">Book Details</h3>
    </div>

    <div class="container" style="background-color: cornsilk">
        <div>
            <div class="card" style="width:100%">
                <img class="card-img-top" src="<?php echo e($detailbook->book_image); ?>" alt="">
                <div class="card-body" style="background-color: cornsilk">
                    <h4 class="card-title">Title: <?php echo e($detailbook->book_title); ?></h4>
                    <h4 class="card-title">Author: <?php echo e($detailbook->book_author); ?></h4>
                    <h4 class="card-title">Publisher: <?php echo e($detailbook->publisher->publisher_name); ?></h4>
                    <h4 class="card-title">Year: <?php echo e($detailbook->book_year); ?></h4>
                    <br>
                    <h4>Synopsis:</h4>
                    <p style="font-size: 20px">
                        <?php echo e($detailbook->book_synopsis); ?>

                    </p>
                </div>
            </div>
            </div>
        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SEMESTER 5\UTS\app\GiantBookSup\resources\views/detailbook.blade.php ENDPATH**/ ?>