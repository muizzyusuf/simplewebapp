@extends('layouts.app')

@section('content')
    <a href="/teachers" class="btn btn-primary">Go Back</a>
    <hr>
    <div class="well">

        <h1>TEACHER DETAILS:</h1>
        <h4>First Name: {{$teacher ->firstname}}</h4>
        <h4>Last Name: {{$teacher ->lastname}}</h4>
        <hr>
        <h1>COURSES:</h1>
        <div class="card">
            <ul class="list-group list-group-flush">
                @foreach($courses as $course)
                    <li class="list-group-item">
                        
                    <h3>{{$course->courseid}}: {{$course->title}}<h3>
                            
                    </li>

                @endforeach
            <ul>    
        </div>


    </div>
    <hr>
    @guest
    
    @else
    <a href="{{$teacher->teacherid}}/edit" class="btn btn-default">Edit</a>

    {!! Form::open(['action' => ['TeachersController@destroy', $teacher->teacherid], 'method' => 'POST', 'class'=> 'pull-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
    @endguest
            

@endsection