@extends('app')

@section('title', 'Main')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Student: {{$student->name}} {{$student->surname}}
            </div>

            <div>
                <label style="font-weight: bold" for="email">email:</label> {{$student->email}} <br>
                <label style="font-weight: bold" for="email">birthday:</label> {{$student->birthday}} <br>
                <label style="font-weight: bold" for="email">group:</label> {{$student->group ? $student->group->display_name : 'none'}} <br>
            </div>
        </div>
    </div>
@endsection

