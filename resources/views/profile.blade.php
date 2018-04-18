@extends('template')

@section('content')

@push('scriptPush')
    <script>
        new WOW().init();
    </script>
@endpush

<!--BLOG MAINBAR -->

<div style="margin-top: 60px; padding:40px; background-image: url(/assets/wallpaper.jpg); background-size:100%;">
    <img src="/assets/author_square.jpg" style="border-radius: 1000px; margin: 30px auto; display:block; max-width: 80%; border: 4px solid white;">
    <h5 class="center-text-if-mobile" style="color: white; font-weight: 500;">{{config('owner.name')}}</h5>
    <h4 class="center-text-if-mobile" style="color: white; font-weight: 600; margin-bottom: 0; text-shadow:-1px -1px 0 #000,  1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">{{config('owner.title')}}</h4>
</div>
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div style="padding: 0 15px;">
            <div style="text-align: center; margin-top:0px;">
                <h3 style="margin-top:50px;">{{config('owner.headline')}}</h3>
                <p>{!! config('owner.description') !!}</p><BR>
            </div>
            <div style="margin:auto; text-align: center;">
                <div style="display:inline;" class="wow zoomIn"
                     data-wow-duration="4s" data-wow-delay="0s"
                     data-wow-offset="2" data-wow-iteration="1">
                    <a href="https://www.ifwd.com.tw/" target="_blank">
                        <img style="height:75px; width: auto; margin: 35px;" src="/assets/fwd.png">
                    </a>
                </div>
                <div style="display:inline;" class="wow zoomIn"
                     data-wow-duration="4s" data-wow-delay="0s"
                     data-wow-offset="2" data-wow-iteration="1">
                    <a href="http://www.novafounders.com/" target="_blank">
                        <img style="padding-top:10px; height:75px; width: auto; margin: 35px;" src="/assets/nova.png"><BR>
                    </a>
                </div>
                <div style="display:inline;" class="wow zoomIn"
                     data-wow-duration="2s" data-wow-delay="0s"
                     data-wow-offset="2" data-wow-iteration="1">
                    <a href="https://edirectinsure.com/" target="_blank">
                        <img style="height:75px; width: auto; margin: 30px;" src="/assets/edirect.png">
                    </a>
                </div>
                <div style="display:inline;" class="wow zoomIn"
                     data-wow-duration="3s" data-wow-delay="0s"
                     data-wow-offset="2" data-wow-iteration="1">
                    <a href="https://www.frank.co.th/" target="_blank">
                        <img style="height:75px; width: auto; margin: 30px;" src="/assets/frankth.png">
                    </a>
                </div>
                <BR>
                <div style="display:inline;" class="wow zoomIn"
                     data-wow-duration="3s" data-wow-delay="0s"
                     data-wow-offset="2" data-wow-iteration="1">
                    <a href="https://www.carrotbenefits.com/" target="_blank">
                        <img style="height:65px; padding-top:20px; width: auto; margin: 30px;" src="/assets/carrotbenefits.png">
                    </a>
                </div>
                <BR>
                <div style="display:inline;" class="wow zoomIn"
                     data-wow-duration="2s" data-wow-delay="0s"
                     data-wow-offset="2" data-wow-iteration="1">
                    <a href="https://www.whu.edu/en/" target="_blank">
                        <img style="height:75px; width: auto; margin: 35px;" src="/assets/whu.png">
                    </a>
                </div>
                <div style="display:inline;" class="wow zoomIn"
                     data-wow-duration="3s" data-wow-delay="0s"
                     data-wow-offset="2" data-wow-iteration="1">
                    <a href="http://www.bm.ust.hk/" target="_blank">
                        <img style="height:75px; width: auto; margin: 35px;" src="/assets/hkust.png">
                    </a>
                </div>
            </div>
            <hr>

            <div style="margin:auto; text-align: center;" class="row">
                <div class="col-sm-6" style="padding-top:20px; padding-bottom:20px;">
                <span style="font-weight:100; font-size:200%;">
                    11 Years <BR>
                    in Startups
                </span>
                </div>
                <div class="col-sm-6" style="padding-top:20px; padding-bottom:20px;">
                <span style="font-weight:100; font-size:200%;">
                    7 Years <BR>
                    in Hong Kong
                </span>
                </div>
            </div>
            <hr>
            <div style="margin-top:40px;">
                As Senior Web Developer, I help building <a style="text-decoration: underline" href="https://www.ifwd.com.tw/" target="_blank">iFWD.com.tw</a> - the Taiwan presence of Asia's fastest-growing insurer.<BR>
                Prior to joining FWD, I built <a style="text-decoration: underline" href="https://www.frank.co.th/" target="_blank">Frank.co.th</a> - Thailand's leading online insurance platform initiated by the partners at <a style="text-decoration: underline" href="http://www.novafounders.com" target="_blank">Nova Founders Capital</a>.<BR>
                <BR>
                In my free time I build web applications for startups - such as <a style="text-decoration: underline" href="https://carrotbenefits.com/welcome" target="_blank">CarrotBenefits.com</a> and <a style="text-decoration: underline" href="https://thetrustcall.com/?country=Hong%20Kong&language=english" target="_blank">TheTrustCall.com</a>.<BR>
                <BR>
                If you need technical expertise for your project - feel free to email.<BR>
                I do remote work and look forward to hearing about your project: <a style="font-weight: 600; text-decoration: underline" title="kuschnik.gerhard@gmail.com" href="mailto:kuschnik.gerhard@gmail.com">kuschnik.gerhard@gmail.com</a>
                <BR><BR>
                <a style="text-decoration: underline" title="LinkedIn" href="http://hk.linkedin.com/in/gerhardkuschnik" target="_blank">LinkedIn</a> |
                <a style="text-decoration: underline" title="Twitter" href="https://twitter.com/GerhardKuschnik" target="_blank">Twitter</a> |
                <a style="text-decoration: underline" title="Angel List" href="https://angel.co/gerhard-kuschnik-1" target="_blank">Angel List</a>
            </div>

            <h4 style="text-align:center; margin-top:70px; margin-bottom: 1.5em;">Technology for your startup</h4>
            <div style="margin:auto; text-align: center;">
                <img style="padding: 25px;" src="/assets/rsz_2000px-php-logosvg.png" alt="Php" />
                <img style="padding: 25px;" src="/assets/rsz_7b02393ac4fd02ff013658553fde24cf.png" alt="Laravel" />
                <img style="padding: 25px;" src="/assets/java.png" alt="Java" />
                <img style="padding: 25px;" src="/assets/spring.png" alt="Spring" />
                <BR>
                <img style="padding: 25px;" src="/assets/rsz_image23.png" alt="VueJs" />
                <img style="padding: 25px;" src="/assets/rsz_1screenshot_from_2017-03-09_085600.png" alt="TypeScript" />
                <img style="padding: 25px;" src="/assets/rsz_react.png" alt="ReactJS" />
                <img style="padding: 25px;" src="/assets/jquery_opt.jpg" alt="" />
                <BR>
                <img style="padding: 25px;" src="/assets/mongodb.png" alt="MongoDB" />
                <img style="padding: 25px;" src="/assets/rsz_redis.png" alt="Redis" />
                <img style="padding: 25px;" src="/assets/rsz_logo-mysql-170x115.png" alt="MySQL" />
                <BR>
                <img style="padding: 25px;" src="/assets/rsz_javascript_logo.png" alt="JavaScript" />
                <img style="padding: 25px;" src="/assets/rsz_ajax-logo.jpg" alt="AJAX" />
                <img style="padding: 25px;" src="/assets/rsz_rest-api-logo.png" alt="Rest API" />
                <BR>
                <img style="padding: 25px;" src="/assets/rsz_wordpress-logo-stacked-rgb.png" alt="WordPress" />
                <img style="padding: 25px;" src="/assets/rsz_bootstrap.png" alt="BootStrap" />
                <img style="padding: 25px;" src="/assets/rsz_html5_logo_256.png" alt="HTML5" />
                <img style="padding: 25px;" src="/assets/rsz_css3-logo.png" alt="CSS3" />

                <img style="padding: 25px;" src="/assets/rsz_1maxresdefault.jpg" alt="Forge" />
                <img style="padding: 25px;" src="/assets/rsz_mise-a-jours-demo-linux-inside-3.png" alt="Linux" />
            </div>

            <h4 style="margin-top:70px; margin-bottom: 0.25em;">Need Features?</h4>
            <h5 style="margin-bottom: 1.25em; font-weight:400;">Been there, done that</h5>
            <strong>Content Management</strong><BR>
            - Article creation with visual editor<BR>
            - Image upload and processing<BR>
            - Video upload and processing<BR>
            - Website templating engine with color palette selection<BR>
            <BR>
            <strong>Social</strong><BR>
            - Profile editor<BR>
            - Messaging and live chat<BR>
            - Social connections<BR>
            - Facebook API, Twitter API, LinkedIn API<BR>
            <BR>
            <strong>Payment</strong><BR>
            - PayPal Express Checkout<BR>
            - Stripe Credit Card<BR>
            - Braintree Credit Card<BR>
            - Payvision Credit Card<BR>
            - Omise Credit Card<BR>
            <BR>
            <strong>SMS and automatic phone calls</strong><BR>
            - Twilio IVR<BR>
            - Hoiio IVR<BR>
            - Accessyou SMS<BR>
            <BR>
            <strong>Internationalization</strong><BR>
            - Multi Language Support<BR>
            - Multi Currency Support<BR>
            - Google Maps API<BR>
            - IP-based geo detection<BR>
            <BR>
            <strong>CRM</strong><BR>
            - Zoho<BR>
            - Microsoft Dynamics<BR>
            - In-house built with role-based permissions (ACL)<BR>
            <BR>
            <strong>Email</strong><BR>
            - Transactional emails via Mandrill and Mailgun<BR>
            - Newsletters via Mailchimp<BR>
            <BR>
            <strong>Analytics</strong><BR>
            - Google Analytics<BR>
            - Google AdWords conversion tracking<BR>
            - Optimizely A/B testing<BR>
            - Mouseflow heat maps<BR>
            <BR>
            <strong>Security</strong><BR>
            - SSL encryption (https)<BR>
            - SQL injection projection<BR>
            - CSRF protection<BR>
            - Bugsnag error reporting<BR>
            <BR>
            <strong>Loading speed performance</strong><BR>
            - Performance reporting (New Relic)<BR>
            - CSS and JavaScript compilation (Bower)<BR>
            - Transfer compression<BR>
            - Caching (Redis)<BR>
            - Lazy loading<BR>
            <BR>

            {{--
            <table style="margin-top: 30px; border: none!important; background: transparent!important;">
                <tbody>
                <tr style="border: none; background: none;">
                    <td style="border: none; width: 150px; text-align: center;">
                        <img style="border-radius: 1000px; float: left; width: 100%; height: auto; margin-bottom: 20px!important;" src="http://www.gerhard-kuschnik.com/wp-content/uploads/2016/11/11bfa32.jpg" alt="" />
                        <a href="https://hk.linkedin.com/in/levent-gündogdu-78029935/en" target="_blank">Levent Gündogdu</a>
                        CTO Edirect Insure
                        CTO LYKE</td>
                    <td style="border: none; vertical-align: top; padding-left:25px; line-height: 25px;">
                        <i>I enjoyed every minute working with Gerhard. He knows the latest cutting edge technologies, writes high quality code and delivers great results in no time. He is great at communicating concepts to non-technical stakeholders. He is one of the most ambitious and hard working people I have ever met. I can fully recommend working with Gerhard.</i>
                    </td>
                </tr>
                </tbody>
            </table>

            <table style="margin-top: 30px; border: none!important; background: transparent!important;">
                <tbody>
                <tr style="border: none; background: none;">
                    <td style="border: none; width: 150px; text-align: center;"><img style="border-radius: 1000px; float: left; width: 100%; height: auto; margin-bottom: 20px!important;" src="http://www.gerhard-kuschnik.com/wp-content/uploads/2016/11/jav.jpg" alt="" />
                        <a href="https://www.linkedin.com/in/javgloria" target="_blank">Javier Gloria</a>
                        CTO GOXIP
                        CTO Nova Founders</td>
                    <td style="border: none; vertical-align: top; padding-left:25px; line-height: 25px;"><i>Gerhard is not the ordinary developer. He knows how startups win. He is not only technically highly skilled but is also deeply knowledgable about product. Give him a few ideas and he comes back with specs - ready to be fully developed within a few days.</i></td>
                </tr>
                </tbody>
            </table>

            <table style="margin-top: 30px; border: none!important; background: transparent!important;">
                <tbody>
                <tr style="border: none; background: none;">
                    <td style="border: none; width: 150px; text-align: center;"><img style="border-radius: 1000px; float: left; width: 100%; height: auto; margin-bottom: 20px!important;" src="http://www.gerhard-kuschnik.com/wp-content/uploads/2016/11/max-300x300.jpg" alt="" />
                        <a href="https://www.linkedin.com/in/maxarmbruster" target="_blank">Max Armbruster</a>
                        CEO Talkpush</td>
                    <td style="border: none; vertical-align: top; padding-left:25px; line-height: 25px;"><i>Gerhard was able to steer our product development team in the right direction, anticipating future bottlenecks to our growth. Gerhard also identified adjustments that could be made to the software processes and layout in order to improve user adoption. In only a few months, he truly made Talkpush more scalable.</i></td>
                </tr>
                </tbody>
            </table>
            --}}
        </div>
    </div>
    <div class="col-md-2"></div>
</div>
@endsection