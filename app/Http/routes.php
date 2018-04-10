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
Route::get('blog', 'PageController@getBlog');
Route::get('{fallback}', 'PageController@fallback');



/*
 *  Execution structure:
 *      - one article per week (wednesday 11:00)
 *      - some coding
 *      - some social media activity
 *      - some learning (Gary Vee book? FL-hacks?)
            - strategy (cloud)
            - tactics (dirt)

Next items
    CODE FIRST


        - Integrate BugSnag

        - Decouple creation from push sending
        - Soft deletion of posts with confirm button
        - add article link to backend

    WRITE

    CODE AFTER
        - improve contact form
            - also send SMS / push notification to me
            - also add phone for them (so i can call)
        - Add scheduled publishing and reminder for me to write
        - Add share-bar like in financial samurai
        - Add signup via email / sms
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
