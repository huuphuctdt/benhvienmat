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
</head>

<body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-4 header-shadow lightbox nav-dropdown-has-arrow">
{{--<a class="skip-link screen-reader-text" href="#main">Skip to content</a>--}}

<div id="wrapper">

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
