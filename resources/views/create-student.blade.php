@extends('app')

@section('title', 'Main')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Create student:
            </div>

            <form method="post" action="/students">
                {{ csrf_field() }}
                <input type="text" name="name" placeholder="name">
                @if ($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
                <br> <br>
                <input type="text" name="surname" placeholder="surname">
                @if ($errors->has('surname'))
                    <div class="error">{{ $errors->first('surname') }}</div>
                @endif
                <br> <br>
                <input type="text" name="email" placeholder="email">
                @if ($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                @endif
                <br><br>
                <label for="birhday">Birthday:</label>
                <input type="date" name="birthday" placeholder="birthday">
                @if ($errors->has('birthday'))
                    <div class="error">{{ $errors->first('birthday') }}</div>
                @endif
                <br><br>
                <select name="group">
                    <option disabled value="0" selected>Not selected</option>
                    @forelse ($groups as $group)
                        <option value="{{$group->id}}">{{$group->display_name}}</option>
                    @empty
                        Not groups
                    @endempty
                </select>
                @if ($errors->has('group'))
                    <div class="error">{{ $errors->first('group') }}</div>
                @endif
                <br><br>


                <button type="submit">Create</button>
            </form>
        </div>
    </div>
@endsection

