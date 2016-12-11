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


    Roadmap:
        2. Implement GA for basic tracking

        Article Content
        3. Add current articles
        4. Add CRUD + Hide
        5. Put online

        Data Collection
        5. Add web push
        6. Add Email signup
        7. Add Phone number

        Automatic distribution
        8. FB Post
        9. LI Post
        10. IG Post
        11. YT Post
        12. Postcast
        13...?

        BI
        ...


*/

Route::get('/', function () {
    return view('welcome');
});
