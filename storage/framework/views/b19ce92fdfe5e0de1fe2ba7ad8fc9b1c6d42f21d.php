

<?php $__env->startSection('content'); ?>
    <h1>Teachers</h1>
        <?php if(count($teachers)>0): ?>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            
                            <h3><a href="/teachers/<?php echo e($teacher->teacherid); ?>"><?php echo e($teacher->firstname); ?> <?php echo e($teacher->lastname); ?></a><h3>
                                
                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <ul>    
            </div>
        <?php else: ?>
             

        <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simpleWebApp\resources\views/teachers/index.blade.php ENDPATH**/ ?>