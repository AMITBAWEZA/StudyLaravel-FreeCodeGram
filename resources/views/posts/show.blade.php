@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="/storage/{{$post-> image}}" alt="" class="w-100">
        </div>
        <div class="col-md-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                 <img src="{{$post->user->profile->profileimage()}}"  alt="" class="rounded-circle w-100" style="max-width: 50px">
                </div>
                <div>
                 <h5>{{$post->user->username}}</h5>
                 <a href="#">Follow</a>
                </div>
            </div>
            <p><span><b>{{$post->user->username}}</b></span> {{$post->caption}}</p>
        </div>
    </div>
</div>
@endsection         

