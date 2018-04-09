<!--ABOUT AUTHOR-->
<div class="author-widget">
    <div class="widget">
        <h5 style="border:none; padding-bottom:0; margin-bottom: 0;">{{config('owner.name')}}</h5>
        <h6 style="border-bottom: 1px solid #f0f0f0; padding-bottom: 15px; font-weight: 500;">{{config('owner.title')}}</h6>
        <div class="media">
            <a class="pull-left" href="/author" style="margin:0; padding: 0;">
                <img class="media-object" src="/assets/author.png" style="border-radius: 64px; margin-right:15px; padding:0;">
            </a>
            <div class="media-body">
                <p class="info" style="margin-top: 0;">
                    {!! config('owner.description') !!}
                    <BR>
                    <a href="/" style="text-decoration: underline; font-weight:700">{{config('owner.name')}} >></a>
                </p>
            </div>
        </div>
    </div>
</div>