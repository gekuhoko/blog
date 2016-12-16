@extends('template')

@section('content')
    <div class="main-content col-md-12">
        {{App\MobileDevice::all()->count()}} devices registered for web push<BR>
        <a class="btn btn-success" href="/backend/create" onclick="(this).prop('disabled', true)">Create</a><BR><BR>

        @foreach ($posts as $post)
            <div class="row" style="border:1px solid lightgrey; padding:10px;">
                <div class="col-md-6">
                    <h6>{{$post->title}}</h6>
                </div>
                <div class="col-md-6" style="border-left:1px solid lightgrey">
                    <a class="btn" href="/backend/delete/{{$post->id}}" onclick="(this).prop('disabled', true)">Delete</a>
                    <a class="btn btn-default" href="/backend/edit/{{$post->id}}" onclick="(this).prop('disabled', true)">Edit</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection