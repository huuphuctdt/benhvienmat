<!DOCTYPE html>
<!--[if IE 9 ]> <html lang="vi" class="ie9 loading-site no-js"> <![endif]-->
<!--[if IE 8 ]> <html lang="vi" class="ie8 loading-site no-js"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="vi" class="loading-site no-js"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=25.0, user-scalable=yes" />
    <title>Bệnh Viện Mắt Long Xuyên</title>
    <meta name='robots' content='noindex,follow' />
    <link rel='stylesheet' href="{{ asset('/css/app.css') }}">
    <link rel='stylesheet' id='contact-form-7-css'  href='{{ asset('/css/style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-four-css'  href='{{ asset('/css/font-awesome.min.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-icons-css'  href='{{ asset('/css/fl-icons.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-main-css'  href='{{ asset('/css/flatsome.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' id='flatsome-style-css'  href='{{ asset('/css/style_new.css?v1.0') }}' type='text/css' media='all' />
    <script type='text/javascript' src='{{ asset('/js/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('/js/jquery-migrate.min.js') }}'></script>
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/ie-fallback.css') }}">
    <script src="{{ asset('/js/ie-flexibility.js') }}"></script>
    <![endif]-->
    {{--<script src="{{ asset('/js/app.js') }}"></script>--}}
    <link rel="icon" href="{{ url('images/logo.jpg') }}" sizes="32x32" />
<?php include resource_path('views/layouts/googleanalytics.php'); ?>
<!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/59ba41cc4854b82732feff95/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</head>

<body class="home page-template page-template-page-blank page-template-page-blank-php page page-id-4 header-shadow lightbox nav-dropdown-has-arrow">

<div id="wrapper">
    @if($menus != null)
        @include('user.header')
    @endif
    <div class="text-center">
        <img src="{{ url('images/404.jpg') }}">
    </div>
    @if($footer != null)
        @include('user.footer')
    @endif
</div><!-- #wrapper -->
<link rel='stylesheet' id='flatsome-effects-css'  href='{{ asset('/css/effects.css') }}' type='text/css' media='all' />
<script type='text/javascript' src='{{ asset('/js/scripts.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/flatsome-live-search.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/hoverIntent.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/flatsome.js') }}'></script>
<script type='text/javascript' src='{{ asset('/js/wp-embed.min.js') }}'></script>

</body>
</html>
