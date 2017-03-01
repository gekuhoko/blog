<!--NAVIGATION-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div style="float: right; padding-top:4px; margin-right: -12px;">
            @if(strpos(Request::path(), 'blog') !== false)
                <a class="btn" href="/" style="background-color: #EB5634; color: #ffffff; font-weight:900; padding-left: 30px; padding-right: 30px;">Profile</a>
            @else
                <a class="btn" href="#" style="background-color: #EB5634; color: #ffffff; font-weight:900; padding-left: 30px; padding-right: 30px;" data-toggle="modal" data-target="#contactModal">Contact</a>
            @endif
        </div>
        <div class="navbar-header page-scroll">
            @if(strpos(Request::path(), 'blog') !== false)
                {{-- Headline if blog page --}}
                <a class="navbar-brand page-scroll" href="/" style="font-weight:200; font-size:18px;">{{config('owner.name')}}</a>
                <a class="hidden-xs navbar-brand page-scroll" href="/" style="margin-top:5px; font-size:11px">{{config('owner.title')}}</a>
            @else
                {{-- Headline if profile page --}}
                <a class="navbar-brand page-scroll" href="/blog" style="font-weight:200; font-size:18px;">{{config('owner.name')}}</a>
                <a class="hidden-xs navbar-brand page-scroll" href="/blog" style="margin-top:5px; font-size:11px">{{config('owner.title')}}</a>
            @endif
        </div>
    </div>
</nav>

<!-- Button trigger modal -->
@push('modal')
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" style="padding-right: 0;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a class="pull-left" href="/author" style="margin:0; padding: 0;">
                    <img class="media-object" src="/assets/author.png" style="border-radius: 64px; margin-right:15px; padding:0; margin-bottom: 12px; margin-top: 3px;">
                </a>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h5 class="modal-title" style="font-weight:600; margin-bottom:5px;">Let's work together</h5>
                <h6 class="modal-title" style="font-weight:300;">{{config('owner.name')}}</h6>
                <h6 class="modal-title" style="font-weight:300; font-size:80%;">{{config('owner.title')}}</h6>
            </div>
            <div class="modal-body">
                I do freelance work and enjoy helping founders. Let me know about your project - maybe we can establish a great partnership! You can also email to <a style="text-decoration: underline" title="kuschnik.gerhard@gmail.com" href="mailto:kuschnik.gerhard@gmail.com">kuschnik.gerhard@gmail.com</a>
                <div style="padding:15px 15px 0 15px;">
                    <div class="row">
                        <div class="col-lg-6" style="padding:0">
                            <input type="text" class="form-control" placeholder="Your email address" style="margin-top:5px; margin-bottom:5px; height:49px;">
                        </div>
                        <div class="col-lg-6" style="padding:0"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="padding:0">
                            <textarea rows="4" class="form-control" placeholder="Your message" style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="padding:0; text-align: right;">
                            <button type="button" class="btn" style="background-color: #EB5634; color: #ffffff; font-weight:900; padding-left: 30px; padding-right: 30px; margin-top:15px;">Send</button>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="modal-footer"></div>--}}
        </div>
    </div>
</div>
@endpush