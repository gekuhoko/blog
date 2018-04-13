<!--ABOUT AUTHOR-->
<div class="author-widget">
    <div class="widget" style="text-align: right; background: #ffffff; border:none; margin-bottom:0; padding-bottom:0;">
        <a class="pull-right" href="/profile" style="margin:0; padding: 0;">
            <img class="media-object" src="/assets/author.png" style="border-radius: 64px; margin-left:10px; padding:0;">
        </a>
        <div style="font-size:150%; ">{{config('owner.name')}}</div>
        <div style="font-size:100%; font-weight: 500;">{{config('owner.title')}}</div>
        <div class="media">
            <div class="media-body">
                <p class="info" style="margin-top: 6px;">
                    {!! config('owner.descriptionShort') !!}
                    <a href="/" style="text-decoration: underline; font-weight:700; font-size:125%;">{{config('owner.name')}} >></a>
                </p>
            </div>
        </div>
    </div>
</div>
<hr>