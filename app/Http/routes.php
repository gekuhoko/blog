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

1. Twitter
	https://twitter.com/noriposo/status/988814033200410626
	https://twitter.com/eddiewzp/status/988665320532398080
	https://twitter.com/ToogitGanesh/status/990521520563806208
	https://twitter.com/PHPAdmirer/status/988792635908349952
	https://twitter.com/pitch_talk/status/988085287137021953
	https://twitter.com/workrockers/status/989010938505433088
	https://twitter.com/BoruchLoriner/status/988514300594704384
	https://twitter.com/KylieSaysRelax/status/989418038893187072
	https://twitter.com/adsharesNet/status/989575260080148481
	https://twitter.com/LordMcdougall/status/989537821047259136
	https://twitter.com/Columbus_hired/status/990573657180160000
	https://twitter.com/SEED365LLC/status/988934034385403904
	https://twitter.com/jayoguntino/status/987064325230747649
	https://twitter.com/ITCalifornia/status/990352721164173312
	https://twitter.com/LordMcdougall/status/989537821047259136
	https://twitter.com/tailwise/status/989421355228631041
	https://twitter.com/mannooran/status/982277912840695808
	http://startupjobs.asia/job/37942-web-developer-technical-job-at-uhoo-hong-kong








Cliché
















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
    Other richard
        - check if i can still download the videos
        - skip through the videos
        - message him in wechat

    - Post on reddit

    - Reach out on twitter



    Read the hackernoon article

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

