<?php

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

Route::get('/', 'PageController@getIndex');
Route::get('profile', 'PageController@getProfile');
Route::get('{fallback}', 'PageController@fallback');



/*
 *  Execution structure:
 *      - one article per week (wednesday 11:00)
 *      - some coding
 *      - some social media activity
 *      - some learning (Gary Vee book? FL-hacks?)
            - strategy (cloud)
            - tactics (dirt)


Learning:
    Facebook: Do not post as picture. Post as link to improve CTR


Next items


    Try new publishing platforms
        Targeted interaction
            -> check Y combinator companies
            -> check 500 start ups companies
                -> connect with founders
                    -> linkedIn
                    -> Twitter
                    -> facebook
                    -> quora
                -> get their data and target them in FB & LI
        Twitter
        SnapChat
        Reddit
        Spotify
        Itunes
        Hackernoon
        Quora
        Youtube
        IG (story)
        .. where else is my audience?

    Try reach improvement by learning / following others
        Medium
        LinkedIn
        Facebook


    Add more branding
        image
        signature

    CODE AFTER

    Open Rate
        - Fix image upload / edit
		    - Have a nice overview page
            - use your own image with filter and headline
        - Make article link
        - Make article preview text for FB link

    Subscription
        - Add signup via email / sms

    Share
        - Add share-bar like in financial samurai
        - Make article like + Comment

    Convet to conact
        - Fix contact me - remove modal and make separate page

        - Add scheduled publishing
            "published at" setter with hiding in frontend


        - Check SEO improvements

(AUTO)Distribution to target (biz owners)
    -> Quora (VIDEO?)
    -> Reddit
    -> Youtube
    -> Podcast?
    -> IG
    -> Facebook
    -> LinkedIn
    -> AngelList
    -> Gruenderszene
    -> DigitalCompact
    -> SEM, SEO

KPIs: - Visitors / day (network size)
     - Devices registered (long term reach)
     - Visit to contact-me conversion

*/
