@extends('template')

@section('content')
    <div class="main-content col-md-8" style="margin-top: 60px;  padding-left: 0; padding-right: 0;">
        @include('partials.blogPost', ['post' => $post])
        <hr>
        <div class="text-center">
            <a href="{{url('/')}}" class="btn btn-info btn-lg">
                All articles
                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
            </a>
        </div>

        @include('partials.subscribeAndProfilePanel')
    </div>

    <!--BLOG SIDEBAR -->
    <div class="side-bar col-md-4" style="margin-top: 60px;">
        @include('partials.textWidget')
        @include('partials.profileWidget')

        {{--@include('partials.searchWidget')--}}
        {{--@include('partials.recentPostsWidget')--}}
        {{--@include('partials.categoriesWidget')--}}
        {{--@include('partials.tagsWidget')--}}
    </div>
@endsection

