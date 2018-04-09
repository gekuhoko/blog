@extends('template')

@section('content')
        <!--BLOG MAINBAR -->
    <div class="main-content col-md-8">

        @if(isset($selectedPost))
            @include('partials.blogPost', ['post' => $selectedPost])
            <hr>
            @include('partials.authorPanel')
            {{--
            @if(!session('email'))
                @include('partials.emailSignup')
                <hr>
            @endif
            --}}
        @endif

        @foreach ($posts as $post)
            @include('partials.blogPost', ['post' => $post])
            <hr>
            @include('partials.authorPanel')
            {{--
            @if(!session('email'))
                @include('partials.emailSignup')
                <hr>
            @endif
            --}}
        @endforeach
    </div>

    <!--BLOG SIDEBAR -->
    <div class="side-bar col-md-4">
        @include('partials.textWidget')
        @include('partials.authorWidget')

        {{--@include('partials.searchWidget')--}}
        {{--@include('partials.recentPostsWidget')--}}
        {{--@include('partials.categoriesWidget')--}}
        {{--@include('partials.tagsWidget')--}}
    </div>
@endsection