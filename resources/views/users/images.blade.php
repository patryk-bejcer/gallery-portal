@extends('layouts.app')

@section('content')

    @include('users.includes.user')

    <h4 class="mt-3"><i class="fa fa-image"></i> Zdjęcia użytkownika <a href="{{url('/users/' . $user->id)}}">{{ $user->name }}</a></h4>
    <hr>

    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <div class="" style="padding: 0 15px;">

        <script>
            window.Laravel = <?php echo json_encode([
                'csrt_token' => csrf_token(),
                'user_id' => Auth::id(),
                'author_id' => $user->id,
            ]); ?>
        </script>
        <router-view :user="{{$user->id}}" name="imagesIndex"></router-view>
        <router-view></router-view>
        {{--<ul id="gallery" class="list-unstyled row">--}}
        {{--@foreach($user->images as $image)--}}
        {{--@include('layouts.includes.image')--}}
        {{--@endforeach--}}
        {{--</ul>--}}
        {{--@foreach($user->images as $image)--}}
        {{--@include('layouts.includes.image-right-sidebar')--}}
        {{--@endforeach--}}
    </div>
@endsection