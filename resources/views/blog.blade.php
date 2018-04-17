@extends('template')

@section('content')
    <div class="main-content col-md-8" style="margin-top: 60px; padding-left: 0; padding-right: 0;">
        @foreach ($posts as $post)
            @include('partials.blogPost', ['post' => $post])

            @include('partials.profilePanel')
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
        @include('partials.profileWidget')

        {{--@include('partials.searchWidget')--}}
        {{--@include('partials.recentPostsWidget')--}}
        {{--@include('partials.categoriesWidget')--}}
        {{--@include('partials.tagsWidget')--}}
    </div>
@endsection