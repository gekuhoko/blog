@extends('template')

@section('content')
        <!--BLOG MAINBAR -->
<div class="main-content col-md-8">
    AUTHOR
</div>

<!--BLOG SIDEBAR -->
<div class="side-bar col-md-4">
    @include('partials.backToBlogWidget')

    {{--@include('partials.searchWidget')
    @include('partials.recentPostsWidget')
    @include('partials.categoriesWidget')
    @include('partials.tagsWidget')--}}
</div>
@endsection