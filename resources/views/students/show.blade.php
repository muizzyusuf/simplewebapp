@extends('layouts.app')

@section('content')
    <a href="/students" class="btn btn-primary">Go Back</a>
    <hr>
    <div class="well">

        <h1>STUDENT DETAILS</h1>
        <h3>First Name: {{$student->firstname}}</h3>
        <h3>Last Name: {{$student->lastname}}</h3>
        <br>
        <h1>ADDRESS</h1>
        <h3>Street: {{$address ->address}}</h3>
        <h3>City: {{$address ->city}}</h3>
        <h3>Zip Code: {{$address ->zipcode}}</h3>
        <hr>
        <h1>COURSES</h1>
        <div class="card">
            <ul class="list-group list-group-flush">
                @foreach($courseStudents as $course)
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
    <a href="{{$student->studentid}}/edit" class="btn btn-default">Edit</a>

    {!! Form::open(['action' => ['StudentsController@destroy', $student->studentid], 'method' => 'POST', 'class'=> 'pull-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
    @endguest
            

@endsection