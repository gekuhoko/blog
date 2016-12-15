<?php

/*
    why this project?
        I want to build a system that allows free creators build a following

            OWN FOLLOWERS DATA
                We need a separate system because you want to own your followings contacts, namely
                    -> name
                    -> deviceID
                    -> email
                    -> phone
                If you just build a following on YT or IG or FB you get squeezed over time

            CROSS PLATFORM BI
                    -> check how fast you grow
                    -> check growth drivers (platforms, topics)

            HAVE CROSS PLATFORM DISTRIBUTION
                It's like a pimped Wordpress but also has integration with IG, YT, Podcast


    I need that system to build networking-equity.
    This system is useful for friends as well
*/

Route::get('/', function () {
    $posts = App\Post::where('type', 'article')
        ->orderBy('created_at', 'DESC')
        ->get();
    return view('index', compact('posts'));
});

Route::get('/author', function () {
    return view('author');
});

Route::controller('api/push-notification/', 'PushNotificationController');

Route::group([
    'middleware' => ['auth.basic'],
], function() {
    Route::controller('backend', 'BackendController');
});




/* Roadmap:

        TUE Blog development - data collection
            2. Add web push
            3. Add Email signup
            4. Add Phone number signup
        WED Write article
        THU Add pic upload + IG Autopost
        FRI Facebook Autopost

        Automatic distribution
        8. FB Post
        9. LI Post
        10. IG Post
        11. YT Post
        12. Postcast
        13...?

        BI
        ...

        Virality with sharing links
*/
