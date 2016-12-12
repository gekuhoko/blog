@extends('template')

@section('content')
        <!--BLOG MAINBAR -->
    <div class="main-content col-md-8">
        @foreach ($posts as $post)
            @include('partials.blogPost', ['post' => $post])
        @endforeach
    </div>

    <!--BLOG SIDEBAR -->
    <div class="side-bar col-md-4">
        @include('partials.textWidget')
        @include('partials.authorWidget')

        {{--@include('partials.searchWidget')
        @include('partials.recentPostsWidget')
        @include('partials.categoriesWidget')
        @include('partials.tagsWidget')--}}
    </div>
@endsection