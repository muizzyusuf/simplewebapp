@extends('layouts.app')

@section('content')
    <h1>Edit Course</h1>

    {!! Form::open(['action' => ['CoursesController@update', $course->courseid], 'method' => 'POST']) !!}
    
    <div class="form-group">
        {{Form::label('courseid', 'Course ID')}}
        {{Form::text('courseid',$course->courseid, ['class' => 'form-control', 'placeholder'=>'Course ID'])}}
    </div>

    <div class="form-group">
        {{Form::label('title', 'Course Title')}}
        {{Form::text('title', $course->title,['class' => 'form-control', 'placeholder'=>'Course Title'])}}

    </div>
    <div class="form-group">
        {{Form::label('teacherid', 'Teacher ID')}}
        {{Form::text('teacherid', $course->teacherid,['class' => 'form-control', 'placeholder'=>'Teacher ID'])}}

    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   

    {!! Form::close() !!}
        

@endsection