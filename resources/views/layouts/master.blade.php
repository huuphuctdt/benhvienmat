<!DOCTYPE html>
<!--[if IE 9 ]> <html lang="vi" class="ie9 loading-site no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="vi" class="ie8 loading-site no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="vi" class="loading-site no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Bệnh Viện Mắt Long Xuyên</title>
    <meta name='robots' content='noindex,follow' />
    <link rel='stylesheet' href="{{ asset('/css/app.css') }}">
    <link rel='stylesheet' id='contact-form-7-css'  href='{{ asset('/css/style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-four-css'  href='{{ asset('/css/font-awesome.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-icons-css'  href='{{ asset('/css/fl-icons.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-main-css'  href='{{ asset('/css/flatsome.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-style-css'  href='{{ asset('/css/style_new.css') }}' type='text/css' media='all' />
    <script type='text/javascript' src='{{ asset('/js/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('/js/jquery-migrate.min.js') }}'></script>
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/ie-fallback.css') }}">
    <script src="{{ asset('/js/ie-flexibility.js') }}"></script>
    <![endif]-->
    {{--<script src="{{ asset('/js/app.js') }}"></script>--}}
    <link rel="icon" href="{{ url('images/logo.jpg') }}" sizes="32x32" />
    <style>
        .bg-fill {
            background-position: 50% 100%;
        }
        .ct-topbar {
            text-align: right;
            background: #eee;
        }
        .ct-topbar__list {
            margin-bottom: 0px;
        }
        .ct-language__dropdown{
            padding-top: 8px;
            max-height: 0;
            overflow: hidden;
            position: absolute;
            top: 110%;
            left: -3px;
            -webkit-transition: all 0.25s ease-in-out;
            transition: all 0.25s ease-in-out;
            width: 100px;
            text-align: center;
            padding-top: 0;
            z-index:200;
        }
        .ct-language__dropdown li{
            background: #222;
            padding: 5px;
        }
        .ct-language__dropdown li a{
            display: block;
        }
        .ct-language__dropdown li:first-child{
            padding-top: 10px;
            border-radius: 3px 3px 0 0;
        }
        .ct-language__dropdown li:last-child{
            padding-bottom: 10px;
            border-radius: 0 0 3px 3px;
        }
        .ct-language__dropdown li:hover{
            background: #444;
        }
        .ct-language__dropdown:before{
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 8px;
            height: 0;
            border: 0 solid transparent;
            border-right-width: 8px;
            border-left-width: 8px;
            border-bottom: 8px solid #222;
        }
        .ct-language{
            position: relative;
            background: #00aced;
            color: #fff;
            padding: 10px 0;
        }
        .ct-language:hover .ct-language__dropdown{
            max-height: 200px;
            padding-top: 8px;
        }
        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }

        .navbar-brand>img {
            padding-top: 11px;
            width: 130px;
            margin-left: 15px;
        }
        .navbar-brand {
            height: auto;
            margin: 0;
            padding: 0;
            margin-right: 20px;
        }
        .navbar {
            background-color: #000000;
        }
        .navbar-default .navbar-nav > .active > a {
            padding: 8px 19px 9px !important;
        }
        .navbar-nav > li.active {
            padding: 8px 0px 9px 0;
        }
        .navbar-right {
            padding-top: 0;
        }
        .navbar-default .navbar-nav > li > a::after {
            background-color: transparent;
            border-bottom: 3px solid #d2282e;
        }
        .navbar-default .navbar-nav>li {
            display: inline-block;
            text-align: center;
            float: none;
        }
        .navbar-default .navbar-nav>li>a {
            color: #fff;
        }
        .navbar-default .navbar-nav>li>a:hover {
            color: #fff;
            background-color: #0392CC;
        }
    </style>
</head>

<body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-4 header-shadow lightbox nav-dropdown-has-arrow">
{{--<a class="skip-link screen-reader-text" href="#main">Skip to content</a>--}}

<div id="wrapper">

    {{--<div class="ct-topbar">--}}
        {{--<div class="container">--}}
            {{--<ul class="list-unstyled list-inline ct-topbar__list">--}}
                {{--<li class="ct-language">Language <i class="fa fa-arrow-down"></i>--}}
                    {{--<ul class="list-unstyled ct-language__dropdown">--}}
                        {{--<li><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en"><img src="{{ url('images/flag-eng.png') }}" width="25" height="25" alt="USA"></a></li>--}}
                        {{--<li><a href="#googtrans(en|vi)" class="lang-es lang-select" data-lang="vi"><img src="https://www.solodev.com/assets/google-translate/flag-vietnam.png" alt="VIETNAM"></a></li>--}}
                    {{--</ul>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}


    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'vi', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
        }

        function triggerHtmlEvent(element, eventName) {
            var event;
            if (document.createEvent) {
                event = document.createEvent('HTMLEvents');
                event.initEvent(eventName, true, true);
                element.dispatchEvent(event);
            } else {
                event = document.createEventObject();
                event.eventType = eventName;
                element.fireEvent('on' + event.eventType, event);
            }
        }

        jQuery('.lang-select').click(function() {
            var theLang = jQuery(this).attr('data-lang');
            jQuery('.goog-te-combo').val(theLang);

            //alert(jQuery(this).attr('href'));
            window.location = jQuery(this).attr('href');
            location.reload();

        });
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    @include('user.header')

    <main id="main" class="">
        <div id="content" role="main" class="content-area">
            @include('user.banner')
            @include('user.intro')
            @include('user.services')
            @include('user.review-customer')
            @include('user.question')
        </div>
    </main><!-- #main -->
    @include('user.footer')

</div><!-- #wrapper -->

<link rel='stylesheet' id='flatsome-effects-css'  href='{{ asset('/css/effects.css') }}' type='text/css' media='all' />
<script type='text/javascript' src='{{ asset('/js/scripts.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/flatsome-live-search.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/hoverIntent.min.js') }}'></script>
{{--<script type='text/javascript'>--}}
    {{--/* <![CDATA[ */--}}
    {{--var flatsomeVars = {"ajaxurl":"http:\/\/thammytiensynhan.com\/wp-admin\/admin-ajax.php","rtl":"","sticky_height":"37"};--}}
    {{--/* ]]> */--}}
{{--</script>--}}
<script type='text/javascript' src='{{ asset('/js/flatsome.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/wp-embed.min.js') }}'></script>

</body>
</html>
