

<?php $__env->startSection('content'); ?>
    <a href="/teachers" class="btn btn-primary">Go Back</a>
    <hr>
    <div class="well">

        <h1>TEACHER DETAILS:</h1>
        <h4>First Name: <?php echo e($teacher ->firstname); ?></h4>
        <h4>Last Name: <?php echo e($teacher ->lastname); ?></h4>
        <hr>
        <h1>COURSES:</h1>
        <div class="card">
            <ul class="list-group list-group-flush">
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        
                    <h3><?php echo e($course->courseid); ?>: <?php echo e($course->title); ?><h3>
                            
                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <ul>    
        </div>


    </div>
    <hr>
    <?php if(auth()->guard()->guest()): ?>
    
    <?php else: ?>
    <a href="<?php echo e($teacher->teacherid); ?>/edit" class="btn btn-default">Edit</a>

    <?php echo Form::open(['action' => ['TeachersController@destroy', $teacher->teacherid], 'method' => 'POST', 'class'=> 'pull-right']); ?>

    <?php echo e(Form::hidden('_method','DELETE')); ?>

    <?php echo e(Form::submit('Delete', ['class'=>'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>

    <?php endif; ?>
            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simpleWebApp\resources\views/teachers/show.blade.php ENDPATH**/ ?>