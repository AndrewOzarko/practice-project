@extends('app')

@section('title', 'Main')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Groups... |  <a style="font-size:24px" href="/create-group">Create group</a>
            </div>

            <div>
                @forelse ($groups as $group)
                    <a href="/groups/{{$group->name}}">{{ $group->display_name }} </a> | <a href="/groups/delete/{{$group->name}}">delete</a><br>
                @empty
                    <p>No groups</p>
                @endforelse

            </div>
        </div>
    </div>
@endsection

