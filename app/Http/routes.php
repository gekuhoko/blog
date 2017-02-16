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

Route::get('emailtest', function(){
    App\Email::sendToAll();
});

Route::get('deleteemails', function(){
    $mails = App\Email::all();
    foreach($mails as $mail){
        $mail->delete();
    }
});

Route::get('session', function(){
    dd(\Session::all());
});

Route::get('/author', function () {
    return view('author');
});

Route::post('/api/push-notification/register', 'PushNotificationController@postRegister');
Route::get('/api/push-notification/content', 'PushNotificationController@getContent');
Route::get('/api/push-notification/link', 'PushNotificationController@getLink');
Route::get('/api/push-notification/worker-script', 'PushNotificationController@getWorkerScript');
Route::get('worker.js', 'PushNotificationController@getWorkerScript');

Route::controller('/api/email', 'EmailController');





Route::get('/', function () {
    $posts = App\Post::where('type', 'article')
        ->orderBy('created_at', 'DESC')
        ->get();
    return view('index', compact('posts'));
});

Route::group([
    'middleware' => ['auth.basic'],
], function() {
    Route::controller('backend', 'BackendController');
});

Route::get('{anything}', function () {
    return redirect('/');
});
/* Roadmap:


        Write article

        Add pic upload + IG Autopost

        Add lazyload + specific post up link + (invisible) view counter + insta page switch

        Facebook Autopost

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
