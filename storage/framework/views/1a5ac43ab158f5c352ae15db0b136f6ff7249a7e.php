

<?php $__env->startSection('content'); ?>
    <h1>Edit Course</h1>

    <?php echo Form::open(['action' => ['CoursesController@update', $course->courseid], 'method' => 'POST']); ?>

    
    <div class="form-group">
        <?php echo e(Form::label('courseid', 'Course ID')); ?>

        <?php echo e(Form::text('courseid',$course->courseid, ['class' => 'form-control', 'placeholder'=>'Course ID'])); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('title', 'Course Title')); ?>

        <?php echo e(Form::text('title', $course->title,['class' => 'form-control', 'placeholder'=>'Course Title'])); ?>


    </div>
    <div class="form-group">
        <?php echo e(Form::label('teacherid', 'Teacher ID')); ?>

        <?php echo e(Form::text('teacherid', $course->teacherid,['class' => 'form-control', 'placeholder'=>'Teacher ID'])); ?>


    </div>
    <?php echo e(Form::hidden('_method','PUT')); ?>

    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

   

    <?php echo Form::close(); ?>

        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simpleWebApp\resources\views/courses/edit.blade.php ENDPATH**/ ?>