@extends('layouts.app')

@section('content')
    <h1>Teachers</h1>
        @if(count($teachers)>0)
            <div class="card">
                <ul class="list-group list-group-flush">
                    @foreach($teachers as $teacher)
                        <li class="list-group-item">
                            
                            <h3><a href="/teachers/{{$teacher->teacherid}}">{{$teacher->firstname}} {{$teacher->lastname}}</a><h3>
                                
                        </li>

                    @endforeach
                <ul>    
            </div>
        @else
             

        @endif

@endsection