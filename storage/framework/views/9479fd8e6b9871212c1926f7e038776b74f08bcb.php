

<?php $__env->startSection('content'); ?>
    <h1>Edit Student</h1>

    <?php echo Form::open(['action' => ['StudentsController@update', $student->studentid], 'method' => 'POST']); ?>

    
    <div class="form-group">
        <?php echo e(Form::label('firstname', 'First Name')); ?>

        <?php echo e(Form::text('firstname',$student->firstname , ['class' => 'form-control', 'placeholder'=>'First Name'])); ?>

    </div>

    <div class="form-group">
        <?php echo e(Form::label('lastname', 'Last Name')); ?>

        <?php echo e(Form::text('lastname', $student->lastname,['class' => 'form-control', 'placeholder'=>'Last Name'])); ?>


    </div>
    <div class="form-group">
        <?php echo e(Form::label('address', 'Street')); ?>

        <?php echo e(Form::text('address', $address->address,['class' => 'form-control', 'placeholder'=>'Street'])); ?>


    </div>
    <div class="form-group">
        <?php echo e(Form::label('city', 'City')); ?>

        <?php echo e(Form::text('city', $address->city,['class' => 'form-control', 'placeholder'=>'City'])); ?>


    </div>
    <div class="form-group">
        <?php echo e(Form::label('zipcode', 'Zip Code')); ?>

        <?php echo e(Form::text('zipcode', $address->zipcode,['class' => 'form-control', 'placeholder'=>'Zip Code'])); ?>


    </div>
    <?php echo e(Form::hidden('_method','PUT')); ?>

    <?php echo e(Form::submit('Submit', ['class'=>'btn btn-primary'])); ?>

   

    <?php echo Form::close(); ?>

        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\simpleWebApp\resources\views/students/edit.blade.php ENDPATH**/ ?>