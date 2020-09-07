@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>

    {!! Form::open(['action' => ['StudentsController@update', $student->studentid], 'method' => 'POST']) !!}
    
    <div class="form-group">
        {{Form::label('firstname', 'First Name')}}
        {{Form::text('firstname',$student->firstname , ['class' => 'form-control', 'placeholder'=>'First Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('lastname', 'Last Name')}}
        {{Form::text('lastname', $student->lastname,['class' => 'form-control', 'placeholder'=>'Last Name'])}}

    </div>
    <div class="form-group">
        {{Form::label('address', 'Street')}}
        {{Form::text('address', $address->address,['class' => 'form-control', 'placeholder'=>'Street'])}}

    </div>
    <div class="form-group">
        {{Form::label('city', 'City')}}
        {{Form::text('city', $address->city,['class' => 'form-control', 'placeholder'=>'City'])}}

    </div>
    <div class="form-group">
        {{Form::label('zipcode', 'Zip Code')}}
        {{Form::text('zipcode', $address->zipcode,['class' => 'form-control', 'placeholder'=>'Zip Code'])}}

    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   

    {!! Form::close() !!}
        

@endsection