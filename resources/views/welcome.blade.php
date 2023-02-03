<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>NW-Investments</title>
    <link href="https://fonts.googleapis.com/css?family=Asap%3Aregular" rel="stylesheet">
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="Bizipress &raquo; Feed" href="../feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Bizipress &raquo; Comments Feed"
        href="../comments/feed/index.html" />
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/demo.xpeedstudio.com\/wp\/bizipress\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.22"
            }
        };
        ! function(e, a, t) {
            var n, r, o, i = a.createElement("canvas"),
                p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }
            for (o = Array("flag", "emoji"), t.supports = {
                    everything: !0,
                    everythingExceptFlag: !0
                }, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case "flag":
                        return s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) ? !1 : !s([55356,
                            57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128,
                            56447
                        ], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203,
                            56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447
                        ]);
                    case "emoji":
                        return !s([55358, 56760, 9792, 65039], [55358, 56760, 8203, 9792, 65039])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports
                .everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t
                .readyCallback = function() {
                    t.DOMReady = !0
                }, t.supports.everything || (n = function() {
                    t.readyCallback()
                }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !
                    1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
                    "complete" === a.readyState && t.readyCallback()
                })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n
                    .wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'
        href='{{ asset('wp-content/plugins/contact-form-7/includes/css/stylesce52.css?ver=5.0.2') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fw-ext-builder-frontend-grid-css'
        href='{{ asset('wp-content/plugins/unyson/framework/extensions/builder/static/css/frontend-grid374a.css?ver=1.2.10') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='fw-ext-forms-default-styles-css'
        href='{{ asset('wp-content/plugins/unyson/framework/extensions/forms/static/css/frontendda48.css?ver=2.7.24') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href='{{ asset('wp-content/themes/bizipress/assets/css/bootstrap.min5152.css?ver=1.0') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bizipress-xs-main-css'
        href='{{ asset('wp-content/themes/bizipress/assets/css/xs_main5152.css?ver=1.0') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bizipress-custom-blog-css'
        href='{{ asset('wp-content/themes/bizipress/assets/css/blog-style5152.css?ver=1.0') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bizipress-custom-icon-font-css'
        href='{{ asset('wp-content/themes/bizipress/assets/css/icon-font5152.css?ver=1.0') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='animate-css'
        href='{{ asset('wp-content/themes/bizipress/assets/css/animate5152.css?ver=1.0') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='font-awesome-css'
        href='{{ asset('wp-content/plugins/unyson/framework/static/libs/font-awesome/css/font-awesome.minda48.css?ver=2.7.24') }}'
        type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css'
        href='{{ asset('wp-content/themes/bizipress/assets/css/owl.carousel5152.css?ver=1.0') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='owl.theme-css'
        href='{{ asset('wp-content/themes/bizipress/assets/css/owl.theme5152.css?ver=1.0') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='slide.carousel-css'
        href='{{ asset('wp-content/themes/bizipress/assets/css/slide.owl.carousel5152.css?ver=1.0') }}' type='text/css'
        media='all' />
    <link rel='stylesheet' id='bizipress-style-css'
        href='{{ asset('wp-content/themes/bizipress/assets/css/style5152.css?ver=1.0') }}' type='text/css'
        media='all' />
    <style id='bizipress-style-inline-css' type='text/css'>
    @media only screen and (max-width: 1099px) {.xs-sc-0a1a81fb {background-attachment:scroll !important;}}.xs-sc-0a1a81fb{background-image:url(../wp-content/uploads/2018/02/facts_parallax.jpg); background-repeat: no-repeat; background-position: center center; background-size: cover; background-attachment: fixed;}.xs-sc-0a1a81fb .xs-main-overlay{background-color:rgba(0,0,0,0.7)}.xs-sc-0a1a81fb{overflow:hidden;}


        .xs-sc-860b9289 {
            margin: 0px -15px 0px -15px;
        }

        .xs-sc-982011c1 {
            overflow: hidden;
        }

        .xs-sc-3832556b {
            margin: 60px 0px 40px 0px;
        }

        @media only screen and (max-width: 1099px) {
            .xs-sc-3832556b {
                background-attachment: scroll !important;
            }
        }

        .xs-sc-3832556b {
            background-image: url({{ asset('wp-content/uploads/2018/01/parallax2.jpg') }});
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            background-attachment: fixed;
        }

        .xs-sc-3832556b .xs-main-overlay {
            background-color: rgba(15, 39, 101, 0.85)
        }

        .xs-sc-3832556b {
            overflow: visible;
        }

        .xs-heading-b946b47a .xs-title span {}

        .xs-heading-b946b47a .xs-title {
            font-size: 44px
        }

        .xs-heading-b946b47a {
            margin-bottom: 20px
        }

        .xs-sc-5bc649e0 {
            overflow: hidden;
        }

        .xs-sc-91665d5b .fw-main-row {
            color: #ffffff;
        }

        .xs-sc-91665d5b .fw-main-row {
            background-image: url({{ asset('wp-content/uploads/2018/01/feature1.jpg') }});
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .xs-sc-91665d5b .fw-main-row .xs-main-overlay {
            background-color: rgba(33, 84, 207, 0.85)
        }

        .xs-sc-9cf15eff .fw-main-row {
            color: #ffffff;
        }

        .xs-sc-9cf15eff .fw-main-row {
            background-image: url({{ asset('wp-content/uploads/2018/01/feature2.jpg') }});
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .xs-sc-9cf15eff .fw-main-row .xs-main-overlay {
            background-color: rgba(15, 39, 101, 0.85)
        }

        .xs-sc-123b8dce .fw-main-row {
            color: #ffffff;
        }

        .xs-sc-123b8dce .fw-main-row {
            background-image: url({{ asset('wp-content/uploads/2018/01/feature3.jpg') }});
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
        }

        .xs-sc-123b8dce .fw-main-row .xs-main-overlay {
            background-color: rgba(34, 34, 34, 0.85)
        }

        .xs-sc-1f6a129c {
            padding: 70px 0px 70px 0px;
        }

        .xs-sc-1f6a129c {
            background-color: #f7f9fd
        }

        .xs-sc-1f6a129c {
            overflow: hidden;
        }

        .xs-sc-37b5a192 {
            padding: 100px 0px 150px 0px;
        }

        .xs-heading-a623081f .xs-title span {}

        .xs-heading-a623081f {
            margin-bottom: 0px
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .fw-special-title {
            font-family: gilroy;
            font-style: normal;
            font-weight: 700;
            color: #252a37;
        }

        .fw-special-subtitle,
        .fw-contact-form-description,
        .team-member h5 {
            font-family: Asap;
            font-style: normal;
            font-weight: 400;
        }

        body {
            font-family: Asap;
            font-style: normal;
            font-weight: 400;
            color: #626c84;
            line-height: 30px;
            font-size: 16px;
        }

        .colorsbg,
        .separator,
        .separator-left,
        .separator,
        .preloader {
            background: #2154cf;
        }

        .service-icon:before {
            border-bottom: 30px solid #2154cf;
        }

        .footer {
            background: url({{ asset('wp-content/uploads/2018/01/footer-bg.jpg') }});
        }

        .footer .xs-main-overlay {
            background-color: rgba(0, 8, 29, 0.9)
        }

        .footer,
        .footer-widget ul.list-dash li a,
        .footer .widget-title {
            color: #ffffff
        }

        .copyright-info,
        .copyright p {
            color: #ffffff;
        }

        .copyright {
            background: #00081d
        }

        a.link-more.color,
        a:hover,
        ul.main-menu li ul li.current-menu-item a,
        ul.main-menu li>ul.sub-menu>li:hover>a,
        .footer-widget ul.list-dash li a:hover,
        #footer-menu li a:hover,
        #responsive-menu ul li a:hover,
        .header-standard ul.navbar-nav>li.active>a,
        .header-standard ul.navbar-nav>li:hover>a,
        .entry-header .entry-title a:hover,
        .tab-content-info .btn-light:hover {
            color: #fc6a2a;
        }

        a,
        .download-btn i,
        .top-bar.solid-bg ul.top-menu li a:hover,
        .top-bar.solid-bg .top-social a:hover,
        ul.top-menu li a:hover,
        .top-info .info-icon,
        .team-social-icons a:hover,
        .ts-testimonial-static .ts-testimonial-text:before,
        .latest-post .post-title a:hover,
        .team-social a:hover,
        .plan.featured .btn,
        .footer-social ul li a:hover,
        .fw-accordion .fw-accordion-title.accordion-head.ui-state-active,
        ul.list-dash li:before,
        .ts-feature-info.icon-left .feature-icon,
        .section-title.border-left:before,
        .job-box .job-info .desc strong,
        .post-meta a:hover,
        .post-meta-left a:hover,
        .sidebar .widget ul li a:hover,
        .post-navigation span:hover,
        .post-navigation h3:hover,
        .post-navigation i,
        .post-navigation span:hover,
        .post-navigation h3:hover,
        .sidebar ul li.active a,
        .sidebar ul li:hover a,
        .ts-contact-info .ts-contact-icon,
        .tab-head i,
        .ts-feature-box .feature-icon,
        .featured-tab .nav-tabs>li.active>a,
        .featured-tab .nav-tabs>li.active>a,
        .toll-free-cta h3,
        .parallax-section .feature-content .toll-free-cta h3,
        .insurance-tab .nav.nav-tabs>li.active>a,
        .insurance-tab .nav.nav-tabs>li:hover>a {
            color: #2154cf;
        }

        .section-title.border-left:before,
        .section-title:after,
        .sidebar .widget-title,
        .box-slider-text .slider.btn.btn-border,
        ul.main-menu>li:hover>a:before,
        ul.main-menu>li.current-menu-item>a:before,
        ul.main-menu>li.current-menu-parent>a:before,
        .content-title,
        blockquote.light,
        .section-title-dash:after,
        .section-title-dash span.dashborder:before,
        .section-title-dash span.dashborder:after,
        #comments .form-control:focus,
        #comments input:focus {
            border-color: #2154cf;
        }

        ul.main-menu>li:hover>a:before,
        ul.main-menu>li.current-menu-item>a:before,
        ul.main-menu>li.current-menu-parent>a:before {
            border-color: #fc6a2a;
        }

        .btn-primary,
        .xs-custom-menu>li.current-menu-item>a,
        .xs-custom-menu>li:hover>a,
        #main-slide .carousel-indicators li.active,
        .owl-carousel.owl-theme .owl-nav [class*=owl-],
        .owl-theme .owl-dots .owl-dot.active span,
        #main-slide .carousel-indicators li:hover,
        #main-slide .carousel-control i:hover,
        .box-primary,
        .plan.featured,
        .quote-item .quote-text:before,
        .quote-item-area .quote-thumb,
        #back-to-top .btn.btn-primary,
        .sidebar .search-widget .input-group-btn i,
        .fw-accordion .fw-accordion-title.accordion-head .ui-icon:before,
        .finances-newsletter input[type=submit],
        .post-meta-date,
        .pagination>.active>a,
        .pagination>.active>a:hover,
        .pagination>li>a:hover,
        .featured-tab .nav-tabs>li.active>a:after,
        .page-slider.owl-carousel.owl-theme .owl-nav [class*=owl-]:hover,
        .header-standard .nav-search,
        .header-standard .search-block .search-close,
        .header-standard .nav-search,
        .header-standard .search-block .search-close,
        .ts-feature-info.icon-left.icon-round .feature-icon,
        .mc4wp-form .newsletter-bg-form,
        .ts-progress-bar .progress-bar {
            background-color: #2154cf;
        }

        .navbar-toggle {
            background-color: #fc6a2a;
        }

        .owl-carousel.featured-projects-slide.owl-theme .owl-nav>.disabled,
        .ts-service-overlay .service-title {
            background: rgba(33, 84, 207, 0.85)
        }

        .section-title-vertical .section-title {
            color: rgba(33, 84, 207, 0.20)
        }

        .section-title-vertical .section-title:after {
            border-bottom: 2px solid rgba(33, 84, 207, 0.20)
        }

        .wpcf7-form .wpcf7-form-control.wpcf7-submit:hover,
        .header-standard.header-boxed .search-block .search-close,
        .header-standard.header-boxed .nav-search {
            background: #fc6a2a
        }

        ul.main-menu li ul li.current-menu-item a,
        ul.main-menu li>ul.sub-menu>li:hover>a {
            color: #fc6a2a
        }
    </style>
    <link rel='stylesheet' id='bizipress-responsive-css'
        href='{{ asset('wp-content/themes/bizipress/assets/css/responsive5152.css?ver=1.0') }}' type='text/css'
        media='all' />
    <script type='text/javascript' src='{{ asset('wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1') }}'></script>
    <link rel='https://api.w.org/' href='{{ asset('wp-json/index.html') }}' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="../xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{{ asset('wp-includes/wlwmanifest.xml') }}" />
    <meta name="generator" content="WordPress 4.9.22" />
    <link rel="canonical" href="index.html" />
    <link rel='shortlink' href='../index47f1.html?p=1754' />
    <link rel="alternate" type="application/json+oembed"
        href="{{ asset('wp-json/oembed/1.0/embed5d85.json?url=https%3A%2F%2Fdemo.xpeedstudio.com%2Fwp%2Fbizipress%2Fhome-8%2F') }}" />
    <link rel="alternate" type="text/xml+oembed"
        href="{{ asset('wp-json/oembed/1.0/embedc80e?url=https%3A%2F%2Fdemo.xpeedstudio.com%2Fwp%2Fbizipress%2Fhome-8%2F&amp;format=xml') }}" />
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
</head>

<body
    class="page-template page-template-template page-template-template-multipage-homepage page-template-templatetemplate-multipage-homepage-php page page-id-1754">
    <div class="body-inner">
        <style type="text/css">
            .site-navigation .row {
                background: #0f2765
            }

            ul.main-menu>li>a,
            .nav-search,
            .header-standard ul.navbar-nav>li>a,
            .header-standard.header-transparent ul.navbar-nav>li>a {
                color: #ffffff
            }
        </style>
        {{-- <div id="top-bar" class="topbar-transparent border-down">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="menu-top-menu-container">
                            <ul id="top-bar-menu" class="top-menu unstyled ">
                                <li id="menu-item-1738"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1738"><a
                                        href="#">Why Us</a></li>
                                <li id="menu-item-1739"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1739"><a
                                        href="#">Locations</a></li>
                                <li id="menu-item-1740"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1740"><a
                                        href="#">Services</a></li>
                                <li id="menu-item-1741"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1741"><a
                                        href="#">Solution Center</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 text-right">
                        <div></div>
                        <ul class="top-social">
                            <li>
                                <a title="Twitter" href="#" target="_blank">
                                    <span class="social-icon"><i class="fa fa-twitter"></i></span>
                                </a>
                                <a title="Facebook" href="#" target="_blank">
                                    <span class="social-icon"><i class="fa fa-facebook"></i></span>
                                </a>
                                <a title="instagram" href="#" target="_blank">
                                    <span class="social-icon"><i class="fa fa-instagram"></i></span>
                                </a>
                                <a title="g+" href="#" target="_blank">
                                    <span class="social-icon"><i class="fa fa-google-plus"></i></span>
                                </a>
                                <a title="linkedin" href="#" target="_blank">
                                    <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}

        <header id="header" class="header nav-down nav-boxed-transparent">
            <div class="container">
                <div class="row">
                    <div class="logo-area clearfix">
                        <div class="col-md-3 col-xs-12 navbar-header">
                            <div class="logo">
                                <a href="#"> <img src="{{ asset('wp-content/uploads/2018/02/logo.png') }}"
                                        alt="Bizipress">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-9 pull-right">
                            <ul class="top-info unstyled">
                                {{-- <li class="top-info-content">
                                    <span class="info-icon"><i class="icon icon-phone3"></i></span>
                                    <div class="info-wrapper">
                                        <p class="info-title">1+(91) 458 654 528</p>
                                        <p class="info-subtitle">Phone number</p>
                                    </div>
                                </li> --}}
                                {{-- <li class="top-info-content">
                                    <span class="info-icon"><i class="icon icon-envelope"></i></span>
                                    <div class="info-wrapper">
                                        <p class="info-title"><a href="#" class="__cf_email__"
                                                data-cfemail="11787f777e517469707c617d743f727e7c">[email&#160;protected]</a>
                                        </p>
                                        <p class="info-subtitle">Email Address</p>
                                    </div>
                                </li> --}}
                                {{-- <li class="top-info-content">
                                    <span class="info-icon"><i class="icon icon-map-marker2"></i></span>
                                    <div class="info-wrapper">
                                        <p class="info-title">1105 Roosevelt Street, CA</p>
                                        <p class="info-subtitle">Location</p>
                                    </div>
                                </li> --}}
                                {{-- <li class="header-get-a-quote">
                                    <a class="btn btn-primary" href="#"> Get A quote</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="site-navigation navdown">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="menubar site-nav-inner">

                                <div class="navbar-responsive-collapse ">
                                    <ul id="main-menu" class="nav navbar-nav main-menu">
                                        <li id="menu-item-1036"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-1036">
                                            <a href="/">Accueil</a>
                                            {{-- <ul class="sub-menu">
                                                <li id="menu-item-1690"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1690">
                                                    <a href="#">Home 1</a>
                                                </li>
                                                <li id="menu-item-1652"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1652">
                                                    <a href="#">Home 2</a>
                                                </li>
                                                <li id="menu-item-1689"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1689">
                                                    <a href="#">Home 3</a>
                                                </li>
                                                <li id="menu-item-1701"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1701">
                                                    <a href="#">Home 4</a>
                                                </li>
                                                <li id="menu-item-1709"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1709">
                                                    <a href="#">Home 5</a>
                                                </li>
                                                <li id="menu-item-1719"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1719">
                                                    <a href="#">Home 6</a>
                                                </li>
                                                <li id="menu-item-1751"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1751">
                                                    <a href="#">Home 7</a>
                                                </li>
                                                <li id="menu-item-1756"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1754 current_page_item menu-item-1756">
                                                    <a href="#">Home 8</a>
                                                </li>
                                                <li id="menu-item-1759"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1759">
                                                    <a href="#">Home 9</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li id="menu-item-885"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-885">
                                            <a href="#service">Service</a>
                                            {{-- <ul class="sub-menu">
                                                <li id="menu-item-1210"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1210">
                                                    <a href="#">About Us</a>
                                                </li>
                                                <li id="menu-item-1339"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1339">
                                                    <a href="#">About Us 2</a>
                                                </li>
                                                <li id="menu-item-890"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-890">
                                                    <a href="#">Our Team</a>
                                                </li>
                                                <li id="menu-item-1527"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1527">
                                                    <a href="#">Cases</a>
                                                </li>
                                                <li id="menu-item-1431"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1431">
                                                    <a href="#">Testimonial</a>
                                                </li>
                                                <li id="menu-item-1505"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1505">
                                                    <a href="#">Career</a>
                                                </li>
                                                <li id="menu-item-927"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-927">
                                                    <a href="#">Pricing Table</a>
                                                </li>
                                                <li id="menu-item-1481"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1481">
                                                    <a href="#">Faq</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li id="menu-item-786"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-786">
                                            <a href="#garantie">Garantie</a>
                                            {{-- <ul class="sub-menu">
                                                <li id="menu-item-1192"
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1192">
                                                    <a href="#">Financial
                                                        Planning</a>
                                                </li>
                                                <li id="menu-item-1193"
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1193">
                                                    <a href="#">Tax Planning</a>
                                                </li>
                                                <li id="menu-item-1079"
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1079">
                                                    <a href="#">Insurance
                                                        Consulting</a>
                                                </li>
                                                <li id="menu-item-1194"
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1194">
                                                    <a href="#">Saving Strategy</a>
                                                </li>
                                                <li id="menu-item-1195"
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1195">
                                                    <a href="#">Mutual Funds</a>
                                                </li>
                                                <li id="menu-item-1196"
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1196">
                                                    <a href="#">Business Loan</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li id="menu-item-1571"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1571">
                                            <a href="#avis">Avis</a>
                                            {{-- <ul class="sub-menu">
                                                <li id="menu-item-1925"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1925">
                                                    <a href="#">Addons List 1</a>
                                                </li>
                                                <li id="menu-item-1927"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1927">
                                                    <a href="#">Addons List 2</a>
                                                </li>
                                                <li id="menu-item-1926"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1926">
                                                    <a href="#">Addons List 3</a>
                                                </li>
                                                <li id="menu-item-1931"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1931">
                                                    <a href="#">Addons List 4</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li id="menu-item-789"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-789">
                                            <a href="#blog">Blog</a>
                                            {{-- <ul class="sub-menu">
                                                <li id="menu-item-1647"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1647">
                                                    <a href="#">News Right Sidebar</a>
                                                </li>
                                                <li id="menu-item-1646"
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1646">
                                                    <a href="#">News Left Sidebar</a>
                                                </li>
                                                <li id="menu-item-1575"
                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1575">
                                                    <a href="#">News
                                                        Single</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li id="menu-item-187"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187">
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div id="responsive-menu" class="d-md-none d-lg-none">
                                <div class="ts-navbar-inner">

                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse">
                                    <ul id="menu-main-menu" class="nav navbar-nav">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-1036 active active">
                                            <a title="Accueil" href="/">Accueil</a>
                                            {{-- <span class="menu-toggler collapsed" data-toggle="collapse"
                                                data-target=".collapse-1036">
                                                <i class="fa fa-angle-right"></i>
                                            </span> --}}
                                            {{-- <ul role="menu" class="collapse collapse-1036 ">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1690">
                                                    <a title="Home 1" href="#">Home 1</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1652">
                                                    <a title="Home  2" href="#">Home 2</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1689">
                                                    <a title="Home  3" href="#">Home 3</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1701">
                                                    <a title="Home  4" href="#">Home 4</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1709">
                                                    <a title="Home  5" href="#">Home 5</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1719">
                                                    <a title="Home  6" href="#">Home 6</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1751">
                                                    <a title="Home  7" href="#">Home 7</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-1754 current_page_item menu-item-1756 active">
                                                    <a title="Home 8" href="#">Home 8</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1759">
                                                    <a title="Home 9" href="#">Home 9</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-885">
                                            <a title="Services" href="#service">Services</a>
                                            {{-- <span class="menu-toggler collapsed" data-toggle="collapse"
                                                data-target=".collapse-885">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                            <ul role="menu" class="collapse collapse-885 ">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1210">
                                                    <a title="About Us" href="#">About Us</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1339">
                                                    <a title="About Us 2" href="#">About Us
                                                        2</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-890">
                                                    <a title="Our Team" href="#">Our Team</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1527">
                                                    <a title="Cases" href="#">Cases</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1431">
                                                    <a title="Testimonial" href="#">Testimonial</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1505">
                                                    <a title="Career" href="#">Career</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-927">
                                                    <a title="Pricing Table" href="#">Pricing Table</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1481">
                                                    <a title="Faq" href="#">Faq</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-786">
                                            <a title="Garantie" href="#garantie">Garantie</a>
                                            {{-- <span class="menu-toggler collapsed" data-toggle="collapse"
                                                data-target=".collapse-786">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                            <ul role="menu" class="collapse collapse-786 ">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1192">
                                                    <a title="Financial Planning" href="#">Financial
                                                        Planning</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1193">
                                                    <a title="Tax Planning" href="#">Tax Planning</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1079">
                                                    <a title="Insurance Consulting" href="#">Insurance
                                                        Consulting</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1194">
                                                    <a title="Saving Strategy" href="#">Saving
                                                        Strategy</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1195">
                                                    <a title="Mutual Funds" href="#">Mutual Funds</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-service menu-item-1196">
                                                    <a title="Business Loan" href="#">Business Loan</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1571">
                                            <a title="Avis" href="#avis">Avis</a>
                                            {{-- <span class="menu-toggler collapsed" data-toggle="collapse"
                                                data-target=".collapse-1571">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                            <ul role="menu" class="collapse collapse-1571 ">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1925">
                                                    <a title="Addons List 1" href="#">Addons
                                                        List 1</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1927">
                                                    <a title="Addons List 2" href="#">Addons
                                                        List 2</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1926">
                                                    <a title="Addons List 3" href="#">Addons
                                                        List 3</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1931">
                                                    <a title="Addons List 4" href="#">Addons
                                                        List 4</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-789">
                                            <a title="Blog" href="#">Blog</a>
                                            {{-- <span class="menu-toggler collapsed" data-toggle="collapse"
                                                data-target=".collapse-789">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                            <ul role="menu" class="collapse collapse-789 ">
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1647">
                                                    <a title="News Right Sidebar" href="#">News Right
                                                        Sidebar</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1646">
                                                    <a title="News Left Sidebar" href="#">News Left Sidebar</a>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-post menu-item-1575">
                                                    <a title="News Single" href="#">News
                                                        Single</a>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-187">
                                            <a title="Contact" href="#blog">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </nav>
        </header>
        <div class="fw-page-builder-content">
            <section id="xs-sec-debc2e82" class="fw-main-row   xs-sc-debc2e82   ">
                <div class="xs-main-overlay"></div>
                <div class="fw-container-fluid">
                    <div class="fw-row">
                        <div class="fw-col-inner">
                            <div id="xs-col-860b9289" class="fw-col-md-12     xs-sc-860b9289    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">

                                        <div id="main-slide" class="carousel slide  " data-ride="carousel">

                                            <div class="carousel-inner">
                                                <div class="item active"
                                                    style="background-image:url(../wp-content/uploads/2018/01/bg1.jpg)">
                                                    <div class="container">
                                                        <div class="slider-content text-left ">
                                                            <div class="col-md-12">
                                                                <h2 class="slide-title title-light animated3">Vous
                                                                    voulez maximiser vos investissements financiers ?
                                                                </h2>
                                                                <h3 class="slide-sub-title animated3">Rejoignez nous !
                                                                </h3>
                                                                <p class="slider-description lead animated3">Des
                                                                    milliers
                                                                    d'investisseurs ont déjà choisi notre service
                                                                    financier.</p>
                                                                <p class="animated3">
                                                                    <a target="_self" href="#"
                                                                        class="slider btn btn-primary"> Notre
                                                                        service</a>
                                                                    <a target="_self" href="#"
                                                                        class="slider btn btn-border"> Contactez
                                                                        Nous</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item  "
                                                    style="background-image:url(../wp-content/uploads/2018/02/bg2.jpg)">
                                                    <div class="container">
                                                        <div class="slider-content text-center ">
                                                            <div class="col-md-12">
                                                                <h2 class="slide-title title-light animated3"></h2>
                                                                <h3 class="slide-sub-title animated3">Les meilleurs
                                                                    stratégies
                                                                    <br />d'investissement
                                                                </h3>
                                                                <p class="animated3">
                                                                    <a target="_self" href="#"
                                                                        class="slider btn btn-primary"> Notre
                                                                        service</a>
                                                                    <a target="_self" href="#"
                                                                        class="slider btn btn-border"> Contactez
                                                                        Nous</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item  "
                                                    style="background-image:url(../wp-content/uploads/2018/01/bg3.jpg)">
                                                    <div class="container">
                                                        <div class="slider-content text-right ">
                                                            <div class="col-md-12">
                                                                <h2 class="slide-title title-light animated3">Nous
                                                                    offrons des stratégies
                                                                    d'investissement</h2>
                                                                <h3 class="slide-sub-title animated3">Sur mesure
                                                                </h3>
                                                                <p class="slider-description lead animated3">Qu'il
                                                                    s'agisse
                                                                    de croissance à long terme ou de revenus réguliers.
                                                                </p>
                                                                <p class="animated3">
                                                                    <a target="_self" href="#"
                                                                        class="slider btn btn-primary"> Notre
                                                                        service</a>
                                                                    <a target="_self" href="#"
                                                                        class="slider btn btn-border"> Contactez
                                                                        Nous</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <ol class="carousel-indicators">
                                                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                                                <li data-target="#main-slide" data-slide-to="1" class=" "></li>
                                                <li data-target="#main-slide" data-slide-to="2" class=" "></li>
                                            </ol>

                                            <a class="left main-slide carousel-control" href="#main-slide"
                                                data-slide="prev">
                                                <span><i class="fa fa-angle-left"></i></span>
                                            </a>
                                            <a class="right main-slide carousel-control" href="#main-slide"
                                                data-slide="next">
                                                <span><i class="fa fa-angle-right"></i></span>
                                            </a>
                                        </div>
                                        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                        <script>
                                            //slider js
                                            jQuery(document).ready(function($) {

                                                $('#main-slide').carousel({
                                                    pause: true,
                                                    interval: 100000,
                                                });
                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section id="service" class="fw-main-row   xs-sc-6454c33a   ">
                <br>
                <div class="xs-main-overlay"></div>
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-inner">
                            <div id="xs-col-f1ca8849" class="fw-col-md-6     xs-sc-f1ca8849    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="heading  xs-heading-06189b44   ">
                                            <br>
                                            <h3 class="xs-title content-title boder-none">Investir et rentabiliser à
                                                court terme à votre portée.</h3>
                                        </div>
                                        <br>
                                        <div class="xs-text-block  xs-text-block-f5a71130">
                                            <p>Nous comprenons que prendre des décisions
                                                d'investissement peut être stressant et incertain. C'est pourquoi nous
                                                offrons des
                                                services de gestion de portefeuille de qualité pour aider nos clients à
                                                atteindre leurs
                                                objectifs financiers.</p>
                                        </div>
                                        {{-- <div id="xs-sc-cfda35b1" class="fw-divider-space "></div> --}}
                                        {{-- <div class="ts-feature-classic ">
                                            <div class="ts-feature-info icon-left">
                                                <span class="feature-icon">
                                                    <i class="icon icon-business"></i>
                                                </span>
                                                <div class="feature-content">
                                                    <h3 class="ts-feature-title">80% Cost Savings</h3>
                                                    <p>We have a culturally diverse, forward thinking team.</p>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <br>
                                        <div id="xs-sc-3d35374b" class="fw-divider-space "></div>
                                        <div class="ts-feature-classic ">
                                            <div class="ts-feature-info icon-left">
                                                <span class="feature-icon">
                                                    <i class="icon icon-chart22"></i>
                                                </span>
                                                <div class="feature-content">
                                                    <h3 class="ts-feature-title">12 % de rendement mensuel</h3>
                                                    <p>C’est une réalité ! Associez vous à nous pour
                                                        le vivre !</p>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- <div id="xs-sc-f843b26c" class="fw-divider-space "></div>
                                        <div class="ts-feature-classic ">
                                            <div class="ts-feature-info icon-left">
                                                <span class="feature-icon">
                                                    <i class="icon icon-deal"></i>
                                                </span>
                                                <div class="feature-content">
                                                    <h3 class="ts-feature-title">4.5% Tax Saved</h3>
                                                    <p>Make your dream come true have ideas, goals.</p>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="fw-col-inner">
                                <div id="xs-col-da34acc1" class="fw-col-md-6     xs-sc-da34acc1    ">
                                    <div class="fw-main-row">
                                        <div class="fw-col-inner">
                                            <div class="fw-single-image  ">
                                                <img src="../wp-content/uploads/2018/02/case-study3.jpg"
                                                    class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="xs-sec-5bc649e0" class="fw-main-row   xs-sc-5bc649e0   ">
                <div class="xs-main-overlay"></div>
                <div class="fw-container-fluid">
                    <div class="fw-row">
                        <div class="fw-col-inner">
                            <div id="xs-col-91665d5b"
                                class="fw-col-md-4     xs-sc-91665d5b  xs-col-no-padding text-center ">
                                <div class="fw-main-row">
                                    <div class="xs-main-overlay"></div>
                                    <div class="fw-col-inner">
                                        <div class="ts-feature-box ">
                                            <div class="ts-feature-info">
                                                <span class="feature-icon">
                                                    <i class="icon icon-consut2"></i>
                                                </span>
                                                <div class="feature-content">
                                                    <h3 class="ts-feature-title">Transparence</h3>
                                                    <p>Expert dans les instruments financiers à effets de levier
                                                        calculée.
                                                        Nous sommes un congloméra d’investissement axé sur la classe
                                                        moyenne avec
                                                        pour vision l’essor de cette dernière.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-col-inner">
                                <div id="xs-col-9cf15eff"
                                    class="fw-col-md-4     xs-sc-9cf15eff  xs-col-no-padding text-center ">
                                    <div class="fw-main-row">
                                        <div class="xs-main-overlay"></div>
                                        <div class="fw-col-inner">
                                            <div class="ts-feature-box ">
                                                <div class="ts-feature-info">
                                                    <span class="feature-icon">
                                                        <i class="icon icon-chart22"></i>
                                                    </span>
                                                    <div class="feature-content">
                                                        <h3 class="ts-feature-title">Performance</h3>
                                                        <p>Favoriser la classe moyenne au travers d’instruments
                                                            financiers , à risques modérés
                                                            et à forte rentabilité en un laps de temps est le coeur de
                                                            notre métier . Le conseil et
                                                            le suivi des performances notre valeur de jugement.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fw-col-inner">
                                    <div id="xs-col-123b8dce"
                                        class="fw-col-md-4     xs-sc-123b8dce  xs-col-no-padding text-center ">
                                        <div class="fw-main-row">
                                            <div class="xs-main-overlay"></div>
                                            <div class="fw-col-inner">
                                                <div class="ts-feature-box ">
                                                    <div class="ts-feature-info">
                                                        <span class="feature-icon">
                                                            <i class="icon icon-user2"></i>
                                                        </span>
                                                        <div class="feature-content">
                                                            <h3 class="ts-feature-title">Responsabilité</h3>
                                                            <p>L’accompagnement poste gain, notre fer de lance pour une
                                                                pérénisation de ce
                                                                projet.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </section>
            <section id="garantie" class="fw-main-row   xs-sc-1f6a129c   ">
                <div class="xs-main-overlay"></div>
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-inner">
                            <div id="xs-col-ab06aaee" class="fw-col-md-8     xs-sc-ab06aaee    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="call-to-action ">
                                            <h3>Investir et rentabiliser à court terme à votre portée.</h3>
                                            <p class="call-to-action-details">Rejoignez notre communauté
                                                d'investisseurs en confiance et laissez-nous vous
                                                aider à atteindre vos objectifs financiers.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-col-inner">
                                <div id="xs-col-c1aeba22" class="fw-col-md-4     xs-sc-c1aeba22    ">
                                    <div class="fw-main-row">
                                        <div class="fw-col-inner">
                                            <div class="text-right "> <a target="_self" href="#"
                                                    class="margin-top-20 margin-right-10 btn btn-primary">
                                                    Contactez-nous</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
            <section id="xs-sec-9776613e" class="fw-main-row   xs-sc-9776613e   ">
                <br>
                <div class="xs-main-overlay"></div>
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-inner">
                            <div id="xs-col-4b2cc25d" class="fw-col-md-6     xs-sc-4b2cc25d    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="fw-single-image  ">
                                            <img src="../wp-content/uploads/2018/01/case-study2.jpg"
                                                class="img-responsive" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-col-inner">
                                <div id="xs-col-79da8b80" class="fw-col-md-6     xs-sc-79da8b80    ">
                                    <div class="fw-main-row">
                                        <div class="fw-col-inner">
                                            <div class="heading  xs-heading-ffe67c61   ">
                                                <br>
                                                <h3 class="xs-title content-title boder-none"> Notre offre:
                                                </h3>
                                            </div>
                                            <div class="xs-text-block  xs-text-block-dc963eda">
                                                <p>Notre équipe de professionnels expérimentés est dédiée à offrir des
                                                    conseils
                                                    personnalisés et des stratégies d'investissement adaptées aux
                                                    besoins de chaque
                                                    client. Nous nous engageons à maintenir une communication
                                                    transparente et
                                                    régulière pour que nos clients soient informés de l'évolution de
                                                    leur portefeuille.
                                                    <br>
                                                    <strong>Faites reculer les barrières de l’inflation.</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="xs-sec-0a1a81fb"
                class="fw-main-row parallax-section  xs-sc-0a1a81fb text-center  section-padding">
                <div class="xs-main-overlay"></div>
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-inner">
                            <div id="xs-col-767bd371" class="fw-col-md-3     xs-sc-767bd371    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="fact-box">
                                            <div class="text-center">
                                                <i class="icon icon-money-1"></i>
                                                <h3 class="facts-num">
                                                    <span class="counterUp">72</span> x plus
                                                </h3>
                                                <p style="color: white">Rentable que le livret A sur 1 an.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-col-inner">
                                <div id="xs-col-3bf6c8a9" class="fw-col-md-3     xs-sc-3bf6c8a9    ">
                                    <div class="fw-main-row">
                                        <div class="fw-col-inner">
                                            <div class="fact-box">
                                                <div class="text-center">
                                                    <i class="icon icon-deal"></i>
                                                    <h3 class="facts-num">
                                                        <span class="counterUp">36</span> x plus
                                                    </h3>
                                                    <p style="color: white">Rentable que le livret jeune sur 1 an.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fw-col-inner">
                                    <div id="xs-col-d549695b" class="fw-col-md-3     xs-sc-d549695b    ">
                                        <div class="fw-main-row">
                                            <div class="fw-col-inner">
                                                <div class="fact-box">
                                                    <div class="text-center">
                                                        <i class="icon icon-chart22"></i>
                                                        <h3 class="facts-num">
                                                            <span class="counterUp">15</span> x plus
                                                        </h3>
                                                        <p style="color: white">Rentable que l’immobilier sur 25 ans.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fw-col-inner">
                                        <div id="xs-col-bf3dac22" class="fw-col-md-3     xs-sc-bf3dac22    ">
                                            <div class="fw-main-row">
                                                <div class="fw-col-inner">
                                                    <div class="fact-box">
                                                        <div class="text-center">
                                                            <i class="icon icon-invest"></i>
                                                            <h3 class="facts-num">
                                                                Tout en un trimestre.
                                                            </h3>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="xs-sec-4b7150e5" class="fw-main-row   xs-sc-4b7150e5   ">
                <div class="xs-main-overlay"></div>
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-inner">
                            <div id="xs-col-6b33f5b0" class="fw-col-md-6     xs-sc-6b33f5b0    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="heading  xs-heading-c6a3aa9e   ">
                                            <br>
                                            <h3 class="xs-title content-title boder-none"> Notre challenge: </h3>
                                        </div>
                                        <div class="xs-text-block  xs-text-block-cc99f650">
                                            <p>Nous comprenons que chaque investisseur est unique, c'est pourquoi nous
                                                prenons
                                                le temps de comprendre les objectifs, la tolérance au risque et
                                                l'expérience
                                                d'investissement de chaque client pour élaborer des stratégies
                                                d'investissement
                                                personnalisées.</p>
                                        </div>
                                        <div class="fw-list list-default  ">
                                            <ul>
                                                <li>0 commissions ni frais cachés.
                                                </li>
                                                <li>Retour sur investissement garantie
                                                </li>
                                                <li>Assurance Capital.
                                                </li>
                                                <li>Confidentialité.
                                                </li>
                                                <li>Service Client à l’écoute.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-col-inner">
                                <div id="xs-col-9e6a981c" class="fw-col-md-6     xs-sc-9e6a981c    ">
                                    <div class="fw-main-row">
                                        <div class="fw-col-inner">
                                            <div class="fw-single-image  ">
                                                <img src="../wp-content/uploads/2018/02/case-study1.jpg"
                                                    class="img-responsive" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="avis" class="fw-main-row parallax-section  xs-sc-3832556b   ">
                <div class="xs-main-overlay"></div>
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-inner">
                            <div id="xs-col-a89b183e" class="fw-col-md-6     xs-sc-a89b183e get_quote_form   ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="xs-text-block  xs-text-block-778d81b6">
                                            <p>
                                            <div role="form" class="wpcf7" id="wpcf7-f1313-p1073-o1"
                                                lang="en-US" dir="ltr">
                                                <div class="screen-reader-response"></div>
                                                <form action="#" method="post" class="wpcf7-form"
                                                    novalidate="novalidate">
                                                    <div style="display: none;">
                                                        <input type="hidden" name="_wpcf7" value="1313" />
                                                        <input type="hidden" name="_wpcf7_version" value="5.0.2" />
                                                        <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                        <input type="hidden" name="_wpcf7_unit_tag"
                                                            value="wpcf7-f1313-p1073-o1" />
                                                        <input type="hidden" name="_wpcf7_container_post"
                                                            value="1073" />
                                                    </div>
                                                    <div class="ts_quote_form">
                                                        <h2 class="column-title title-white">
                                                            <span>Contactez-nous</span> Et nous vous rappellerons
                                                        </h2>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p><span class="wpcf7-form-control-wrap text"><input
                                                                            type="text" name="text"
                                                                            value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                            aria-required="true" aria-invalid="false"
                                                                            placeholder="Nom Complet" /></span></p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <p><span class="wpcf7-form-control-wrap email"><input
                                                                            type="email" name="email"
                                                                            value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                            aria-required="true" aria-invalid="false"
                                                                            placeholder="Adresse E-Mail" /></span></p>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p><span class="wpcf7-form-control-wrap text"><input
                                                                            type="text" name="text"
                                                                            value="" size="40"
                                                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                            aria-required="true" aria-invalid="false"
                                                                            placeholder="Sujet" /></span></p>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <p><span class="wpcf7-form-control-wrap textarea">
                                                                        <textarea name="textarea" cols="40" rows="4" class="wpcf7-form-control wpcf7-textarea"
                                                                            aria-invalid="false" placeholder="Message"></textarea>
                                                                    </span></p>
                                                                <p><input type="submit" value="Envoyer"
                                                                        class="wpcf7-form-control wpcf7-submit btn btn-primary" />
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                </form>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="fw-col-inner">
                                <div id="xs-col-4fcc4dbb" class="fw-col-md-6     xs-sc-4fcc4dbb    ">
                                    <div class="fw-main-row">
                                        <div class="fw-col-inner">
                                            <div id="testimonial-slide"
                                                class="owl-carousel owl-theme testimonial-slide">
                                                <div class="item">
                                                    <div class="quote-item">
                                                        <p class="quote-text">
                                                            The Forexnic loan has been the most attractive loan products
                                                            on the market, helping numerous businesses gain access to
                                                            financing they would not be able to obtain conventionally
                                                            and at extremely favorable rates and terms. </p>
                                                        <div class="quote-item-footer">
                                                            <img class="testimonial-thumb"
                                                                src="../wp-content/uploads/2018/01/testimonial1.png"
                                                                alt="Sarah Arevik">
                                                            <div class="quote-item-info">
                                                                <h3 class="quote-author">Sarah Arevik <span
                                                                        class="quote-subtext">
                                                                        Chief Executive</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="quote-item">
                                                        <p class="quote-text">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                            sed do eiusmod tempor inci done idunt ut labore et dolore
                                                            magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                            exercitoa tion ullamco laboris nisi aliquip consequat. </p>
                                                        <div class="quote-item-footer">
                                                            <img class="testimonial-thumb"
                                                                src="../wp-content/uploads/2018/01/testimonial2.png"
                                                                alt="Narek Bedros">
                                                            <div class="quote-item-info">
                                                                <h3 class="quote-author">Narek Bedros <span
                                                                        class="quote-subtext">
                                                                        Sr. Manager</span>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
            <section id="blog" class="fw-main-row   xs-sc-d1ef01c2   section-padding">
                <div class="xs-main-overlay"></div>
                <div class="fw-container">
                    <div class="fw-row">
                        <div class="fw-col-inner">
                            <div id="xs-col-ae48829c" class="fw-col-md-12     xs-sc-ae48829c    ">
                                <div class="fw-main-row">
                                    <div class="fw-col-inner">
                                        <div class="heading  xs-heading-df708d12 text-center  ">
                                            <h2 class="xs-title section-title"><span class="shortheading">Ne rater
                                                    pas</span> Nos derniers articles </h2>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="latest-post post-large">
                                                <div class="latest-post-media">
                                                    <a href="../2018/01/17/apple-reveals-its-new/index.html"
                                                        class="latest-post-img">
                                                        <img class="img-responsive"
                                                            src="../wp-content/uploads/2018/01/news1-555x345.jpg"
                                                            alt="Apple reveals its new Melbourne flagship store">
                                                    </a>
                                                    <div class="post-cat">
                                                        <a href="../category/news/index.html"
                                                            rel="category tag">News</a>
                                                    </div>
                                                    <div class="post-body">
                                                        <span class="post-item-date">Jan 17, 2018</span>
                                                        <h4 class="post-title">
                                                            <a href="../2018/01/17/apple-reveals-its-new/index.html">Apple
                                                                reveals its new Melbourne flagship store</a>
                                                        </h4>
                                                        <a class="btn btn-primary"
                                                            href="../2018/01/17/apple-reveals-its-new/index.html">Read
                                                            More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="latest-post">
                                                <div class="post-body">
                                                    <div class="post-cat">
                                                        <a href="../category/news/index.html"
                                                            rel="category tag">News</a>
                                                    </div>
                                                    <h4 class="post-title">
                                                        <a href="../2018/01/17/bitcoin-is-the-gag-gift/index.html">Bitcoin
                                                            is the gag gift you should buy this holiday season</a>
                                                    </h4>
                                                    <span class="post-item-date">Jan 17, 2018</span>
                                                    <div class="post-text">
                                                        <p>What a crazy time. I have five children in colleghigh… </p>
                                                        <div class="text-right">
                                                            <a href="../2018/01/17/bitcoin-is-the-gag-gift/index.html">Read
                                                                More <i class="fa fa-long-arrow-right"> </i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="latest-post">
                                                <div class="post-body">
                                                    <div class="post-cat">
                                                        <a href="../category/news/index.html"
                                                            rel="category tag">News</a>
                                                    </div>
                                                    <h4 class="post-title">
                                                        <a
                                                            href="../2018/01/17/uber-is-selling-off-its-auto-leasing-business/index.html">Uber
                                                            is selling off its auto-leasing business</a>
                                                    </h4>
                                                    <span class="post-item-date">Jan 17, 2018</span>
                                                    <div class="post-text">
                                                        <p>What a crazy time. I have five children in colleghigh… </p>
                                                        <div class="text-right">
                                                            <a
                                                                href="../2018/01/17/uber-is-selling-off-its-auto-leasing-business/index.html">Read
                                                                More <i class="fa fa-long-arrow-right"> </i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer id="footer" class="footer">
            <div class="xs-main-overlay"></div>
            <div class="footer-top">
                <div class="container">
                    <div class="footer-top-bg row">
                        <div class="col-md-4 footer-box">
                            <i class="icon icon-map-marker2"></i>
                            <div class="footer-box-content">
                                <h3>Adresse</h3>
                                <p>1010 Avenue, NY 90001, USA</p>
                            </div>
                        </div>
                        <div class="col-md-4 footer-box">
                            <i class="icon icon-phone3"></i>
                            <div class="footer-box-content">
                                <h3>Appelez nous</h3>
                                <p>(+00) 000-000-0000</p>
                            </div>
                        </div>
                        <div class="col-md-4 footer-box">
                            <i class="icon icon-envelope"></i>
                            <div class="footer-box-content">
                                <h3>Contactez nous</h3>
                                <p><a href="#" class="__cf_email__"
                                        data-cfemail="c5acaba3aa85a0bda4a8b5a9a0eba6aaa8">contact@contact.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-main ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12">
                            <div id="media_image-4" class="footer-widget widget_media_image"><a href="#"><img
                                        width="184" height="40"
                                        src="{{ asset('wp-content/uploads/2018/02/logo.png') }}"
                                        class="image wp-image-1632  attachment-full size-full" alt=""
                                        style="max-width: 100%; height: auto;" /></a></div>
                            <div id="text-3" class="footer-widget widget_text">
                                <div class="textwidget">
                                    <div class="gap-20"></div>
                                    <p>Nous proposons des placements au travers de notre groupe, qui vous permettent
                                        d’entrée avec un ticket modéré compris entre 2000 et 5000 € , sur une durée de 3
                                        mois non renouvelable, afin de permettre à une multitude de saisir cette
                                        aubaine.</p>
                                </div>
                            </div>
                            <div id="xs-social-2" class="footer-widget bizipress_widget">
                                <div class="footer-social">
                                    <ul class="xs-social-list xs-social-list-v6 bizipress-social-list">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div id="text-4" class="footer-widget widget_text">
                                <h3 class="widget-title">Liens Utiles</h3>
                                <div class="textwidget">
                                    <ul class="list-dash">
                                        <li><a href="#">Acceuil</a></li>
                                        <li><a href="#">Service</a></li>
                                        <li><a href="#">Garantie</a></li>
                                        <li><a href="#">Avis</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div id="mc4wp_form_widget-2" class="footer-widget widget_mc4wp_form_widget">
                                <h3 class="widget-title">S'abonner</h3>
                                <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script>
                                    (function() {
                                        window.mc4wp = window.mc4wp || {
                                            listeners: [],
                                            forms: {
                                                on: function(evt, cb) {
                                                    window.mc4wp.listeners.push({
                                                        event: evt,
                                                        callback: cb
                                                    });
                                                }
                                            }
                                        }
                                    })();
                                </script>
                                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-1264" method="post"
                                    data-id="1264" data-name="">
                                    <div class="mc4wp-form-fields">
                                        <div class="finances-newsletter">
                                            <div class="newsletter-introtext">Ne manquez pas de vous abonner à nos
                                                nouveaux flux, veuillez remplir le formulaire ci-dessous.
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="EMAIL" placeholder="Votre adresse mail"
                                                    required />
                                                <input type="submit" value="Sign up" />
                                            </div>
                                        </div>
                                    </div><label style="display: none !important;">Leave this field empty if you're
                                        human: <input type="text" name="_mc4wp_honeypot" value=""
                                            tabindex="-1" autocomplete="off" /></label><input type="hidden"
                                        name="_mc4wp_timestamp" value="1675068139" /><input type="hidden"
                                        name="_mc4wp_form_id" value="1264" /><input type="hidden"
                                        name="_mc4wp_form_element_id" value="mc4wp-form-1" />
                                    <div class="mc4wp-response"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright  ">
            <div class="container">
                <div class="row border-top">
                    <div class="col-sm-6">
                        <div class="copyright-info">
                            <span> Copyright {{ date('Y') }} Bizipress. All Rights Reserved</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-menu">
                            <ul id="footer-menu" class="nav unstyled">
                                <li id="menu-item-1363"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-1363">
                                    <a href="#">Accueil</a>
                                </li>
                                <li id="menu-item-1364"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1364"><a
                                        href="#">Service</a></li>
                                <li id="menu-item-1365"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1365"><a
                                        href="#">Garantie</a></li>
                                <li id="menu-item-1367"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1367"><a
                                        href="#">Avis</a></li>
                                <li id="menu-item-1368"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1368"><a
                                        href="#">Blog</a></li>
                                <li id="menu-item-1369"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1369"><a
                                        href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                    </div>
                </div>
                <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
                    <button class="btn btn-primary" title="Back to Top"><i
                            class="fa fa-angle-double-up"></i></button>
                </div>
            </div>
        </div>
    </div>
    <script>
        (function() {
            function maybePrefixUrlField() {
                if (this.value.trim() !== '' && this.value.indexOf('http') !== 0) {
                    this.value = "http://" + this.value;
                }
            }

            var urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]');
            if (urlFields) {
                for (var j = 0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener('blur', maybePrefixUrlField);
                }
            }
        })();
    </script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var wpcf7 = {
            "apiSettings": {
                "root": "https:\/\/demo.xpeedstudio.com\/wp\/bizipress\/wp-json\/contact-form-7\/v1",
                "namespace": "contact-form-7\/v1"
            },
            "recaptcha": {
                "messages": {
                    "empty": "Please verify that you are not a robot."
                }
            }
        };
        /* ]]> */
    </script>
    <script type='text/javascript'
        src='{{ asset('wp-content/plugins/contact-form-7/includes/js/scriptsce52.js?ver=5.0.2') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/bizipress/assets/js/bootstrap.min5152.js?ver=1.0') }}'>
    </script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/bizipress/assets/js/html5shiv5152.js?ver=1.0') }}'>
    </script>
    <script type='text/javascript'
        src='{{ asset('wp-content/themes/bizipress/assets/js/jquery.counterup.min5152.js?ver=1.0') }}'></script>
    <script type='text/javascript'
        src='{{ asset('wp-content/themes/bizipress/assets/js/owl.carousel.min5152.js?ver=1.0') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/bizipress/assets/js/jquery.appear5152.js?ver=1.0') }}'>
    </script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/bizipress/assets/js/waypoints.min5152.js?ver=1.0') }}'>
    </script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/bizipress/assets/js/wow.min5152.js?ver=1.0') }}'>
    </script>
    <script type='text/javascript' src='{{ asset('wp-content/themes/bizipress/assets/js/custom5152.js?ver=1.0') }}'>
    </script>
    <script type='text/javascript'
        src='{{ asset('wp-content/plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/js/jquery.fs.wallpaperd9e1.js?ver=4.9.22') }}'>
    </script>
    <script type='text/javascript'
        src='{{ asset('wp-content/plugins/unyson/framework/extensions/shortcodes/shortcodes/section/static/js/scriptsd9e1.js?ver=4.9.22') }}'>
    </script>
    <script type='text/javascript' src='{{ asset('wp-includes/js/wp-embed.mind9e1.js?ver=4.9.22') }}'></script>
    <script type='text/javascript' defer
        src='{{ asset('wp-content/plugins/mailchimp-for-wp/assets/js/forms81db.js?ver=4.8.6') }}'></script>
</body>

</html>
