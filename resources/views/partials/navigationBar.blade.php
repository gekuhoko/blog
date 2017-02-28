<!--NAVIGATION-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="/author" style="font-weight:200; font-size:20px;">{{config('owner.name')}} >></a> <a class="hidden-xs navbar-brand page-scroll" href="/" style="margin-top:5px; font-size:11px">{{config('owner.title')}}</a>
        </div>
        <!--COLLECT THE NAV LINKS, FORMS, AND OTHER CONTENT FOR TOGGLING-->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                @if(strpos(Request::path(), 'blog') !== false)
                    <li><a class="page-scroll" href="/">{{config('owner.name')}}'s Profile</a></li>
                @else
                    <li><a class="page-scroll" href="/blog">Blog</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>