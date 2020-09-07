@extends('layouts.app')

@section('content')
    <a href="/courses" class="btn btn-primary">Go Back</a>
    <hr>
    <div class="well">

        <h1>COURSE DETAILS</h1>
        <h3>Course ID: {{$course->courseid}}</h3>
        <h3>Title: {{$course->title}}</h3>
        <br>
        <h1>TEACHER:</h1>
        <h3>First Name: {{$teacher ->firstname}}</h3>
        <h3>Last Name: {{$teacher ->lastname}}</h3>
        <hr>
        <h1>STUDENTS:</h1>
        @if(count($courseStudents)>0)
        <div class="card">
            <ul class="list-group list-group-flush">
                @foreach($courseStudents as $student)
                    <li class="list-group-item">
                        <div class="float-left">
                            <h3>{{$student->firstname}} {{$student->lastname}}<h3>
                        </div>

                        @guest

                        @else
                        <div class="float-right">
                            {!! Form::open(['action' => ['StudentClassesController@destroy',$student->studentid], 'method' => 'POST', 'class'=> 'pull-right']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{Form::hidden('studentid', $student->studentid,['class' => 'form-control', 'placeholder'=>'Student ID'])}}
                            {{Form::hidden('courseid', $course->courseid,['class' => 'form-control', 'placeholder'=>'Student ID'])}}
                            {{Form::submit('Remove student', ['class'=>'btn btn-danger'])}}
                            {!! Form::close() !!}
                        </div>  
                        @endguest
                          
                    </li>

                @endforeach
            <ul>    
        </div>
    @else
         

    @endif


    </div>
    <hr>
    @guest
    
    @else
    <a href="{{$course->courseid}}/edit" class="btn btn-default">Edit</a>

    {!! Form::open(['action' => ['CoursesController@destroy', $course->courseid], 'method' => 'POST', 'class'=> 'pull-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
    @endguest
   

            

@endsection