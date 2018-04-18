@extends('template')

@section('content')
    <div class="main-content col-md-8" style="margin-top: 60px; padding-left: 0; padding-right: 0;">
        @foreach ($posts as $post)
            @include('partials.blogPost', ['post' => $post])

            @include('partials.subscribeAndProfilePanel')
            <hr style="margin-top: 45px; margin-bottom: 45px;" class="visible-lg">
            <div class="hidden-lg">
                <br/>
                <br/>
                <br/>
            </div>
        @endforeach
    </div>

    <!--BLOG SIDEBAR -->
    <div class="side-bar col-md-4" style="margin-top: 60px;">
        <div style="margin-top: -15px">
            @include('partials.textWidget')
            @include('partials.profileWidget')
        </div>

        {{--@include('partials.searchWidget')--}}
        {{--@include('partials.recentPostsWidget')--}}
        {{--@include('partials.categoriesWidget')--}}
        {{--@include('partials.tagsWidget')--}}
    </div>
@endsection