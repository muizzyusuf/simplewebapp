@extends('layouts.app')

@section('content')
    <h1>Add Student</h1>

    {!! Form::open(['action' => 'StudentsController@store', 'method' => 'POST']) !!}
    
    <div class="form-group">
        {{Form::label('firstname', 'First Name')}}
        {{Form::text('firstname','', ['class' => 'form-control', 'placeholder'=>'First Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('lastname', 'Last Name')}}
        {{Form::text('lastname', '',['class' => 'form-control', 'placeholder'=>'Last Name'])}}

    </div>
    <div class="form-group">
        {{Form::label('address', 'Street')}}
        {{Form::text('address', '',['class' => 'form-control', 'placeholder'=>'Street'])}}

    </div>
    <div class="form-group">
        {{Form::label('city', 'City')}}
        {{Form::text('city', '',['class' => 'form-control', 'placeholder'=>'City'])}}

    </div>
    <div class="form-group">
        {{Form::label('zipcode', 'Zip Code')}}
        {{Form::text('zipcode', '',['class' => 'form-control', 'placeholder'=>'Zip Code'])}}

    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   

    {!! Form::close() !!}
        

@endsection