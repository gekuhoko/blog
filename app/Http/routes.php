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
Route::get('{slug}', 'PageController@article');


/*
 *  Execution structure:
 *      - one article per week (wednesday 11:00)
 *      - some coding
 *      - some social media activity
 *      - some strategy learning Gary Vee book
 *      - some tactics learning FL-hacks
            - strategy (cloud)
            - tactics (dirt)

Weekly content:
    use your own image with filter and headline
    try new format (video and podcast)
    Facebook: Do not post as picture. Post as link to improve CTR



Next items

    Increase Traffic
        - Do LinkedIn targeted ads to early stage funded companies
        - Do FB targeted ads to early stage funded companies

        - Do Google Adwords (how richard found me)

        - Check SEO improvements

        Targeted interaction
            -> check Y combinator companies
            -> check 500 start ups companies
                -> connect with founders
                    -> linkedIn
                    -> Twitter
                    -> facebook
                    -> quora
                -> get their data and target them in FB & LI
            -> target expats in HK

        Podcast
            Spotify
            Twitch
            Apple Itunes

        General social media
            Facebook
            Reddit
            Twitter
            SnapChat
            Quora (video)
            Youtube
            InstaGram

        Business Social media
            LinkedIn
            AngelList
            Blogs:
                Gruenderszene
                TechCrunch / startup blogs
                DigitalCompact

        Publishing sites
            Medium
            Hackernoon

        Leverage influencers
        .. where else is my audience?
            - comment on their content
            - interact with them
            - target their followers


- - - - C O D E - - - -

    STICK
        - Have a nice overview page
        - Have comments (DISQUS?)
        - Have tags / categories

    Convert to contact
        - Fix contact me - remove modal and make separate page

    Share
        - Add share-bar like in financial samurai
        - Make article like + Comment
        - Add lazy loading
*/

