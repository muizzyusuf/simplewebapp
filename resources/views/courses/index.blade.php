@extends('layouts.app')

@section('content')
    <h1>Courses</h1>
        @if(count($courses)>0)
            <div class="card">
                <ul class="list-group list-group-flush">
                    @foreach($courses as $course)
                        <li class="list-group-item">
                            
                            <h3><a href="/courses/{{$course->courseid}}">{{$course->courseid}}</a><h3>
                                
                        </li>

                    @endforeach
                <ul>    
            </div>
        @else
             

        @endif

@endsection