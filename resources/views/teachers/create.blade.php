@extends('layouts.app')

@section('content')
    <h1>Add Teacher</h1>

    {!! Form::open(['action' => 'TeachersController@store', 'method' => 'POST']) !!}
    
    <div class="form-group">
        {{Form::label('firstname', 'First Name')}}
        {{Form::text('firstname','', ['class' => 'form-control', 'placeholder'=>'First Name'])}}
    </div>

    <div class="form-group">
        {{Form::label('lastname', 'Last Name')}}
        {{Form::text('lastname', '',['class' => 'form-control', 'placeholder'=>'Last Name'])}}

    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
   

    {!! Form::close() !!}
        

@endsection