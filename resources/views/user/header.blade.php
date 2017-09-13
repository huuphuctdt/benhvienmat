<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        <div id="masthead" class="header-main show-logo-center">
            <div class="header-inner flex-row container logo-center medium-logo-center" role="navigation">

                <!-- Logo -->
                <div id="logo" class="flex-col logo">
                    <!-- Header logo -->
                    <a href="{{ url('/') }}" title="Bệnh Viện Mắt Long Xuyên" rel="home">
                        <img width="198" height="69" src="{{ url('images/'.$logo->image) }}" class="header_logo header-logo" alt="Bệnh Viện Mắt Long Xuyên"/>
                    </a>
                </div>

                <!-- Mobile Left Elements -->
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon" style="margin-top: -10px;">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay" data-color="" class="is-small" aria-controls="main-menu" aria-expanded="false">
                                <i class="icon-menu" ></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Left Elements -->
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="header-nav header-nav-main nav nav-left  nav-spacing-medium nav-uppercase" >
                    </ul>
                </div>

                <!-- Right Elements -->
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-spacing-medium nav-uppercase">
                    </ul>
                </div>

                <!-- Mobile Right Elements -->
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                    </ul>
                </div>

            </div><!-- .header-inner -->

        </div><!-- .header-main -->
        <div id="wide-nav" class="header-bottom wide-nav flex-has-center hide-for-medium">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-center">
                    <ul class="nav header-nav header-bottom-nav nav-center  nav-spacing-medium nav-uppercase">
                        @foreach($menus as $menu)
                        <li id="menu-item-1047" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children  menu-item-1047 has-dropdown"><a class="nav-top-link" @if(count($menu->menu_child) == 0) href="{{ $menu->link }}" target="_blank" @endif>{{ $menu->name }}
                                @if(count($menu->menu_child) > 0)<i class="icon-angle-down" ></i>@endif</a>
                            @if(count($menu->menu_child) > 0)
                            <ul class='nav-dropdown nav-dropdown-bold'>
                                @foreach($menu->menu_child as $item )
                                    <li id="menu-item-33" class="menu-item menu-item-type-post_type menu-item-object-page  menu-item-33"><a href="{{ $item->link }}" target="_blank">{{ $item->name }}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                        <li class="header-search header-search-lightbox has-icon">
                            <a href="#search-lightbox" data-open="#search-lightbox" data-focus="input.search-field"
                               class="is-small">
                                <i class="icon-search" style="font-size:16px;"></i></a>

                            <div id="search-lightbox" class="mfp-hide dark text-center">
                                <div class="searchform-wrapper ux-search-box relative form-flat is-large">
                                    <form method="get" class="searchform" action="#" role="search">
                                        <div class="flex-row relative">
                                            <div class="flex-col flex-grow">
                                                <input type="search" class="search-field mb-0" name="s" value="" id="s" placeholder="Search&hellip;" />
                                            </div><!-- .flex-col -->
                                            <div class="flex-col">
                                                <button type="submit" class="ux-search-submit submit-button secondary button icon mb-0">
                                                    <i class="icon-search" ></i>				</button>
                                            </div><!-- .flex-col -->
                                        </div><!-- .flex-row -->
                                        <div class="live-search-results text-left z-top"></div>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="html custom html_topbar_left"><h3 style="font-size: 16px; color: #06b4af; margin-bottom: 0px"><strong><a href="tel:02963522888">(+029) 63522888</a></strong></h3></li>
                        <li>
                            <div><a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en"><img src="{{ url('images/flag-eng.png') }}" width="25" height="25" alt="USA"></a></div>
                            </li><li>
                            <div><a href="#googtrans(en|vi)" class="lang-es lang-select" data-lang="vi"><img src="{{ url('images/flag-vietnam.png') }}" width="25" height="25" alt="VIETNAM"></a></div>
                        </li>
                    </ul>
                </div><!-- flex-col -->
            </div><!-- .flex-row -->
        </div><!-- .header-bottom -->

        <div class="header-bg-container fill"><div class="header-bg-image fill"></div><div class="header-bg-color fill"></div></div><!-- .header-bg-container -->
    </div><!-- header-wrapper-->
</header>
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
    function setcookie(name, value, days)
    {
        if (days)
        {
            var date = new Date();
            date.setTime(date.getTime()+days*24*60*60*1000); // ) removed
            var expires = "; expires=" + date.toGMTString(); // + added
        }
        else
            var expires = "";
        document.cookie = name+"=" + value+expires + ";path=/"; // + and " added
    }
    function del_cookie(name) {
        document.cookie = name + '=; expires=Thu, 01-Jan-70 00:00:01 GMT;';
    }
    jQuery(document).ready(function () {
        setcookie("test", "123123",30);
        jQuery('.lang-select').click(function() {
            var theLang = jQuery(this).attr('data-lang');
            jQuery('.goog-te-combo').val(theLang);

            if(theLang == 'vi'){
//                setcookie("googtrans", "/en/vi",30);
                del_cookie("test");
            }
            //alert(jQuery(this).attr('href'));
            window.location = jQuery(this).attr('href');
            location.reload();
            del_cookie("test");
        });
    });
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<!-- Mobile Sidebar -->
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar ">
        <ul class="nav nav-sidebar  nav-vertical nav-uppercase">
            <li class="header-search-form search-form html relative has-icon">
                <div class="header-search-form-wrapper">
                    <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                        <form method="get" class="searchform" action="#" role="search">
                            <div class="flex-row relative">
                                <div class="flex-col flex-grow">
                                    <input type="search" class="search-field mb-0" name="s" value="" id="s"
                                           placeholder="Tìm kiếm&hellip;"/>
                                </div><!-- .flex-col -->
                                <div class="flex-col">
                                    <button type="submit"
                                            class="ux-search-submit submit-button secondary button icon mb-0">
                                        <i class="icon-search"></i></button>
                                </div><!-- .flex-col -->
                            </div><!-- .flex-row -->
                            <div class="live-search-results text-left z-top"></div>
                        </form>
                    </div>
                </div>
            </li>
            @foreach($menus as $menu)
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1047">
                <a class="nav-top-link" @if(count($menu->menu_child) == 0) href="{{ $menu->link }}" target="_blank" @endif>{{ $menu->name }}</a>
                @if(count($menu->menu_child) > 0)
                <ul class=children>
                    @foreach($menu->menu_child as $item)
                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-33"><a href="{{ $item->link }}" target="_blank">{{ $item->name }}</a></li>
                    @endforeach
                </ul>
                @endif
            </li>
            @endforeach
        </ul>
    </div><!-- inner -->
</div>
<!-- #mobile-menu -->