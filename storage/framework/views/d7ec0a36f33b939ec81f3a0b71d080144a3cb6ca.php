

<?php $__env->startSection('content'); ?>
    <h1>Add Student to Course</h1>

    <?php echo Form::open(['action' => 'StudentClassesController@store', 'method' => 'POST']); ?>

    
    <div class="form-group">
        <?php echo e(Form::label('courseid', 'Course ID')); ?>

        <?php echo e(Form::text('courseid','', ['class' => 'form-control', 'placeholder'=>'Course ID'])); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('studentid', 'Student ID')); ?>

        <?php echo e(Form::text('studentid', '',['class' => 'form-control', 'placeholder'=>'Student ID'])); ?>


    </div>
    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

   

    <?php echo Form::close(); ?>

        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simpleWebApp\resources\views/studentclasses/create.blade.php ENDPATH**/ ?>