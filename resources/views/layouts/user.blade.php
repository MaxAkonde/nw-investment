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
    @yield('extra-css')
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

        @include('layouts.inc.header')

        @yield('content')

        @include('layouts.inc.footer')
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
