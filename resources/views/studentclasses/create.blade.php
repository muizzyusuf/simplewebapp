@extends('layouts.app')

@section('content')
    <h1>Add Student to Course</h1>

    {!! Form::open(['action' => 'StudentClassesController@store', 'method' => 'POST']) !!}
    
    <div class="form-group">
        {{Form::label('courseid', 'Course ID')}}
        {{Form::text('courseid','', ['class' => 'form-control', 'placeholder'=>'Course ID'])}}
    </div>

    <div class="form-group">
        {{Form::label('studentid', 'Student ID')}}
        {{Form::text('studentid', '',['class' => 'form-control', 'placeholder'=>'Student ID'])}}

    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   

    {!! Form::close() !!}
        

@endsection