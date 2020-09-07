

<?php $__env->startSection('content'); ?>
    <h1>Courses</h1>
        <?php if(count($courses)>0): ?>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            
                            <h3><a href="/courses/<?php echo e($course->courseid); ?>"><?php echo e($course->courseid); ?></a><h3>
                                
                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <ul>    
            </div>
        <?php else: ?>
             

        <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simpleWebApp\resources\views/courses/index.blade.php ENDPATH**/ ?>