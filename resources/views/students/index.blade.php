@extends('layouts.app')

@section('content')
    <h1>Students</h1>
        @if(count($students)>0)
            <div class="card">
                <ul class="list-group list-group-flush">
                    @foreach($students as $student)
                        <li class="list-group-item">
                            
                            <h3><a href="/students/{{$student->studentid}}">{{$student->firstname}} {{$student->lastname}}</a><h3>
                                
                        </li>

                    @endforeach
                <ul>    
            </div>
        @else
             

        @endif

@endsection