<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{config('owner.name')}}</title>

        <!-- ////////////////////////////////////////////////////////////////////////////// -->
        <!-- Note : The code of this website is written with PHP Laravel from scratch -->
        <!-- You can check out its code at https://github.com/gekuhoko/blog -->
        <!-- Want to see the code of the more complex web applications I have written?-->
        <!-- Feel free to drop me an email

            ╭──────────────────────────────────────────────────╮
            │ Senior Web Developer for Startups in Hong Kong   │
            ╞══════════════════════════════════════════════════╡
            │                                                  │
            │ Gerhard Kuschnik                                 │
            ├───────────┬──────────────────────────────────────┤
            │ Email     │ kuschnik.gerhard@gmail.com           │
            ├───────────┼──────────────────────────────────────┤
            │ LinkedIn  │ hk.linkedin.com/in/gerhardkuschnik   │
            ├───────────┼──────────────────────────────────────┤
            │ Twitter   │ https://twitter.com/GerhardKuschnik  │
            ├───────────┼──────────────────────────────────────┤
            │ AngelList │ https://angel.co/gerhard-kuschnik-1  │
            ├───────────┼──────────────────────────────────────┤
            │ Location  │ Hong Kong                            │
            ╰───────────┴──────────────────────────────────────╯

        <!-- ////////////////////////////////////////////////////////////////////////////// -->

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!--VENDOR STYLESHEET-->
        <link rel="stylesheet" href="/assets/bootstrap.css">
        <link rel="stylesheet" href="/assets/animate.css">
        <link rel="stylesheet" href="/assets/font-awesome.min.css">

        <!--MAIN STYLESHEET-->
        <link rel="stylesheet" href="/assets/application.css">
        <link id="switch_style" rel="stylesheet" href="/assets/blue.css">

        <!--VENDOR JS-->
        <script src="/assets/js/wow.min.js"></script>

        <!--MANIFEST-->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        <link rel="manifest" href="/manifest.json">

        <style>
            @media(max-width:414px){
                .center-text-if-mobile{
                    text-align:center
                }
            }
        </style>

        @stack('headPush')
    </head>

    <body>
        <div id="total_wrapper" style="display:none;">
            @include('partials.googleAnalytics')
            @include('partials.navigationBar')

            <main>
                <div class="container" style="overflow: hidden;">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </main>

            @include('partials.footer')
        </div>

        <script src="/assets/jquery-2.2.4.min.js"></script>
        <script src="/assets/jquery.easing.min.js"></script>
        <script src="/assets/bootstrap.min.js"></script>
        <script src="/assets/masonry-3.1.4.js"></script>
        <script src="/assets/main-blog.js"></script>
        <script src="/assets/sweetalert.min.js"></script>
        <link href="/assets/sweetalert.css" type="text/css" rel="stylesheet">

        @include('partials.pushNotificationScript')

        @if(!session('email'))
            @include('partials.emailScript')
        @endif

        <script>
            $('#total_wrapper').fadeIn(4000);
        </script>

        @stack('modal')

        @stack('scriptPush')
    </body>
</html>