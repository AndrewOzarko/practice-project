@extends('app')

@section('title', 'Main')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                {{$group->display_name}}
            </div>

            <div>
                @forelse ($students as $student)
                    <a href="/students/{{$student->id}}">{{ $student->name }} {{ $student->surname }}</a> | <a href="/students/delete/{{$student->id}}">delete</a><br>
                @empty
                    <p>No students</p>
                @endforelse

            </div>
        </div>
    </div>
@endsection

