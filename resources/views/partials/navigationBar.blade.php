<!--NAVIGATION-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div style="float: right; padding-top:4px; margin-right: -12px;">
            @if(strpos(Request::path(), 'blog') !== false)
                <a class="btn" href="/" style="background-color: #EB5634; color: #ffffff; font-weight:900; padding-left: 14px; padding-right: 15px;">Profile</a>
            @else
                <a class="btn" href="#" style="background-color: #EB5634; color: #ffffff; font-weight:900; padding-left: 14px; padding-right: 15px;" data-toggle="modal" data-target="#contactModal">Contact</a>
            @endif
        </div>
        <div class="navbar-header page-scroll">
            @if(strpos(Request::path(), 'blog') !== false)
                {{-- Headline if blog page --}}
                <a class="navbar-brand page-scroll" href="/" style="font-weight:200; font-size:16px;">{{config('owner.name')}}</a>
                <a class="hidden-xs navbar-brand page-scroll" href="/" style="margin-top:5px; font-size:11px">{{config('owner.title')}}</a>
            @else
                {{-- Headline if profile page --}}
                <a class="navbar-brand page-scroll" href="/blog" style="font-weight:200; font-size:16px;">{{config('owner.name')}}</a>
                <a class="hidden-xs navbar-brand page-scroll" href="/blog" style="margin-top:5px; font-size:11px">{{config('owner.title')}}</a>
            @endif
        </div>
    </div>
</nav>

@include('partials.contactModal')