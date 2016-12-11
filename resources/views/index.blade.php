@extends('template')

@section('content')
        <!--BLOG MAINBAR -->
    <div class="main-content col-md-8">
        @include('partials.blogPost')
        @include('partials.blogPost')
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