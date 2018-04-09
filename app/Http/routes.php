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

Route::group([
    'middleware' => ['auth.basic', 'csrf'],
], function() {
    Route::controller('backend', 'BackendController');
});

Route::controller('api/email', 'EmailController');
Route::controller('api/picture', 'PictureController');
Route::controller('api/push-notification', 'PushNotificationController');
Route::controller('push-notification', 'PushNotificationController');
Route::get('worker.js', 'PushNotificationController@getWorkerScript');

//Route::controller('/', 'PageController');

Route::get('/', 'PageController@getIndex');
Route::get('blog', 'PageController@getBlog');
Route::get('{fallback}', 'PageController@fallback');



/* Roadmap:
    Web push fix
    Google analytics prepare
    Landing page should be blog
    Posts only have soft deletion
    Send web push not on publish but on extra send button (because want to preview first)













        Write cool PPC ads
        Put PPC ads online
        Make contact me form work
        Check Google analytics

    Write about technology stack

    - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

    preview post

    Distribution:
    Add preview
    Add article link
    IG Autopost
    Facebook Autopost

    Add preview to post creation

    Automatic distribution
    8. FB Post
    9. LI Post
    10. IG Post
    11. YT Post
    12. Podcast / Audio
    13...?

    Add SMS signup + random switch + unsubscribe

    BI
    ...

    Virality with sharing links
*/
