

<?php $__env->startSection('content'); ?>
    <h1>Students</h1>
        <?php if(count($students)>0): ?>
            <div class="card">
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            
                            <h3><a href="/students/<?php echo e($student->studentid); ?>"><?php echo e($student->firstname); ?> <?php echo e($student->lastname); ?></a><h3>
                                
                        </li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <ul>    
            </div>
        <?php else: ?>
             

        <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simpleWebApp\resources\views/students/index.blade.php ENDPATH**/ ?>