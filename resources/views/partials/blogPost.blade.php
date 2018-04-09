




<div class="post">

    @if($post->masterPictureUrl())
        <img src="{{$post->masterPictureUrl()}}" style="width:100%; height:auto;">
    @endif
    <h2>{!! $post->title !!}</h2>
    <p><i>{{ $post->formattedCreatedAt() }}</i></p>
    {!! $post->body !!}

</div>

{{--
<!--POSTED COMMENTS-->
<h5>Tags</h5>
<hr>
<div class="tags">
    <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">CSS</a>
    <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">Java Script</a>
    <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">jQuery</a>
    <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">HTML5</a>
    <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">CSS3</a>
    <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">DEMO</a>
    <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">MVC4</a>
</div>

<hr>

<!--POSTED COMMENTS-->
<h5>33 Comments | 10 Shares | 12K Views </h5>
<hr>
<div class="media">
    <a class="pull-left" href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">
        <img class="media-object" src="/assets/james" alt="">
    </a>
    <div class="media-body">
        <h6 class="media-heading">Mike James
            <small>Posted 25 minute ago</small>
        </h6>
                            <span class="comment">
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                                commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                                nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </span>
        <div class="comment-options">12 Likes - <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">Like</a> <span>|</span> <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">Reply</a></div>
    </div>
</div>

<!--COMMENT-->
<div class="media">
    <a class="pull-left" href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">
        <img class="media-object" src="/assets/redox" alt="">
    </a>
    <div class="media-body">
        <h6 class="media-heading">John Redox
            <small>Posted 28 minute ago</small>
        </h6>
                            <span class="comment">
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                                commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                                nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </span>
        <div class="comment-options">12 Likes - <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">Like</a> <span>|</span> <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">Reply</a></div>

        <!--NESTED COMMENT-->
        <div class="media">
            <a class="pull-left" href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">
                <img class="media-object" src="/assets/mike" alt="">
            </a>
            <div class="media-body">
                <h6 class="media-heading">Mike James
                    <small>Posted 35 minute ago</small>
                </h6>
                                    <span class="comment">
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin
                                        commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum
                                        nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </span>
                <div class="comment-options">12 Likes - <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">Like</a> <span>|</span> <a href="http://demo.trimatrixlab.com/sole/index-blog-post.html#">Reply</a></div>
            </div>
        </div>
        <!--END NESTED COMMENT-->
    </div>
</div>

<hr>

<!--COMMENTS FORM-->
<div>
    <h5>Leave a Comment</h5>
    <hr>
    <form id="comment-form">

        <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name" name="name" required="">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email" name="email" required="">
        </div>

        <div class="form-group">
            <textarea class="form-control" rows="5" placeholder="Your Comment" name="comment" required=""></textarea><grammarly-btn><div style="visibility: hidden; z-index: 2;" class="_9b5ef6-textarea_btn _9b5ef6-anonymous _9b5ef6-not_focused" data-grammarly-reactid=".0"><div class="_9b5ef6-transform_wrap" data-grammarly-reactid=".0.0"><div title="Protected by Grammarly" class="_9b5ef6-status" data-grammarly-reactid=".0.0.0">&nbsp;</div></div><span class="_9b5ef6-btn_text" data-grammarly-reactid=".0.1">Not signed in</span></div></grammarly-btn>
        </div>

        <button type="submit" class="btn">Submit</button>

    </form>
</div>
--}}