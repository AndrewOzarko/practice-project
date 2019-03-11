@extends('app')

@section('title', 'Main')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Create group:
            </div>

            <form method="post" action="/groups">
                {{ csrf_field() }}
                <input type="text" name="display_name" placeholder="Group name...">
                @if ($errors->has('display_name'))
                    <div class="error">{{ $errors->first('display_name') }}</div>
                @endif
                <button type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection

