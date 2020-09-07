

<?php $__env->startSection('content'); ?>
    <a href="/courses" class="btn btn-primary">Go Back</a>
    <hr>
    <div class="well">

        <h1>COURSE DETAILS</h1>
        <h3>Course ID: <?php echo e($course->courseid); ?></h3>
        <h3>Title: <?php echo e($course->title); ?></h3>
        <br>
        <h1>TEACHER:</h1>
        <h3>First Name: <?php echo e($teacher ->firstname); ?></h3>
        <h3>Last Name: <?php echo e($teacher ->lastname); ?></h3>
        <hr>
        <h1>STUDENTS:</h1>
        <?php if(count($courseStudents)>0): ?>
        <div class="card">
            <ul class="list-group list-group-flush">
                <?php $__currentLoopData = $courseStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <div class="float-left">
                            <h3><?php echo e($student->firstname); ?> <?php echo e($student->lastname); ?><h3>
                        </div>

                        <?php if(auth()->guard()->guest()): ?>

                        <?php else: ?>
                        <div class="float-right">
                            <?php echo Form::open(['action' => ['StudentClassesController@destroy',$student->studentid], 'method' => 'POST', 'class'=> 'pull-right']); ?>

                            <?php echo e(Form::hidden('_method','DELETE')); ?>

                            <?php echo e(Form::hidden('studentid', $student->studentid,['class' => 'form-control', 'placeholder'=>'Student ID'])); ?>

                            <?php echo e(Form::hidden('courseid', $course->courseid,['class' => 'form-control', 'placeholder'=>'Student ID'])); ?>

                            <?php echo e(Form::submit('Remove student', ['class'=>'btn btn-danger'])); ?>

                            <?php echo Form::close(); ?>

                        </div>  
                        <?php endif; ?>
                          
                    </li>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <ul>    
        </div>
    <?php else: ?>
         

    <?php endif; ?>


    </div>
    <hr>
    <?php if(auth()->guard()->guest()): ?>
    
    <?php else: ?>
    <a href="<?php echo e($course->courseid); ?>/edit" class="btn btn-default">Edit</a>

    <?php echo Form::open(['action' => ['CoursesController@destroy', $course->courseid], 'method' => 'POST', 'class'=> 'pull-right']); ?>

    <?php echo e(Form::hidden('_method','DELETE')); ?>

    <?php echo e(Form::submit('Delete', ['class'=>'btn btn-danger'])); ?>

    <?php echo Form::close(); ?>

    <?php endif; ?>
   

            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simpleWebApp\resources\views/courses/show.blade.php ENDPATH**/ ?>