<!DOCTYPE html>
<html lang="en">
    <head>
        @if((isset($posts)) || (!(isset($post))))
            <title>{{config('owner.name')}} - {{config('owner.title')}}</title>
            <meta property="og:site_name" content="{{config('owner.name')}} - Blog" />
            <meta property="og:url" content="{{url('/')}}" />
            <meta property="og:type" content="article" />
            <meta property="og:title" content="{{config('owner.name')}}" />
            <meta property="og:description" content="{{config('owner.title')}}" />
            <meta property="og:image" content="{{url('/assets/author_square.jpg')}}" />
            <meta property="og:image:secure_url" content="{{url('/assets/author_square.jpg')}}" />
            <meta property="og:locale" content="en_HK" />
        @else
            <title>{{$post->title}} | {{config('owner.name')}}</title>
            <meta property="og:site_name" content="{{config('owner.name')}} - Blog" />
            <meta property="og:url" content="{{url('/'.$post->slug)}}" />
            <meta property="og:type" content="article" />
            <meta property="og:title" content="{{$post->title}}" />
            <meta property="og:description" content="{{$post->shortBody()}}" />
            <meta property="og:image" content="{{$post->masterPictureUrl()}}" />
            <meta property="og:image:secure_url" content="{{$post->masterPictureUrl()}}" />
            <meta property="og:locale" content="en_HK" />
        @endif

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
                .padding-if-mobile{
                    padding-left: 15px;
                    padding-right: 15px;
                }
                .move-right-if-mobile{
                    margin-right: -7px;
                }
            }
            hr {
                height: 4px;
                border-top: 2px solid #f0f0f0;
            }
            @media(min-width:414px){
                .move-right-if-desktop{
                    margin-right: -15px;
                }
            }
        </style>

        <!-- Start Visual Website Optimizer Asynchronous Code -->
        <script type='text/javascript'>
            var _vwo_code=(function(){
                var account_id=359801,
                    settings_tolerance=2000,
                    library_tolerance=2500,
                    use_existing_jquery=false,
                    /* DO NOT EDIT BELOW THIS LINE */
                    f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
        </script>
        <!-- End Visual Website Optimizer Asynchronous Code -->

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
            @include('partials.subscribe.emailScript')
        @endif

        <script>
            $('#total_wrapper').fadeIn(4000);
        </script>

        @stack('modal')

        @stack('scriptPush')
    </body>
</html>