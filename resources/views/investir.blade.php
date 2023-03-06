@extends('layouts.user')

@section('extra-css')
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

    <style id='bizipress-style-inline-css' type='text/css'>
        .xs-sc-9919bd3b {
            padding: 100px 0px 130px 0px;
        }

        .xs-sc-9919bd3b {
            overflow: hidden;
        }

        .xs-heading-b0699a3b .xs-title span {}

        .xs-heading-b0699a3b .xs-title {
            font-size: 20px
        }

        .xs-heading-b0699a3b {
            margin-bottom: 30px
        }

        .xs-heading-3eb6298b .xs-title span {}

        .xs-heading-3eb6298b .xs-title {
            font-size: 20px
        }

        .xs-heading-3eb6298b {
            margin-bottom: 30px
        }

        .xs-sc-b9cf6254 {
            padding: 0px 0px 130px 0px;
        }

        .xs-sc-b9cf6254 {
            overflow: hidden;
        }

        .xs-heading-5f0cef08 .xs-title span {}

        .xs-heading-5f0cef08 .xs-title {
            font-size: 20px
        }

        .xs-heading-5f0cef08 {
            margin-bottom: 30px
        }

        .xs-heading-95b426f0 .xs-title span {}

        .xs-heading-95b426f0 .xs-title {
            font-size: 20px
        }

        .xs-heading-95b426f0 {
            margin-bottom: 30px
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
            background: url(../wp-content/uploads/2018/01/footer-bg.jpg);
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
@endsection

@section('content')
    <div class="blog" role="main">
        <div id="banner-area" class="banner-area" style="background: url({{ asset('wp-content/uploads/2018/02/banner2.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Investir avec nous</h1>
                            <ol class="breadcrumb">
                                <li><a href="/">Accueil</a></li>
                                <li>Investir avec nous</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="builder-content">

            <div id="post-1903" class="full-width-content post-1903 page type-page status-publish hentry">
                <div class="fw-page-builder-content">
                    <section id="xs-sec-9919bd3b" class="fw-main-row   xs-sc-9919bd3b   ">
                        <div class="xs-main-overlay"></div>
                        <div class="fw-container">
                            <div class="fw-row">
                                <div class="fw-col-inner">
                                    <div id="xs-col-9282633c" class="fw-col-md-12     xs-sc-9282633c    ">
                                        <div class="fw-main-row">
                                            <div class="fw-col-inner">
                                                <div class="heading  xs-heading-b0699a3b   ">
                                                    <h3 class='xs-title content-title boder-none'> Nos formulaires </h3>
                                                </div>
                                                <div class="featured-tab clearfix">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active">
                                                            <a class="animated fadeIn" href="#tab-cont-63d782f10c71f-1"
                                                                data-toggle="tab">
                                                                <span class="tab-head"><i
                                                                        class="icon icon-consult"></i></span>
                                                                <div class="tab-info">
                                                                    <span class="tab-text-title">
                                                                        Mieux vous connaitre </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <a class="animated fadeIn" href="#tab-cont-63d782f10c71f-2"
                                                                data-toggle="tab">
                                                                <span class="tab-head"><i class="icon icon-loan"></i></span>
                                                                <div class="tab-info">
                                                                    <span class="tab-text-title">
                                                                        Profil financier </span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active animated fadeInRight"
                                                            id="tab-cont-63d782f10c71f-1">
                                                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSc8nR_BzNeEuc3nEStJimfHtzxObAl8QiEkxIBhhxqJEO8lHg/viewform?embedded=true" width="1080" height="3260" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe>
                                                        </div>
                                                        <div class="tab-pane  animated fadeInRight"
                                                            id="tab-cont-63d782f10c71f-2">
                                                            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdmep0-5Fzad6osE1L7gEsKRHsNBwE30iu07v6N-m1_ZDNXGw/viewform?embedded=true" width="1080" height="1923" frameborder="0" marginheight="0" marginwidth="0">Chargement…</iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
