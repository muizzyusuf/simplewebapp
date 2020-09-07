<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary"><a  href="<?php echo e(url('/students/create')); ?>">Add Student</a></li>
                        <li class="list-group-item list-group-item-primary"><a  href="<?php echo e(url('/courses/create')); ?>">Add Course</a></li>
                        <li class="list-group-item list-group-item-primary"><a  href="<?php echo e(url('/teachers/create')); ?>">Add Teacher</a></li>
                        <li class="list-group-item list-group-item-primary"><a  href="<?php echo e(url('/student_classes/create')); ?>">Add Student to Course</a></li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simpleWebApp\resources\views/home.blade.php ENDPATH**/ ?>