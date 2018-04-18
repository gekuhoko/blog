<div class="author-widget" style="background: #ececec; margin: 30px 0 0 0;">
    <div class="row">
        {{-- subscribe --}}
        <div class="col-sm-6">
            @if(!session('email'))
                <div class="widget" style="background: #ececec; padding: 30px 30px 15px 30px; text-align: left; border:none; margin:0;">
                    @include('partials.subscribe.emailMarkup')
                </div>
            @endif
        </div>
        {{-- profile --}}
        <div class="col-sm-6">
            <div class="widget" style="background: #ececec; padding: 30px 30px 15px 30px; text-align: right; border:none; margin:0;">
                <a class="pull-right" href="/profile" style="margin:0; padding: 0;">
                    <img class="media-object" src="/assets/author.png" style="border-radius: 64px; margin-left:10px; padding:0;">
                </a>
                <div style="font-size:150%; ">{{config('owner.name')}}</div>
                <div style="font-size:100%; font-weight: 500;">{{config('owner.title')}}</div>
                <div class="media">
                    <div class="media-body">
                        <p class="info" style="margin-top: 6px;">
                            {!! config('owner.descriptionShort') !!}
                            <a href="/profile" style="text-decoration: underline; font-weight:700; font-size:125%;">{{config('owner.name')}} >></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
