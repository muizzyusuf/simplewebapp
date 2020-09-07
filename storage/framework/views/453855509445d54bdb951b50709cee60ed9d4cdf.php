

<?php $__env->startSection('content'); ?>
    <h1>Add Student</h1>

    <?php echo Form::open(['action' => 'StudentsController@store', 'method' => 'POST']); ?>

    
    <div class="form-group">
        <?php echo e(Form::label('firstname', 'First Name')); ?>

        <?php echo e(Form::text('firstname','', ['class' => 'form-control', 'placeholder'=>'First Name'])); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('lastname', 'Last Name')); ?>

        <?php echo e(Form::text('lastname', '',['class' => 'form-control', 'placeholder'=>'Last Name'])); ?>


    </div>
    <div class="form-group">
        <?php echo e(Form::label('address', 'Street')); ?>

        <?php echo e(Form::text('address', '',['class' => 'form-control', 'placeholder'=>'Street'])); ?>


    </div>
    <div class="form-group">
        <?php echo e(Form::label('city', 'City')); ?>

        <?php echo e(Form::text('city', '',['class' => 'form-control', 'placeholder'=>'City'])); ?>


    </div>
    <div class="form-group">
        <?php echo e(Form::label('zipcode', 'Zip Code')); ?>

        <?php echo e(Form::text('zipcode', '',['class' => 'form-control', 'placeholder'=>'Zip Code'])); ?>


    </div>
    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

   

    <?php echo Form::close(); ?>

        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simpleWebApp\resources\views/students/create.blade.php ENDPATH**/ ?>