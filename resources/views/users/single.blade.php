@extends('layouts.app')

@section('content')

    @include('users.includes.user')

    <a href="{{url('/users/' . $user->id . '/albums' )}}"><h4>Albumy</h4></a>
    <hr>
    <a href="{{url('/users/' . $user->id . '/images' )}}"><h4>Zdjęcia</h4></a>
    <hr>

    <div class="row" style="padding: 0 15px;">

        @foreach($user->images as $image)
            <div class="col-md-3 no-padding" style="padding:2px;">
                <img class="img-fluid" src="{{url('storage/users') . '/' . $user->id . '/images/thumb-' . $image->path }}" alt="">
            </div>
        @endforeach

    </div>

@endsection