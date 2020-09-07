@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary"><a  href="{{ url('/students/create') }}">Add Student</a></li>
                        <li class="list-group-item list-group-item-primary"><a  href="{{ url('/courses/create') }}">Add Course</a></li>
                        <li class="list-group-item list-group-item-primary"><a  href="{{ url('/teachers/create') }}">Add Teacher</a></li>
                        <li class="list-group-item list-group-item-primary"><a  href="{{ url('/student_classes/create') }}">Add Student to Course</a></li>
                      </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
