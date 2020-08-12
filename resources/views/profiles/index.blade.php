@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-3 pt-5 pl-6">
                <img src="{{$user->profile->profileimage()}}" alt="" class="rounded-circle" style="height: 200px">
            </div>
            <div class="col-md-9 p-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex">
                    <h1>{{$user -> username}}</h1>
                    <follow-button user-id = {{$user->id}} follows="{{$follows}}"></follow-button>       
                    </div>
                    @can('update',$user->profile)
                    <a href="/p/create">New Post</a>
                    @endcan 
                </div>
                @can('update',$user->profile)
                 <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan 
                <div class="d-flex">
                    <div class="pr-3"><strong>{{$postCount}}</strong> posts</div>
                    <div class="pr-3"><strong>{{$followers}}</strong> followers</div>
                    <div class="pr-3"><strong>{{$following}}</strong> following</div>
                </div>
                <div class="pt-2"><strong>{{$user->profile->title}}</strong></div>
            <div><p>{{$user->profile->description}}</p></div>
                <div><a href="{{$user->profile->url}}"><strong>{{$user->profile->url}}</strong></a></div>
            </div>
        </div>
        <div class="row">
            @foreach($user->posts as $post)
            <div class="col-md-4 pb-2">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{$post->image}}" alt="" class="w-100">
                </a>
            </div>
            @endforeach
        </div>
</div>
@endsection
