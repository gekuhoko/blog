@extends('template')

@section('content')
        <!--BLOG MAINBAR -->
<div class="col-md-2"></div>
<div class="main-content col-md-8">

    <div style="text-align: center">
        <img src="assets/author_square.jpg" style="border-radius: 1000px; margin: 0 auto 30px auto; display:block; max-width: 80%">
        <h3>{{config('owner.headline')}}</h3>
        <p>{!! config('owner.description') !!}</p><BR>
        <h5 style="font-weight: 300;">{{config('owner.name')}}</h5>
        <h6 style="font-weight: 300;">{{config('owner.title')}}</h6>
    </div>
    <hr>
    <div style="margin:auto; text-align: center;">
        <a href="https://www.whu.edu/en/" target="_blank">
            <img style="height:75px; width: auto; margin: 35px;" src="/assets/whu.png">
        </a>
        <a href="http://www.bm.ust.hk/" target="_blank">
            <img style="height:75px; width: auto; margin: 35px;" src="/assets/hkust.png">
        </a>
        <a href="http://www.novafounders.com/" target="_blank">
            <img style="height:75px; width: auto; margin: 35px;" src="/assets/nova.png"><BR>
        </a>
        <a href="https://edirectinsure.com/" target="_blank">
            <img style="height:75px; width: auto; margin: 30px;" src="/assets/edirect.png">
        </a>
        <a href="https://www.frank.co.th/" target="_blank">
            <img style="height:75px; width: auto; margin: 30px;" src="/assets/frankth.png">
        </a>
        <a href="https://www.frankinsure.com.tw/" target="_blank">
            <img style="height:75px; width: auto; margin: 50px 30px 30px 30px;" src="/assets/franktw.png">
        </a>
    </div>
    <hr>
    <div style="margin-top:40px;">
        As Senior PHP web developer, I help building <a style="text-decoration: underline" href="https://www.frank.co.th/" target="_blank">Frank.co.th</a> - Thailand's leading online insurance platform initiated by the partners at <a style="text-decoration: underline" href="http://www.novafounders.com" target="_blank">Nova Founders Capital</a>.
        On the side, I run my personal passion project: <a style="text-decoration: underline" href="http://www.TheTrustCall.com" target="_blank">TheTrustCall.com</a>.
        I help internet companies turn ideas into real web applications.
        If you need technical expertise for your project - feel free to email.
        I do freelance work and look forward to hearing about your project: <a style="text-decoration: underline" title="kuschnik.gerhard@gmail.com" href="mailto:kuschnik.gerhard@gmail.com">kuschnik.gerhard@gmail.com</a>
        <BR><BR>
        <a style="text-decoration: underline" title="LinkedIn" href="http://hk.linkedin.com/in/gerhardkuschnik" target="_blank">LinkedIn</a> |
        <a style="text-decoration: underline" title="Twitter" href="https://twitter.com/GerhardKuschnik" target="_blank">Twitter</a> |
        <a style="text-decoration: underline" title="Twitter" href="https://angel.co/gerhard-kuschnik-1" target="_blank">Angel List</a>

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

        <hr>
        <h4 style="margin-bottom: 1.5em;">Technology for your startup</h4>
        <div style="margin:auto; text-align: center;">
            <img style="padding: 25px;" src="/assets/rsz_2000px-php-logosvg.png" alt="" />
            <img style="padding: 25px;" src="/assets/rsz_7b02393ac4fd02ff013658553fde24cf.png" alt="Laravel" />
            <img style="padding: 25px;" src="/assets/rsz_1maxresdefault.jpg" alt="Forge" />
            <img style="padding: 25px;" src="/assets/rsz_rest-api-logo.png" alt="" />
            <img style="padding: 25px;" src="/assets/rsz_image23.png" alt="VueJs" />
            <img style="padding: 25px;" src="/assets/rsz_javascript_logo.png" alt="" />
            <img style="padding: 25px;" src="/assets/jquery_opt.jpg" alt="" />
            <img style="padding: 25px;" src="/assets/rsz_ajax-logo.jpg" alt="" />
            <img style="padding: 25px;" src="/assets/rsz_wordpress-logo-stacked-rgb.png" alt="" />
            <img style="padding: 25px;" src="/assets/rsz_bootstrap.png" alt="" />
            <img style="padding: 25px;" src="/assets/rsz_html5_logo_256.png" alt="" />
            <img style="padding: 25px;" src="/assets/rsz_css3-logo.png" alt="" />
            <img style="padding: 25px;" src="/assets/rsz_logo-mysql-170x115.png" alt="" />
            <img style="padding: 25px;" src="/assets/rsz_redis.png" alt="" />
            <img style="padding: 25px;" src="/assets/rsz_mise-a-jours-demo-linux-inside-3.png" alt="Linux" />
        </div>
        <hr>
        <h4 style="margin-bottom: 0.5em;">Need Features? Been there, done that</h4>
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
    </div>
</div>
<div class="col-md-2"></div>
@endsection