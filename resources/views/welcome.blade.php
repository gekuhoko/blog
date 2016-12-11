<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{config('owner.name')}}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


        <!--VENDOR STYLESHEET-->
        <link rel="stylesheet" href="/assets/bootstrap.css">
        <link rel="stylesheet" href="/assets/animate.css">

        <!--MAIN STYLESHEET-->
        <link rel="stylesheet" href="/assets/application.css">
        <link id="switch_style" rel="stylesheet" href="/assets/blue.css">
    </head>
    <body>
    @include('partials.googleAnalytics')

    @include('partials.navigationBar')

    <main>
        <div class="container">
            <div class="row">
                <!--BLOG MAINBAR -->
                <div class="main-content col-md-8">
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

            </div>
        </div>
        <hr class="finish-line">
    </main>

    @include('partials.footer')

    <!--SCRIPTS-->
    <script src="/assets/jquery-2.2.4.min.js"></script>
    <script src="/assets/jquery.easing.min.js"></script>
    <script src="/assets/bootstrap.min.js"></script>
    <script src="/assets/masonry-3.1.4.js"></script>

    <!--MAIN SCRIPT-->
    <script src="/assets/main-blog.js"></script>

    </body>
</html>