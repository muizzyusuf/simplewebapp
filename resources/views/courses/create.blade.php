@extends('layouts.app')

@section('content')
    <h1>Add Course</h1>

    {!! Form::open(['action' => 'CoursesController@store', 'method' => 'POST']) !!}
    
    <div class="form-group">
        {{Form::label('courseid', 'Course ID')}}
        {{Form::text('courseid','', ['class' => 'form-control', 'placeholder'=>'Course ID'])}}
    </div>

    <div class="form-group">
        {{Form::label('title', 'Course Title')}}
        {{Form::text('title', '',['class' => 'form-control', 'placeholder'=>'Course Title'])}}

    </div>
    <div class="form-group">
        {{Form::label('teacherid', 'Teacher ID')}}
        {{Form::text('teacherid', '',['class' => 'form-control', 'placeholder'=>'Teacher ID'])}}

    </div>
    
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   

    {!! Form::close() !!}
        

@endsection