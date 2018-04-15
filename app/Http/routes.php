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
 *  Hard to find balace
 *      - one article per week (wednesday 11:00)
 *      - some coding
 *      - some social media activity
 *      - some learning (Gary Vee book? FL-hacks?)
            - strategy (cloud)
            - tactics (dirt)

Next items
    Try new publishing platforms
        Medium
        Hackernoon
        Quora
        Youtube
        IG (story)
        .. where else is my audience?


    CODE AFTER
        - Fix image upload / edit
		    - Have a nice overview page

        - Add signup via email / sms

        - Add scheduled publishing
            "published at" setter with hiding in frontend

        - Add share-bar like in financial samurai
            add article link to backend

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
